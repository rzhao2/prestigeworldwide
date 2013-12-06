<?php
        session_start();

        include 'parse_options.php';
        /*
        numOptionSets(s) returns how many option sets in a fully encoded item_options
        getOptionSets(s) returns a String[] of each encoded option set
        getOptionName(s) returns the name of an option set
        getOptionRange(s) returns the range of an option set
        getOptions(s) Takes an encoded Option Set and returns a 2D array of all the options in it
        */
        
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
                        $options = $row[5];
                        $optionSets = getOptionSets($options);

                        ?>
                        <div class='simpleCart_shelfItem' title='<?php echo $row[1];?>'>
                                <h2 class='item_name'><?php echo $row[1];?></h2>
                                        <p>
                                                <input type='text' value='1' class='item_Quantity'>
                                                <span class='item_price'><?php echo $row[4]/100; ?></span>

                        <?php

                                for($i = 0; $i<count($optionSets); $i++)
                                {
                        ?>
                                                <table hidden name= '<?php echo getOptionName($optionSets[$i]); ?>' value='<?php echo $optionSets[$i]; ?>'>
                                                <tr>
                                                        <th><?php echo getOptionName($optionSets[$i]); ?></th>
                                                </tr>
                                                <tr>
                                                        <th>Name</th>
                                                        <th>Additional Price</th>
                                                </tr>
                                <?php
                                        $numOptions = getNumOptions($optionSets[$i]);
                                        $o = getOptions($optionSets[$i]);
                                        for($k=0; $k<$numOptions; $k++)
                                        {
                                ?>
                                                <tr>
                                                        <td><?php echo $o[$k][0];?></td>
                                                        <td><?php echo $o[$k][1];?></td>
                                                </tr>
                                <?php
                                        }
                                ?>
                                                </table>
                        <?php
                                }
                        ?>

                                                <button onclick="showOptions('<?php echo $row[1];?>')">Add to Cart</button>
                                        </p>
                        </div>
                        <?php
                        
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

                /*for($i = 0; $i <= $rows/2-1; $i++)
                {
                        echo "<div id = 'firstcolumn'>";
                        $row = mysqli_fetch_row($result);
                        getItemsByIndividual($row);
                        echo "</div>";
                }
                
                for($i = $rows/2; $i < $rows; $i++)
                {
                        echo "<div id = 'secondcolumn'>";
                        $row = mysqli_fetch_row($result);
                        getItemsByIndividual($row);
                        echo "</div>";        
                }*/
                
                for($i = 0; $i < $rows; $i++)
                {
                        if($i % 2 == 0)
                        {
                                echo "<div id = 'firstcolumn'>";
                        }
                        else
                        {
                                echo "<div id = 'secondcolumn'>";
                        }
                                
                        $row = mysqli_fetch_row($result);
                        getItemsByIndividual($row);
                        echo "</div>";        
                }
        }
        
        function getItemsByIndividual($row)
        {
                        $options = $row[5];
                        $optionSets = getOptionSets($options);
                        ?>
                        <div class ='itemcontainer'>
                        <div class='simpleCart_shelfItem' title='<?php echo str_replace(' ', '_', $row[1]); ?>'>
                                <h3 class='item_name'><?php echo $row[1];?></h2>
                                        <p>
                                                <input size='2' type='text' value='1' class='item_Quantity'>
                                                <span class='item_price'><?php echo '$'.$row[4]/100; ?></span>
                        
                        <div hidden id='<?php echo str_replace(' ', '_', $row[1]); ?>' title='<?php echo $row[1].' Options'; ?>'>
                        <form id = '<?php echo str_replace(' ', '_', $row[1]); ?>' >                
                        <?php
                                
                                for($i = 0; $i<count($optionSets); $i++)
                                {
                        ?>
                                        
                                                <table name= '<?php echo getOptionName($optionSets[$i]); ?>' value='<?php echo $optionSets[$i]; ?>'>
                                                <tr>
                                                        <th><?php echo getOptionName($optionSets[$i]); ?></th>
                                                </tr>
                                                <tr>
                                                        <th>Name</th>
                                                        <th>Additional Price</th>
                                                </tr>
                                <?php
                                        $numOptions = getNumOptions($optionSets[$i]);
                                        $o = getOptions($optionSets[$i]);
                                        $range = getOptionRange($optionSets[$i]);

                                                if($range[0] == 1 && $range[1] == 1)
                                                {
                                                        for($k=0; $k<$numOptions; $k++)
                                                        {
                                                        ?>
                                                                <tr>
                                                                        <td> <label> <input type="radio" name="<?php echo getOptionName($optionSets[$i]); ?>" class="item_options" value=<?php echo $o[$k][0];?> /> <?php echo $o[$k][0];?> </label> </td>
                                                                        <td> <?php echo $o[$k][1];?> </td>
                                                                </tr>
                                                        <?php
                                                        }
                                                }
                                                else
                                                {
                                                        for($k=0; $k<$numOptions; $k++)
                                                        {
                                                                //echo "<p>".getOptionRange($optionSets[$i])."</p>";
                                                                //echo "<p>".$optionSets[$i]."</p>"; 

                                                        ?>
                                                                <tr>
                                                                        <td> <label> <input type="checkbox" class="item_options" value=<?php echo $o[$k][0];?> /> <?php echo $o[$k][0];?> </label> </td>
                                                                        <td> <?php echo $o[$k][1];?> </td>
                                                                </tr>
                                                        <?php
                                                        }
                                                }
                                        
                                ?>
                                                </table>
                        <?php
                                }
                        ?>
                        </form>
                        </div>
                                        <?php
                                                if($row[5] == null)
                                                {
                                        ?>
                                                        <button class="myButton" onclick="showNoOptions('<?php echo str_replace(' ', '_', $row[1]); ?>')">Add to Cart</button>
                                        <?php
                                                }
                                                else
                                                {
                                        ?>
                                                        <button class="myOption" onclick="showOptions('<?php echo str_replace(' ', '_', $row[1]); ?>')">View Option</button>
                                        <?php
                                                }
                                        ?>
                                
                                        </p>
                        </div>
                        <div class = 'imagecontainer'>
                        <img src="images/food_images/<?php echo $row[6];?>" alt='images' height='177' width=70%>
                        </div>
                        </div>
                        <?php
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
                                { attr: "options", label: ""} ,
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
                        
                        simpleCart({
                                checkout: {
                                        type: "SendForm",
                                        url: "checkout.php",
                                        method: "POST"
                        }
                        });
                        
        </script>

        <script>
                function showOptions(title)
                {
                        var element = $("div[title='"+title+"'] > p > span").html();
                        var q = $("div[title='"+title+"'] > p > input").val();
                        var tagt = '#' + title;
                        
                        var option = new Array();
                        var i = 0;
                        
                        //document.write(title);
                        
                        //document.write(tagt);

                        $(tagt).dialog({
                                autoOpen: false,
                                height: 600,
                                width: 800,
                                modal: true,
                                buttons: {
                                        "Add Item": function() {
                                                $(tagt + " :input").each(function(){
                                                        var input = $(this);
                                                        if(input.is(':checked'))        
                                                        {
                                                                option[i] = input.val();
                                                                i++;
                                                        }
                                                });
                                                
                                                var stringOption = option.join();
                                                title = title.replace(/_/g," ");
                                                
                                                simpleCart.add({
                                                        name: title,
                                                        quantity: q,
                                                        options: stringOption,
                                                        price: element
                                                });
                                                $( this ).dialog( "close" );
                                                //document.write(option);
                                        },
                                        Cancel: function() {
                                                $( this ).dialog( "close" );
                                        }
                                },
                                close: function() {
                                        //allFields.val( "" ).removeClass( "ui-state-error" );
                                }
                        });
                        
                        $(tagt).dialog( "open" );
                        //alert("options called from " + title);
                }
                
                function showNoOptions(title)
                {
                        var element = $("div[title='"+title+"'] > p > span").html();
                        var q = $("div[title='"+title+"'] > p > input").val();
                        var tagt = '#' + title;
                        
                        var option = new Array();
                        var i = 0;
                        
                        title = title.replace(/_/g," ");
                        //alert(element);
                        simpleCart.add({
                                name: title,
                                quantity: q,
                                options: "none",
                                price: element
                        });
                }
 
 
        </script>
        

        </head>
        <body>
        
                <div id="container">
                        
                        <?php
                                include 'banner.php';
                                //include 'navbar.php';
                        ?>

                        <div id="tabs">
                                <ul>
                                        <li><a href="#tabs-1">Cold Drinks</a></li>
                                        <li><a href="#tabs-2">Refrigerated Food</a></li>
                                        <li><a href="#tabs-3">Pre-Packaged Food / Fruits</a></li>
                                        <li><a href="#tabs-4">Frozen Food</a></li>
                                        <li><a href="#tabs-5">Hot Drinks</a></li>
                                        <li><a href="#tabs-6">Counter</a></li>
                                        <li><a href="#tabs-7">Bagel Add-on</a></li>        
                                </ul>
                        </div>
                    <div class = "data-row">
                        <div id='left_large' class="scrollable">
                                <div class= "scrollable-wrapper">
                        
                        <div id="tabs-1">
                                <p><?php getItemsByCategory('Cold Drinks'); ?></p>
                        </div>
                        
                        <div id="tabs-2">
                                <p><?php getItemsByCategory('Refrigerated Food'); ?></p>
                        </div>
                        
                        <div id="tabs-3">
                                <p><?php getItemsByCategory('Pre-Packaged Food / Fruits'); ?></p>
                        </div>
                        

                        <div id="tabs-4">
                                <p><?php getItemsByCategory('Frozen Food'); ?></p>
                        </div>
                        

                        <div id="tabs-5">
                                <p><?php getItemsByCategory('Hot Drinks'); ?></p>
                        </div>

                        <div id="tabs-6">
                                <p><?php getItemsByCategory('Counter'); ?></p>
                        </div>

                        <div id="tabs-7">
                                <p><?php getItemsByCategory('add-on'); ?></p>
                        </div>
                </div>
                        
                        <?php
                        /*        $location = $_GET['location'];

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
                        */
                        ?>
                        </div> <!--end scrollable content and wrapper -->
                        <!-- end left_large -->
                        
                       <div id='right_small'><!-- SHOPPING CART -->
                                                   <!-- show the cart -->
                                                   <div class='simpleCart_items'></div>

                                                   <a href="javascript:;" class="simpleCart_empty">Empty Cart</a>
                                                   <br />
                        -----------------------------
                        <br />
                        Final Total: <span id='simpleCart_grandTotal' class='simpleCart_grandTotal'></span>
                                                
                                                <!-- <br /><br /><br /> Time of Pickup : <input type="text" name = "timeFrom" id="timeFrom" class = "rounded1" /> -->
                        
                                                <br />
                                                <br />
                        <button class="myButton" onclick="simpleCart.checkout()"  class='simpleCart_checkout'>Checkout</button>
                        </div><!--end right small-->
                    </div><!--end Data row-->
                </div><!-- end container -->
</html>
</body>