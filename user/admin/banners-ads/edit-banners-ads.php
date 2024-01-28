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
                    $bannersId = $_GET['bannersId'];
                    $query = "select * from banners where `id`=".$bannersId;
                    $getResult = mysqli_query($con, $query);
                    if( mysqli_num_rows($getResult) > 0) {
                        $receivedData = $getResult->fetch_assoc();
                    }
                ?>
					<div class="row">
						<div class="col-12 col-lg-9">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">Edit Banner</h1>
							</div>
						</div>
						<div class="col-6 col-lg-3">
							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-dark">
									Update banner
								</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Banner Name</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Edit banners Name" required
										name="banner_name" value="<?php echo $receivedData['banner_name']; ?>">
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Banner Place</h5>
								</div>
								<div class="card-body">
									<select class="form-select" required
										name="banner_place" value="<?php echo $receivedData['banner_place']; ?>">
										<option value="">Select Banner Place</option>
										<option value="HOME_SLIDER" <?php echo ($receivedData['banner_place'] == 'HOME_SLIDER') ? 'selected' : ''; ?>>Home Page Slider</option>
										<option value="ABOUT_HEADER" <?php echo ($receivedData['banner_place'] == 'ABOUT_HEADER') ? 'selected' : ''; ?>>About Header</option>
										<option value="TRAVELS_HEADER" <?php echo ($receivedData['banner_place'] == 'TRAVELS_HEADER') ? 'selected' : ''; ?>>Travels Header</option>
										<option value="FOREX_HEADER" <?php echo ($receivedData['banner_place'] == 'FOREX_HEADER') ? 'selected' : ''; ?>>Forex Header</option>
										<option value="SERVICES_HEADER" <?php echo ($receivedData['banner_place'] == 'SERVICES_HEADER') ? 'selected' : ''; ?>>Services Header</option>
										<option value="CONTACT_HEADER" <?php echo ($receivedData['banner_place'] == 'CONTACT_HEADER') ? 'selected' : ''; ?>>Contact Header</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Visibility</h5>
								</div>
								<div class="card-body">
									<select class="form-select" required
										name="visibility" value="<?php echo $receivedData['visibility']; ?>">
										<option value="">Select Visibility</option>
										<option value="VISIBLE" selected>Visisble</option>
										<option value="HIDDEN">Hidden</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Banner Content</h5>
								</div>
								<div class="card-body">
									<div id="banner-content">
										<?php echo $receivedData['content']; ?>
									</div>
								</div>
								<div id="banner-content-final"></div>
							</div>

							<?php
								if(isset($_POST) && isset($_POST['banner_name']) && isset($_POST['banner_place']) && isset($_POST['content']) && isset($_POST['visibility'])) {
									$banner_name=mysqli_real_escape_string($con,$_POST['banner_name']);
									$banner_place=mysqli_real_escape_string($con,$_POST['banner_place']);
									$content=mysqli_real_escape_string($con,$_POST['content']);
									$visibility=mysqli_real_escape_string($con,$_POST['visibility']);
									$query = "update banners set `banner_name`='".$_POST['banner_name']."', `banner_place`='".$_POST['banner_place']."', `content`='".$_POST['content']."', `visibility`='".$_POST['visibility']."' where `id`=".$bannersId;
									try {
										$result = mysqli_query($con, $query);
										if( isset($result) && $result > 0 ) {
											die($result);
										?>
											<script>window.location.href='./banners-ads-list.php';</script>
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

                    </div>
				</form>
				</div>
			</main>

			<?php include ('../footer.php'); ?>

			<script>
				const editor = grapesjs.init({
					// Indicate where to init the editor. You can also pass an HTMLElement
					container: '#banner-content',
					// Get the content for the canvas directly from the element
					// As an alternative we could use: `components: '<h1>Hello World Component!</h1>'`,
					fromElement: true,
					// Size of the editor
					height: '400px',
					width: 'auto',
					assetManager: {
          				embedAsBase64: true,
						assets: [],
						upload: '<?php echo	$baseUrl; ?>/user/admin/common/upload-banner.php'
					},
					plugins: [
						'gjs-blocks-basic',
						'grapesjs-plugin-forms',
						'grapesjs-component-countdown',
						'grapesjs-plugin-export',
						'grapesjs-tabs',
						'grapesjs-custom-code',
						'grapesjs-touch',
						'grapesjs-parser-postcss',
						'grapesjs-tooltip',
						'grapesjs-tui-image-editor',
						'grapesjs-typed',
						'grapesjs-style-bg',
						'grapesjs-preset-webpage',
					],
					pluginsOpts: {
						'gjs-blocks-basic': { flexGrid: true },
						'grapesjs-tui-image-editor': {
							script: [
							// 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js',
							'https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js',
							'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js',
							'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js'
							],
							style: [
							'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css',
							'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css',
							],
						},
						'grapesjs-tabs': {
							tabsBlock: { category: 'Extra' }
						},
						'grapesjs-typed': {
							block: {
							category: 'Extra',
							content: {
								type: 'typed',
								'type-speed': 40,
								strings: [
								'Text row one',
								'Text row two',
								'Text row three',
								],
							}
							}
						},
						'grapesjs-preset-webpage': {
							modalImportTitle: 'Import Template',
							modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
							modalImportContent: function(editor) {
							return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
							},
						},
					},
				});
				editor.Panels.getButton('options', 'sw-visibility').set('active', true);
				editor.on('asset:upload:response', (response) => {
					console.log('upload response: ', response);
				});
				$('#attachForm').submit((e) => {
					let content =`<style>` + editor.getCss() + `</style>`;
					// content +=`<style>` + editor.getCss() + `</style>`;
					let htmlContent = $('#banner-content-final').html( editor.getHtml() );
					content += `</br>`+$(htmlContent).html();
					console.log('editor content: ', content);
					$("<input />").attr("type", "hidden")
						.attr("name", "content")
						.attr("value", content)
						.appendTo(e.target);
					console.log('form data: ', $(e.target).serializeArray());
					// $(this).submit();
				});
			</script>
			<style>
				#banner-content {
					border: 3px solid #444;
					margin: 1rem 0 0 0;
				}

				/* Reset some default styling */
				.gjs-cv-canvas {
					top: 0;
					width: 100%;
					height: 100%;
				}
			</style>
		</div>
	</div>

</body>

</html>