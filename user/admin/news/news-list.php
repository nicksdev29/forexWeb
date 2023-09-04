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
												$currentPage = (isset($_GET['current_page'])) ? $_GET['current_page'] : 1;
												$pageLimit = 5;
												$offset = ($currentPage-1) * $pageLimit;
												$query = "select * from posts order by created_time desc limit ".$pageLimit." offset ".$offset;
												$result = mysqli_query($con, $query);
												$count = 0;
												$queryCount = "select count(*) as total from `posts`";
												$resultCount = mysqli_query($con, $queryCount);
												$totalNews = $resultCount->fetch_assoc();
												while( $newsList = $result->fetch_assoc() ) {
												?>
												<tr>
													<td><?php echo ++$count; ?></td>
													<td><?php echo $newsList['title']; ?></td>
													<td>
														<div class="actions-group">
															<a class="btn btn-primary" href="./edit-news.php?newsId=<?php echo $newsList['id']; ?>">Edit</a>
															<a class="btn btn-danger" href="./del-news.php?news=<?php echo $newsList['id'] ?>">Delete</a>
														</div>
													</td>
												</tr>
												<?php
												}
											?>
										</tbody>
									</table>
									<?php if($totalNews['total'] > $pageLimit) { ?>
									<nav aria-label="...">
										<ul class="pagination">
											<li class="page-item <?php echo ($currentPage == 1) ? "disabled" : "" ?>">
												<a class="page-link" href="?current_page=<?php echo $currentPage-1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
											</li>
											<?php for($pageCount = 1; $pageCount <= ($totalNews['total']/$pageLimit); $pageCount++) { ?>
											<li class="page-item <?php echo ($pageCount == $currentPage) ? "active" : "" ?>"><a class="page-link" href="?current_page=<?php echo $pageCount; ?>"><?php echo $pageCount; ?></a></li>
											<?php } ?>
											<li class="page-item <?php echo ($currentPage == ($totalNews['total']/$pageLimit)) ? "disabled" : "" ?>"">
											<a class="page-link" href="?current_page=<?php echo $currentPage+1 ?>">Next</a>
											</li>
										</ul>
									</nav>
									<?php } ?>
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