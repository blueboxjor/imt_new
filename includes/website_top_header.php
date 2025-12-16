<?php
include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Biocare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="assets/js/jquery.js"></script>
    <link rel="icon" href="<?php echo IMAGES . favicon; ?>" type="image/x-icon" />

	<!-- Google Font -->
	<link href="../../css.css?family=Lato:300,400,900%7CPoppins:300,400,800&amp;subset=latin-ext" rel="stylesheet">

	<!-- Font Awesome and peStroke Icons -->
	<link rel="stylesheet" type="text/css" href="assets/css/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/magnific-popup.css" />

	<!-- Required CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">


	<!-- PrettyPhoto -->
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
    <!-- Twenty Twenty Effect -->
    <script src="assets/js/jquery.twentytwenty.js"></script>
    <script src="assets/js/jquery.event.move.js"></script>
	
	<!-- Required Scripts -->
	<script src="assets/js/superfish.js"></script>
	<script src="assets/js/hoverIntent.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/labora-custom.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
	<link href="assets/css/aos.css" rel="stylesheet">
	<script src="assets/js/aos.js"></script>

	<!-- Flex Slider -->
	<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
	<script src="assets/js/jquery.flexslider-min.js"></script>

	<!-- Owl Carousel -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<script src="assets/js/owl.carousel.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>
	<style>
		.newMaxHeight {
    /* max-width: 13.667% !important; */
	margin-bottom: 20px;
	/* max-width: 13.667%; */
	
}
	</style>

	<script>
	jQuery(document).ready(function($) {
		$("#owl-20").owlCarousel({
		autoPlay: 3000,
		pagination : false,
		items : 5,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [1024,4],
		itemsTablet : [768,2],
		itemsMobile : [479,2]
		});
	});
	</script>
</head>

