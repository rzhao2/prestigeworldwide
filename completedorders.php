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
    </head>
    <body>
        <div id="container">
            
            <?php
                include 'banner.php';
                include 'navbar.php';
            ?>

            <h2><a href="orderqueue.php">Return to Order Queue</a></h2>
            
            <!-- For each order in the order queue: -->
            <div class="completedorder">
            <form action ="completeorder.php" method="POST">
                <input type="hidden" name="order_id" value="5" />
                <h2> Order: </h2>

                <h3> User: Matt </h3>
                <h3> Finish by: 3:00pm November 18, 2013 </h3>
                <h3> Finished at: 2:50pm November 18, 2013 </h3>
                <!-- For Each item in the order: -->
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
            </form>
            <div>

        </div><!-- end container -->
</body>
</html>