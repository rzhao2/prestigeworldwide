<?php
    /*echo "http://" . $_SERVER['HTTP_HOST'];*/
    if ("http://" . $_SERVER['HTTP_HOST'] == "http://earthftw.com") {
        echo '<script type="text/javascript">
        <!--
        window.location = "http://www.earthftw.com"
        //-->
        </script>';
        end;
    }
?>


<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="script.js"></script>
	</head>
	<body>
		<div id="container">
			
			<?php
				include 'banner.php';
			?>
            
			<nav id="nav_bar">
                <a href="">Home</a> | <a href="">About Us</a> | <a href="">Menus</a> | <a href="">Nutritional Info</a>
            </nav><!-- end nav_bar -->
            
			<div id="header">
				<p>Choose your cafe</p>
			</div><!-- end header -->
			
			<div id='left'>
				<div id='left_inner'>
					<a href='orderform.php?location=connections'>Click here for Connections<img height="500px" src="images/ConnectionsLogo.png" /></a>
				</div><!--end left_inner -->
			</div><!-- end left -->
			
			<div id='right'>
				<div id='right_inner'>
					<a href='orderform.php?location=puravida'>Coming Soon<img height="200px" src="images/PuraVidaLogo.png" /></a>
				</div><!--end right_inner -->
			</div><!-- end right -->  

		</div><!-- end container -->
</body>
</html>

