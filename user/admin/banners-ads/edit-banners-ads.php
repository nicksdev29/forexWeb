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
                <?php
                    $receivedData = '';
                    $currencyId = $_GET['currencyId'];
                    $query = "select * from currency where id=".$currencyId;
                    $getResult = mysqli_query($con, $query);
                    if( mysqli_num_rows($getResult) > 0) {
                        $receivedData = $getResult->fetch_assoc();
                    }
                ?>
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">Edit Currency</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Update Currency
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
									<input type="text" class="form-control" placeholder="Edit Currency Name" required
										name="title" value="<?php echo $receivedData['currency']; ?>">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Currency Symbol</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Edit Currency Symbol" required
										name="symbol" value="<?php echo $receivedData['symbol']; ?>">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Currency Description</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" placeholder="Edit Currency Description"
										name="content" max-length="248">
                                    <?php echo $receivedData['description']; ?>
                                    </textarea>
								</div>
							</div>

							<?php
								if(isset($_POST) && isset($_POST['title']) && isset($_POST['symbol']) && isset($_POST['content']) && isset($_POST['buy_rate']) && isset($_POST['sell_rate'])) {
									$title=mysqli_real_escape_string($con,$_POST['title']);
									$symbol=mysqli_real_escape_string($con,$_POST['symbol']);
									$content=mysqli_real_escape_string($con,$_POST['content']);
									$buyRate=mysqli_real_escape_string($con,$_POST['buy_rate']);
									$sellRate=mysqli_real_escape_string($con,$_POST['sell_rate']);
									$query = "update currency set `currency`='".$_POST['title']."', `symbol`='".$_POST['symbol']."', `description`='".$_POST['content']."', `buy_rate`='".$_POST['buy_rate']."', `sell_rate`='".$_POST['sell_rate']."' where `id`=".$currencyId;
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
									<input type="text" class="form-control" placeholder="Edit Buy Rate" required
										name="buy_rate" value="<?php echo $receivedData['buy_rate']; ?>">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Sell Rate</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Edit Sell Rate" required
										name="sell_rate" value="<?php echo $receivedData['sell_rate']; ?>">
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