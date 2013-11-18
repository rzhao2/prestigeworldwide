<?php
    /*echo "http://" . $_SERVER['HTTP_HOST'];*/
    session_start();
    //echo("Session started");
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
				include 'navbar.php';
			?>
            
			<div id="header">
				<p>Choose your cafe</p>
			</div><!-- end header -->
			
			<div id='left'>
				<div id='left_inner'>
					<a href='orderform.php?location=connections'><img height="500px" src="images/ConnectionsLogo.png" /></a>
				</div><!--end left_inner -->
			</div><!-- end left -->
			
			<div id='right'>
				<div id='right_inner'>
					<h3> Coming Soon </h3>
					<a href='orderform.php?location=puravida'><img height="200px" src="images/PuraVidaLogo.png" /></a>
				</div><!--end right_inner -->
			</div><!-- end right -->  

		</div><!-- end container -->
</body>
</html>

