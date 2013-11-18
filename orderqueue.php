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

    if($_SESSION['username'] != "admin"){ //nonadmins disallowed
    	header('Location: index.php');
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
            
			
			<p>
				I will put information on the ORDER QUEUE here
			</p> 

		</div><!-- end container -->
</body>
</html>

