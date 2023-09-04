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
                <?php
                    $receivedData = '';
                    $newsId = $_GET['newsId'];
                    $query = "select * from posts where id=".$newsId;
                    $getResult = mysqli_query($con, $query);
                    if( mysqli_num_rows($getResult) > 0) {
                        $receivedData = $getResult->fetch_assoc();
                    }
                ?>
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">News</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Update News
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
									<input type="text" class="form-control" placeholder="Edit News Title" 
										name="title" value="<?php echo $receivedData['title']; ?>" required>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">News Content</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" placeholder="Edit News Content"
										name="content" required>
                                        <?php echo trim($receivedData['content']); ?>
                                    </textarea>
								</div>
							</div>

							<?php
								if(isset($_POST) && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['uploadedFileUrl'])) {
									$query = "update posts set `title`='".$_POST['title']."', `media_link`='".$_POST['uploadedFileUrl']."', `content`='".$_POST['content']."' where `id`=".$newsId;
									$result = mysqli_query($con, $query);
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
									<input type="file" id="news_attachment" name="news_attachment" accept=".jpg,.jpeg,.png">

									<br><br>

									<input type="button" value="Upload" onclick="uploadNewsMedia();">
									<a href="<?php echo $receivedData['media_link']; ?>" id="uploadedFile" target="_blank">
                                        <?php echo $receivedData['media_link']; ?>
                                    </a>
									<input type="hidden" value="<?php echo $receivedData['media_link']; ?>" name="uploadedFileUrl" id="uploadedFileUrl" />
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

			<?php include ($adminRoot.'footer.php'); ?>
		</div>
	</div>

</body>

</html>