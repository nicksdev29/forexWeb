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

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Banners</h1>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Banners List</h5>
								</div>
								<div class="card-body">
                                    <table class="table responsive-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Banner Name</th>
                                                <th>Banner Place</th>
                                                <th>Visibility</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $currentPage = (isset($_GET['current_page'])) ? $_GET['current_page'] : 1;
                                                $pageLimit = 5;
                                                $offset = ($currentPage-1) * $pageLimit;
                                                $query = "select * from banners order by created_at asc limit ".$pageLimit." offset ".$offset;
                                                $result = mysqli_query($con, $query);
                                                $count = 0;
                                                $queryCount = "select count(*) as total from `banners`";
                                                $resultCount = mysqli_query($con, $queryCount);
                                                $totalBanners = $resultCount->fetch_assoc();
                                                while( $bannersList = $result->fetch_assoc() ) {
                                                    ++$count
                                                ?>
                                                <tr>
                                                    <td><?php echo ($offset + $count); ?></td>
                                                    <td><?php echo $bannersList['banner_name']; ?></td>
                                                    <td><?php echo $bannersList['banner_place']; ?></td>
                                                    <td><?php echo $bannersList['visibility']; ?></td>
                                                    <td>
                                                        <div class="actions-group">
                                                            <a class="btn btn-primary" href="./edit-banners-ads.php?bannersId=<?php echo $bannersList['id']; ?>">Edit</a>
                                                            <a class="btn btn-danger" href="./del-banners-ads.php?bannersId=<?php echo $bannersList['id'] ?>">Delete</a>
                                                        </div>
                                                        <div class="loader" id="buy-sell-loader<?php echo $bannersList['id']; ?>" style="display: none;position: absolute;left: 0;margin-top: -6vh;height: 6vh;width: 100%;align-items: center;justify-content: center;background-color: #ffffffd6;z-index: 99;">
                                                            <div class="spinner-border" role="status">
                                                                <span class="sr-only">Loading...</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
									<?php if($totalBanners['total'] > $pageLimit) {
                                        $totalPage = ceil($totalBanners['total']/$pageLimit); ?>
									<nav aria-label="...">
										<ul class="pagination">
											<li class="page-item <?php echo (($currentPage <= 1) || ($currentPage > $totalPage)) ? "disabled" : "" ?>">
												<a class="page-link" href="?current_page=<?php echo $currentPage-1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
											</li>
											<?php for($pageCount = 1; $pageCount <= $totalPage; $pageCount++) { ?>
											<li class="page-item <?php echo ($pageCount == $currentPage) ? "active" : "" ?>">
                                                <a class="page-link" href="?current_page=<?php echo $pageCount; ?>"><?php echo $pageCount; ?></a>
                                            </li>
											<?php } ?>
											<li class="page-item <?php echo ($currentPage >= $totalPage) ? "disabled" : "" ?>"">
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
			<?php include ('../footer.php'); ?>
		</div>
	</div>

</body>

</html>