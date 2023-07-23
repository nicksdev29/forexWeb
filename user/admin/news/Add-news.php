<?php include( realpath($_SERVER['DOCUMENT_ROOT']).'/connection.php'); ?>
<?php include '../head.php'?>
<body>
	<div class="wrapper">
		<div class="sidebar-cta">
			<?php include $adminRoot.'usersidemenu.php'?>
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
									<input type="text" class="form-control" placeholder="Add News Title"
										name="title">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">News Content</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" placeholder="Add News Content"
										name="content"></textarea>
								</div>
							</div>

							<?php
								if(isset($_POST) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['uploadedFileUrl'])) {
									$title=mysqli_real_escape_string($con,$_POST['title']);
									$content=mysqli_real_escape_string($con,$_POST['content']);
									$mediaLink=mysqli_real_escape_string($con,$_POST['uploadedFileUrl']);
									$query = "insert into posts(`title`, `media_link`, `content`, `created_time`, `created_by`) values ( '{$title}', '{$content}', '{$mediaLink}', '{date('Y-m-d H:i:s')}', 'admin' )";
									$result = mysqli_query($query, $con);
									print_r($result);
									if( isset($result) && $result > 0 ) {
									?>
										<script>window.location.href='./news-list.php';</script>
									<?php
									}
								}
							?>
						</div>


						<div class="col-6 col-lg-3">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Upload Media</h5>
								</div>
								<div class="card-body">

									<label for="attachment">Select a file:</label>
									<input type="file" id="news_attachment" name="news_attachment">

									<br><br>

									<input type="button" value="Upload" onclick="uploadNewsMedia();">
									<a href="" id="uploadedFile" target="_blank"></a>
									<input type="hidden" name="uploadedFileUrl" id="uploadedFileUrl" />
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

			<?php include ($adminRoot.'footer.php'); ?>
		</div>
	</div>

</body>

</html>