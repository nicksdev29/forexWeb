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
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">News</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Create News
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">News title</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Add News Title" required
										name="title">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">News Content</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" placeholder="Add News Content" required
										name="content"></textarea>
								</div>
							</div>

							<?php
								if(isset($_POST) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['uploadedFileUrl'])) {
									$title=mysqli_real_escape_string($con,$_POST['title']);
									$content=mysqli_real_escape_string($con,$_POST['content']);
									$mediaLink=mysqli_real_escape_string($con,$_POST['uploadedFileUrl']);
									$query = "INSERT INTO `posts` (`title`, `media_link`, `content`, `created_time`, `created_by`) VALUES ( '{$title}', '{$mediaLink}', '{$content}', '".date('Y-m-d H:i:s')."', 1 )";
									try {
										$result = mysqli_query($con, $query);
										print_r($result);
										if( isset($result) && $result > 0 ) {
										?>
											<script>window.location.href='./news-list.php';</script>
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


						<div class="col-6 col-lg-3">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Upload Media</h5>
								</div>
								<div class="card-body" style="overflow: hidden">

									<label for="attachment">Select a file:</label>
									<input type="file" id="news_attachment" name="news_attachment" accept=".jpg,.jpeg,.png">

									<br><br>

									<input type="button" value="Upload" onclick="uploadNewsMedia();">
									<a href="" id="uploadedFile" target="_blank"></a>
									<input type="hidden" name="uploadedFileUrl" id="uploadedFileUrl" />
									<div class="loader" id="media-upload-loader" style="display:none;position: absolute;top: 0;left: 0;height: 100%;width: 100%;align-items: center;justify-content: center;background-color: #ffffffd6;z-index: 99;">
										<div class="spinner-border" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
								</div>

								<div class="card-header">
									<h5 class="card-title mb-0">Category</h5>
								</div>
								<div class="card-body">
									<div>
										<label class="form-check">
											<input class="form-check-input" type="checkbox" value="">
											<span class="form-check-label">
											News
											</span>
										</label>
										<label class="form-check">
											<input class="form-check-input" type="checkbox" value="">
											<span class="form-check-label">
											Blog
											</span>
										</label>
										<label class="form-check">
											<input class="form-check-input" type="checkbox" value="">
											<span class="form-check-label">
											Category3
											</span>
										</label>

									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Tag</h5>
									</div>
					
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Input">
								</div>

						</div>
					</div>
				</form>
				</div>
			</main>

			<?php include ('../footer.php'); ?>
		</div>
	</div>

</body>

</html>