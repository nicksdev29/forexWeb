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

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">News</h1>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">News List</h5>
								</div>
								<div class="card-body">
									<table class="table responsive-table">
										<thead>
											<tr>
												<th>#</th>
												<th>News Title</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$query = "select * from posts";
												$result = mysqli_query($con, $query);
												$count = 0;
												while( $newsList = $result->fetch_assoc() ) {
												?>
												<tr>
													<td><?php echo ++$count; ?></td>
													<td><?php echo $newsList['title']; ?></td>
													<td>
														<div class="actions-group">
															<a class="btn btn-primary" href="./edit-news.php?newsId=<?php echo $newsList['id']; ?>">Edit</a>
															<a class="btn btn-danger" href="./delete-news.php">Delete</a>
														</div>
													</td>
												</tr>
												<?php
												}
											?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
							
						
					</div>
				</div>
			</main>
			<?php include ($adminRoot.'footer.php'); ?>
		</div>
	</div>

</body>

</html>