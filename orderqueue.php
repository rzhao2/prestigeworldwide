<?php
    /*echo "http://" . $_SERVER['HTTP_HOST'];*/
    include 'db_connect.php';

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
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		
		<script>
			(function poll(){
				setTimeout(function(){
				$.ajax({ url: "datamonitor.php", success: function(data){
				//Update your dashboard gauge
					$("#left_large").html(data);
				}, dataType: "html", complete: poll, timeout: 30000 });
				}, 1000);
			})();
			
			function viewDetails(orderid)
			{
				var dataString = 'orderid='+ orderid;
				//document.write(dataString);

				$.ajax({
					type: "POST",
					url: "datamonitor2.php",
					data: { orderid: orderid },
					cache: false,
					success: function(result){
						//document.write(result);
						$("#right_small").html(result);
					}
				});
			}
			
			function completeOrder(orderid)
			{
			
			}			
		</script>
	</head>
	<body>
		<div id="container">
			
			<?php
				include 'banner.php';
			?>
			<div id='left_large' class="scrollable">
            <!-- <h2><a href="completedorders.php">All Completed Orders:</a></h2> -->
				
            <!-- For each order in the order queue: 
            <div class="order">
            <form action ="completeorder.php" method="POST">
                <input type="hidden" name="order_id" value="5" />
                <h2> Order: </h2>

                <h3> User: Matt </h3>
                <h3> Finish by: 3:00pm November 18, 2013 </h3>
                <br />
                <ul>
                    <li>Item:</li>
                    <ul>
                        <li>Bagel</li>
                    </ul>
                    <li>Extras:
                    <ul>
                        <li>Cream Cheese</li>
                        <li>Toasted</li>
                    </ul>
                </ul>

                <br />
                <input type="submit" name="COMPLETE ORDER" value = "COMPLETE ORDER"/>
			</div>
            </form> -->
			</div>
			<div id='right_small'>
			
			
			</div>

		</div><!-- end container -->
</body>
</html>