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
			?>
            
			
			<?php
			if($_SESSION['username'] != "admin")
				include 'cafechooser.php';
			else{
				include 'adminpage.php';
			}
			?>  

			<div class="clear"></div><!-- makes it so container contains floated child elements -->
		</div><!-- end container -->
	</body>
</html>

