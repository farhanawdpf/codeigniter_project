
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>new page title</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="<?php echo base_url(); ?>/backend/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="<?php echo base_url(); ?>/backend/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="<?php echo base_url(); ?>/backend/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/backend/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="<?php echo base_url(); ?>/backend/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/backend/vendors/styles/style.css" />

		<?= $this->renderSection('stylesheets') ?>
		
	</head>
	<body>
		<!-- <div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="<?php echo base_url(); ?>/backend/vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div> -->

		<?php include('inc/header.php') ?>
		<?php include('inc/right-sidebar.php') ?>
		<?php include('inc/left-side-bar.php') ?>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div> 
                        <?= $this->renderSection('content') ?>
                    </div>
				</div>
                <?php include('inc/footer.php') ?>
			</div>
		</div>
		<!-- welcome modal start -->

		<!-- js -->
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/core.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/script.min.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/process.js"></script>
		<script src="<?php echo base_url(); ?>/backend/vendors/scripts/layout-settings.js"></script>
		<?= $this->renderSection('scripts') ?>
	</body>
</html>
