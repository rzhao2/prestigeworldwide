<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="script.js"></script>
	</head>
	<body>
		<?php ?>
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
				$state=$_GET['state'];
				echo $state;
				if(($state!=1)&&($state!=2)) {
				//state: 0 is to select connections or pura vida
				// this will display the pura vida or connections option as depicted on page 1 of Yunping"s prototype
				echo "
			        <div id='left' class='main_content'>
			          <div id='left_inner'>
			            <a href='orderform.php?state=1'>click here for connections</a>
			          </div><!--end left_inner -->
			        </div><!-- end left -->
			        
			        <div id='right' class='main_content'>
			          <div id='right_inner'>
			            <a href='orderform.php?state=2'>click here for connections</a>
			          </div><!--end right_inner -->
			        </div><!-- end right -->
		        ";
				}
				if($state==1) { //state 1 is page 2 of Yunping's prototype
				echo "state is 1";
				}
				if($state==2) {
				echo "state is 2";
				}
			?>
		</div><!-- end container -->
</html>
</body>
