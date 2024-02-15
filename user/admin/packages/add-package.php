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

				<form method="post" id="packageForm" enctype="multipart/form-data">
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">Add Package</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Create Package
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
									<input type="text" class="form-control" placeholder="Add Package Title" required
										name="package_title">
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Description</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" placeholder="Add Package Description"
										name="description">
									</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Package Content</h5>
								</div>
								<div class="card-body">
									<div class="contents">
										<button class="btn btn-primary" type="button" id="add-content">Add More +</button>
										<div class="content">
											<h4>Section - 1</h4>
											<input type="text" class="form-control content-title" placeholder="Content Title"
												name="content-title-1">
											<textarea class="form-control section-content" placeholder="Add Package Content"
												name="package-content-1" id="package-content-1">
											</textarea>
										</div>
									</div>
								</div>
								<div id="Package-content-final"></div>
							</div>
						</div>

						<?php
								if( isset($_POST) && isset($_POST['package_title']) ) {
									$package_title=mysqli_real_escape_string($con,$_POST['package_title']);
									$description=mysqli_real_escape_string($con,$_POST['description']);
									$content_json_arr = [];
									foreach ($_POST as $key => $value) {
										if(($key !== 'package_title') && $key !== 'description') {
											$arr_key = array( $key => $value );
											array_push( $content_json_arr, $arr_key );
										}
									}
									$content_json = json_encode($content_json_arr, JSON_UNESCAPED_SLASHES);
									$query = "INSERT INTO `packages` (`package_title`, `description`, `content_json`, `created_at`, `created_by`) VALUES ( '{$package_title}', '{$description}', '{$content_json}', '".date('Y-m-d H:i:s')."', 1 )";
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
				ClassicEditor
					.create( document.querySelector( '#package-content-1' ) )
					.catch( error => {
						console.error( error );
					} );

				$(document).ready( () => {
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