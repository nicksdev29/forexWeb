<?php include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php'); ?>
<?php include '../head.php'?>
<body>
	<div class="wrapper">
		<div class="sidebar-cta">
			<?php include( '../usersidemenu.php'); ?>
		</div>

		<div class="main">

			<main class="content">
				<div class="container-fluid p-0">

				<form method="post" id="attachForm" enctype="multipart/form-data">
                <?php
                    $receivedData = '';
                    $packagesId = $_GET['packagesId'];
                    $query = "select * from packages where `id`=".$packagesId;
                    $getResult = mysqli_query($con, $query);
                    if( mysqli_num_rows($getResult) > 0) {
                        $receivedData = $getResult->fetch_assoc();
                    }
                ?>
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">Edit Package</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Update Package
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Package Title</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Edit packages Name" required
										name="package_title" value="<?php echo $receivedData['package_title']; ?>">
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Package Featured Image</h5>
								</div>
								<div class="card-body">

								<div class="row">
									<div class="col-6 col-lg-6">
										<label for="attachment">Select a file:</label>
										<input type="file" id="img_attachment" name="img_attachment" accept=".jpg,.jpeg,.png">

										<br><br>

										<input type="button" value="Upload" onclick="uploadPackageImg();">
									</div>
									<div class="col-6 col-lg-6">
										<img src="<?php echo $receivedData['feature_img_url']; ?>" id="uploadedFile" target="_blank" width="100%" />
									</div>
								</div>
									<input type="hidden" name="uploadedFileUrl" id="uploadedFileUrl" value="<?php echo $receivedData['feature_img_url']; ?>" />
									<div class="loader" id="media-upload-loader" style="display:none;position: absolute;top: 0;left: 0;height: 100%;width: 100%;align-items: center;justify-content: center;background-color: #ffffffd6;z-index: 99;">
										<div class="spinner-border" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Description</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" placeholder="Edit Package Description"
										name="description">
										<?php echo $receivedData['description']; ?>
									</textarea>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Package Content</h5>
								</div>
								<div class="card-body">
									<div class="contents">
										<button class="btn btn-primary" type="button" id="add-content">Add More +</button>
										<?php
											$contents = json_decode($receivedData['content_json']);
											$count = 0;
											foreach ($contents as $key => $value) {
												foreach ($value as $objKey => $objValue) {
													if(str_contains($objKey, 'title')) {
														?>
														<div class="content">
															<h4>Section - <?php echo ++$count; ?></h4>
															<input type="text" class="form-control content-title" placeholder="Content Title"
																name="<?php echo $objKey; ?>" value="<?php echo $objValue; ?>">
														<?php
													} else if(str_contains($objKey, 'package') && $count === 0) {
														?>
															<textarea class="form-control section-content" placeholder="Edit Package Content"
																name="<?php echo $objKey; ?>" id="<?php echo $objKey; ?>">
																<?php echo $objValue; ?>
															</textarea>
														</div>
														<?php
													} else if(str_contains($objKey, 'package') && $count > 0) {
														?>
															<textarea class="form-control section-content" placeholder="Edit Package Content"
																name="<?php echo $objKey; ?>" id="<?php echo $objKey; ?>">
																<?php echo $objValue; ?>
															</textarea>
															<button class="btn btn-primary del-btn" onclick="removeContent($(this))" type="button">Delete</button>
														</div>
														<?php
													}
												}
											}
										?>
									</div>
								</div>
								<div id="Package-content-final"></div>
							</div>
						</div>

						<?php
							if(isset($_POST) && isset($_POST['package_title']) ) {
								$package_title=mysqli_real_escape_string($con,$_POST['package_title']);
								$description=mysqli_real_escape_string($con,$_POST['description']);
								$featuredImg=mysqli_real_escape_string($con,$_POST['uploadedFileUrl']);
								$content_json_arr = [];
								foreach ($_POST as $key => $value) {
									if(($key !== 'package_title') && ($key !== 'description') && ($key !== 'uploadedFileUrl')) {
										$arr_key = array( $key => $value );
										array_push( $content_json_arr, $arr_key );
									}
								}
								$content_json = mysqli_real_escape_string( $con, json_encode($content_json_arr, JSON_UNESCAPED_SLASHES) );
								$query = "update packages set `package_title`='".$package_title."', `description`='".$description."', `feature_img_url`='".$featuredImg."', `content_json`='".$content_json."' where `id`=".$packagesId;
								try {
									$result = mysqli_query($con, $query);
									if( isset($result) && $result > 0 ) {
									?>
										<script>window.location.href='./packages-list.php';</script>
									<?php
									} else {
										printf("error: %s\n", mysqli_error($con));
									}
								} catch (Exception $e) {
									print_r($e);
								}
							}
						?>
                    </div>
				</form>
				</div>
			</main>

			<?php include ('../footer.php'); ?>

			<script>

				$(document).ready( () => {
					$('.content .section-content').each( (ind, elm) => {
						ClassicEditor
							.create( elm )
							.catch( error => {
								console.error( error );
							} );
					});
					$('#add-content').click( () => {
						let count = $('.content').length;
						$('.content').last().clone().appendTo('.contents')
							.children('input.content-title').first().attr('name', 'content-title-'+count)
							.next('textarea.section-content').first().attr('name', 'package-content-'+count).attr('id', 'package-content-'+count);
						$('.content').last().find('h4').first().html('Section - ' + count);
						if($('.content').last().children('.del-btn').length === 0) {
							$('.content').last()
								.append(`<button class="btn btn-primary del-btn" onclick="removeContent($(this))" type="button">Delete</button>`);
						}
						$('.content').last().children('div.ck').remove();
						ClassicEditor
							.create( document.querySelector( '#package-content-'+count ) )
							.catch( error => {
								console.error( error );
							} );
					});
				});
				function removeContent(delContent) {
					delContent.parent('.content').remove();
					$('.content').each( (ind, elm) => {
						if(ind > 0 && elm !== null) {
							$(elm).find('h4').first().html('Section - ' + ind);
							$(elm).find('input.content-title').first().attr('name', 'content-title-'+(ind));
							$(elm).find('textarea.section-content').first().attr('name', 'package-content-'+(ind)).attr('id', 'package-content-'+(ind));
						}
					});
				}

			</script>
		</div>
	</div>

</body>

</html>