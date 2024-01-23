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
								<h1 class="h3 d-inline align-middle">Add Currency</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Create Currency
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Currency Name</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Add Currency Name" required
										name="title">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Currency Symbol</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Add Currency Symbol" required
										name="symbol">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Currency Description</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" placeholder="Add Currency Description"
										name="content" max-length="248"></textarea>
								</div>
							</div>

							<?php
								if(isset($_POST) && isset($_POST['title']) && isset($_POST['symbol']) && isset($_POST['content']) && isset($_POST['buy_rate']) && isset($_POST['sell_rate'])) {
									$title=mysqli_real_escape_string($con,$_POST['title']);
									$symbol=mysqli_real_escape_string($con,$_POST['symbol']);
									$content=mysqli_real_escape_string($con,$_POST['content']);
									$buyRate=mysqli_real_escape_string($con,$_POST['buy_rate']);
									$sellRate=mysqli_real_escape_string($con,$_POST['sell_rate']);
									$query = "INSERT INTO `currency` (`currency`, `symbol`, `description`,  `buy_rate`,  `sell_rate`, `created_at`, `created_by`) VALUES ( '{$title}', '{$symbol}', '{$content}', '{$buyRate}', '{$sellRate}', '".date('Y-m-d H:i:s')."', 1 )";
									try {
										$result = mysqli_query($con, $query);
										print_r($result);
										if( isset($result) && $result > 0 ) {
										?>
											<script>window.location.href='./currency-list.php';</script>
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
									<h5 class="card-title mb-0">Buy Rate</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Add Buy Rate" required
										name="buy_rate">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Sell Rate</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Add Sell Rate" required
										name="sell_rate">
								</div>
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