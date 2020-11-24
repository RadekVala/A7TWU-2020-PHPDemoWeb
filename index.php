<?php 
	include 'includes/functions.inc.php';
	// take url parameter menu value
	$selectedMenu = null;
	if(isset($_GET['menu'])){
		$selectedMenu = $_GET['menu'];
	}
?>
<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body <?php echo isSubpage($selectedMenu, $navItems); ?>>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>Projection</strong> by TEMPLATED</a>
					<?php
						// site navigation
						include 'includes/nav.inc.php';
					?>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Web Content -->
			<?php if(isset($_GET['mailsent']) && $_GET['mailsent']==1) { ?>
				<div style="position:absolute; background-color: white; width: 80%; left: 10%; top: 40px; z-index:9999; text-align:center; padding: 10px;">
					<h3>Your email was sent</h3>
				</div>
			<?php } ?>	
			<?php includeContent($selectedMenu) ?>	

		<!-- Footer -->
			<?php include 'includes/footer.inc.php' ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>