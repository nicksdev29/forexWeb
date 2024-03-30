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
						<h1 class="h3 d-inline align-middle">Packages</h1>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Packages List</h5>
								</div>
								<div class="card-body">
                                    <table class="table responsive-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Package Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $currentPage = (isset($_GET['current_page'])) ? $_GET['current_page'] : 1;
                                                $pageLimit = 5;
                                                $offset = ($currentPage-1) * $pageLimit;
                                                $query = "select * from packages order by created_at asc limit ".$pageLimit." offset ".$offset;
                                                $result = mysqli_query($con, $query);
                                                $count = 0;
                                                $queryCount = "select count(*) as total from `packages`";
                                                $resultCount = mysqli_query($con, $queryCount);
                                                $totalPackages = $resultCount->fetch_assoc();
                                                while( $packagesList = $result->fetch_assoc() ) {
                                                ?>
                                                <tr>
                                                    <td><?php echo ++$count * ($offset+1); ?></td>
                                                    <td><?php echo $packagesList['package_title']; ?></td>
                                                    <td>
                                                        <div class="actions-group">
                                                            <a class="btn btn-primary" href="./edit-package.php?packagesId=<?php echo $packagesList['id']; ?>">Edit</a>
                                                            <a class="btn btn-danger" href="./del-packages.php?packagesId=<?php echo $packagesList['id'] ?>">Delete</a>
                                                        </div>
                                                        <div class="loader" id="buy-sell-loader<?php echo $packagesList['id']; ?>" style="display: none;position: absolute;left: 0;margin-top: -6vh;height: 6vh;width: 100%;align-items: center;justify-content: center;background-color: #ffffffd6;z-index: 99;">
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
									<?php if($totalPackages['total'] > $pageLimit) {
                                        $totalPage = ceil($totalPackages['total']/$pageLimit); ?>
									<nav aria-label="...">
										<ul class="pagination">
											<li class="page-item <?php echo (($currentPage == 1) || ($currentPage <> $totalPage)) ? "disabled" : "" ?>">
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