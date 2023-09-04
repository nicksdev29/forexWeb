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
						<h1 class="h3 d-inline align-middle">Currencies</h1>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Currency List</h5>
								</div>
								<div class="card-body">
                                    <table class="table responsive-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Currency</th>
                                                <th>Symbol</th>
                                                <th>Buy Rate</th>
                                                <th>Sell Rate</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $currentPage = (isset($_GET['current_page'])) ? $_GET['current_page'] : 1;
                                                $pageLimit = 5;
                                                $offset = ($currentPage-1) * $pageLimit;
                                                $query = "select * from currency order by currency asc limit ".$pageLimit." offset ".$offset;
                                                $result = mysqli_query($con, $query);
                                                $count = 0;
                                                $queryCount = "select count(*) as total from `currency`";
                                                $resultCount = mysqli_query($con, $queryCount);
                                                $totalCurency = $resultCount->fetch_assoc();
                                                while( $currencyList = $result->fetch_assoc() ) {
                                                ?>
                                                <tr>
                                                    <td><?php echo ++$count; ?></td>
                                                    <td><?php echo $currencyList['currency']; ?></td>
                                                    <td><strong><?php echo $currencyList['symbol']; ?></strong></td>
                                                    <td><input type="text" required class="form-control" id="buy_rate_<?php echo $currencyList['id']; ?>" name="buy_rate_<?php echo $currencyList['id']; ?>" value="<?php echo $currencyList['buy_rate']; ?>" style="width: 98px" /></td>
                                                    <td><input type="text" required class="form-control" id="sell_rate_<?php echo $currencyList['id']; ?>" name="sell_rate_<?php echo $currencyList['id']; ?>" value="<?php echo $currencyList['sell_rate']; ?>" style="width: 98px" /></td>
                                                    <td>
                                                        <div class="actions-group">
                                                            <a class="btn btn-primary" href="./edit-currency.php?currencyId=<?php echo $currencyList['id']; ?>">Edit</a>
                                                            <input type="hidden">
                                                            <button onclick="updateBuySellRate(<?php echo $currencyList['id']; ?>, $('#buy_rate_<?php echo $currencyList['id']; ?>').val(), $('#sell_rate_<?php echo $currencyList['id']; ?>').val())" class="btn btn-primary">Update Buy/Sell Rate</button>
                                                            <a class="btn btn-danger" href="./del-currency.php?currency=<?php echo $currencyList['id'] ?>">Delete</a>
                                                        </div>
                                                        <div class="loader" id="buy-sell-loader<?php echo $currencyList['id']; ?>" style="display: none;position: absolute;left: 0;margin-top: -6vh;height: 6vh;width: 100%;align-items: center;justify-content: center;background-color: #ffffffd6;z-index: 99;">
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
									<?php if($totalCurency['total'] > $pageLimit) { ?>
									<nav aria-label="...">
										<ul class="pagination">
											<li class="page-item <?php echo ($currentPage == 1) ? "disabled" : "" ?>">
												<a class="page-link" href="?current_page=<?php echo $currentPage-1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
											</li>
											<?php for($pageCount = 1; $pageCount <= ($totalCurency['total']/$pageLimit); $pageCount++) { ?>
											<li class="page-item <?php echo ($pageCount == $currentPage) ? "active" : "" ?>"><a class="page-link" href="?current_page=<?php echo $pageCount; ?>"><?php echo $pageCount; ?></a></li>
											<?php } ?>
											<li class="page-item <?php echo ($currentPage == ($totalCurency['total']/$pageLimit)) ? "disabled" : "" ?>"">
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