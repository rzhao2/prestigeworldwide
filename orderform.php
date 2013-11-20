<?php
	session_start();
	
	function getItems()
	{
		$db_hostname = "theccdb.db.12066565.hostedresource.com";
		$db_username = "theccdb";
		$db_password = "Q!@Wq12w";
		$db_name = "theccdb";
				
		$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
		if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
				
		$query = "SELECT * FROM ConnectionsMenu";
		$result = mysqli_query($db, $query);
		if(!$result) { die("Database access failed: " . mysql_error()); }
				
		$rows = mysqli_num_rows($result);

		for($j = 0; $j < $rows; $j++)
		{
			$row = mysqli_fetch_row($result);
			echo "<div class='simpleCart_shelfItem'>
					<h2 class='item_name'>$row[1]</h2>
						<p>
							<input type='text' value='1' class='item_Quantity'>
							<span class='item_price'>$row[4]</span>
							<a class='item_add' href='javascript:;'> Add to Cart </a>
						</p>
				</div>";
			
		}
		
	}
	
	function getItemsByCategory($Category)
	{
		$db_hostname = "theccdb.db.12066565.hostedresource.com";
		$db_username = "theccdb";
		$db_password = "Q!@Wq12w";
		$db_name = "theccdb";
				
		$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
		if(!$db) { die("Unable to connect to MySQL: " . mysql_error()); }
				
		$query = "SELECT * FROM ConnectionsMenu WHERE Category = '$Category'";
		$result = mysqli_query($db, $query);
		if(!$result) { die("Database access failed: " . mysql_error()); }
				
		$rows = mysqli_num_rows($result);

		for($j = 0; $j < $rows; $j++)
		{
			$row = mysqli_fetch_row($result);
			echo "<div class='simpleCart_shelfItem'>
					<h2 class='item_name'>$row[1]</h2>
						<p>
							<input type='text' value='1' class='item_Quantity'>
							<span class='item_price'>$row[4]</span>
							<a class='item_add' href='javascript:;'> Add to Cart </a>
						</p>
				</div>";
			
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>The Connections Connection</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="script.js"></script>
        <script src="simpleCart.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		
		<script src= "jquery-ui-timepicker-addon.js"></script>
		<link rel="stylesheet" href="jquery-ui-timepicker-addon.css" />
		<!-- <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> --> <!-- for some reason this makes tab stop working, not sure if changes anything, noted by Ru -->
		
        <script>
		
			$(function() {
				$( "#tabs" ).tabs();
			});
			
        	simpleCart({
			    cartColumns: [
			        { attr: "name" , label: "" } ,
			        { attr: "price" , label: "", view: 'currency' } ,
			        { view: "decrement" , label: false , text: "-" } ,
			        { attr: "quantity" , label: "" } ,
			        { view: "increment" , label: false , text: "+" } ,
			        { attr: "total" , label: "", view: 'currency' } ,
			        { view: "remove" , text: "Remove" , label: false }
			    ],

			    cartStyle: "table",
			});
			
			 $(function() {
				$("#timeFrom").datetimepicker();
            });
			
			
        </script>
        

	</head>
	<body>
	
		<div id="container">
			
			<?php
				include 'banner.php';
				include 'navbar.php';
			?>
			
			<div id='left_large'>
			
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Cold Drinks</a></li>
					<li><a href="#tabs-2">Refrigerated Food</a></li>
					<li><a href="#tabs-3">Pre-Packaged Food / Fruits</a></li>
				</ul>
			<div id="tabs-1">
				<p><?php getItemsByCategory('Cold Drinks'); ?></p>
			</div>
			
			<div id="tabs-2">
				<p><?php getItemsByCategory('Refrigerated Food'); ?></p>
			</div>
			
			<div id="tabs-3">
				<p><?php getItemsByCategory('Pre-Packaged Food / Fruits'); ?></p>
				</div>
			</div>
			
			<?php
				$location = $_GET['location'];

				if($location == connections) { //location 1 is page 2 of Yunping's prototype
					//echo "location is connections";
    //<!--------------------------------------------------------------------------------------------------------------------->
	
					
					
					//getItemsByCategory("Cold Drinks");
					
					
					
					echo "</div><!-- emd left_large -->
                        
                       <div id='right_small'><!-- SHOPPING CART -->
						   <!-- show the cart -->
						   <div class='simpleCart_items'></div>
						   <br />
                        -----------------------------
                        <br />
                        Final Total: <span id='simpleCart_grandTotal' class='simpleCart_grandTotal'></span>
                        <br />
                        <a href='javascript:;' class='simpleCart_checkout'>checkout</a>
						</div><!--end right small-->
                   ";    
		<input type="text" name = "timeFrom" id="timeFrom" class = "rounded1" />
    //<!--------------------------------------------------------------------------------------------------------------------->
                           
    //<!--------------------------------------------------------------------------------------------------------------------->
    // PURA VIDA IS CURRENTLY BEING USED AS A TEST
				} else if($location == puravida) {
					echo "location is pura vida";
                    echo "
                        <p>
                            Cart: <span class='simpleCart_total'></span> (<span id='simpleCart_quantity' class='simpleCart_quantity'></span> items)
                        	<br />
                        	<a href='javascript:;' class='simpleCart_empty'>empty cart</a>
                        	<br />
                        </p>
                        
                        <ul>
                        	<li class='simpleCart_shelfItem'>
                        		<h2 class='item_name'>Zebra</h2>
                        		<img class='item_thumb' src='e.png' />
                        		<span class='item_price'>$187.95</span>
                        		<select class='item_Size'>
                        			<option value='Small'>Small</option>
                        			<option value='Medium'>Medium</option>
                        			<option value='Large'>Large</option>
                        		</select>
                        
                        		<input type='checkbox' class='item_color' value='Blue'/>
                        		<label>Blue</label>
                        		<input type='checkbox' class='item_color' value='Yellow'/>
                        		<label>Yellow</label>
                        		<input type='checkbox' class='item_color' value='Red'/>
                        		<label>Red</label>
                        
                        		<input type='hidden' class='item_shipping' value='20' />
                        		<input type='text' class='item_quantity' value='1' />
                        		<input type='button' class='item_add' value='add to cart' />
                        	</li>
                        
                        	<li class='simpleCart_shelfItem'>
                        		<h2 class='item_name'>Cow</h2>
                        		<img class='item_thumb' src='e.png' />
                        		<span class='item_price'>$18.00</span>
                        		<select class='item_Size'>
                        			<option value='Tiny'>Tiny</option>
                        			<option value='Medium'>Medium</option>
                        			<option value='Bull'>Bull</option>
                        		</select>
                        		<input type='text' class='item_quantity' value='1' />
                        		<input type='button' class='item_add' value='add to cart' />
                        	</li>
                        </ul>
                        
                        <div class='simpleCart_items' ></div>
                        
                        <div class='sc_demo_items' ></div>
                        
                        <br />
                        SubTotal: <span id='simpleCart_total' class='simpleCart_total'></span>
                        <br />
                        Tax Rate: <span id='simpleCart_taxRate' class='simpleCart_taxRate'></span>
                        <br />
                        Tax: <span id='simpleCart_tax' class='simpleCart_tax'></span>
                        <br />
                        Shipping: <span id='simpleCart_shipping' class='simpleCart_shipping'></span>
                        <br />
                        -----------------------------
                        <br />
                        Final Total: <span id='simpleCart_grandTotal' class='simpleCart_grandTotal'></span>
                        <br />
                        
                        <a href='javascript:;' class='simpleCart_checkout'>checkout</a>
                    
                    ";
				}
                
                //<!--------------------------------------------------------------------------------------------------------------------->
			?>
		</div><!-- end container -->
</html>
</body>
