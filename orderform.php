<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="script.js"></script>
	</head>
	<body>
		<?php
		?>
		<div id="container">
			
			<div id="banner">
				<div id="banner_left">
					The Connections Connection<!--<img src="OUR_LOGO_GOES_HERE.jpg" />-->
				</div><!--end banner left-->
				<div id="banner_right">
					something else decorative goes here, yay!
				</div><!-- end banner right -->
			</div><!-- end banner -->
			
			<?php
				$location = $_GET['location'];
				echo $location;

				if($location == connections) {//location 1 is page 2 of Yunping's prototype
					echo "location is connections";
				} else if($location == puravida) {
					echo "location is pura vida";
				}
			?>
		</div><!-- end container -->
</html>
</body>
