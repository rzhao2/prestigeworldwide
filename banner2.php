<div id="banner">
  <div class="container clearfix">
    <div class="row">
      <div class="span12">
        <div class="navbar navbar_">
          <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="images/logo.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="sub-menu"><<a href="final_report.php">About Us</a></li>
                <li><a href="orderform.php">Menus</a></li>
                <a href="http://www.campusdish.com/en-US/CSNE/Rochester/Locations/Connections.htm">Nutritional Info</a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		
		
		
		
		
		<div id="banner_left">
        <a href = "index.php"><img src="images/logo.png"></a><!-- logo -->
        </div>
        <div id="banner_right">
        <?php if(!isset($_SESSION['username'])){ ?>
                <div id="login">
                        <form name="login_form" method ="POST" action ="login.php"><!--method="POST" action="process login php"-->
                                <table id="login_table">
                                        <tr>
                                                <td colspan="2">Login with your University of Rochester credentials.</td>
                                        </tr>
                                        <tr>
                                                <td class="align_left"><input type="text" class="login_input" name = "username" value="Net ID"/></td>
												<td class="align_left"><input type="password" class="login_input" name = "password" value="Password"/></td>
												<td colspan="2" class="align_right"><button type="submit" id="login_submit">Login</button></td>
                                        </tr>
                                </table>
                        </form>
                </div><!-- end login -->
                <?php }
                else{ //logged in user
                    if( $_SESSION['username'] != "admin")
                    { ?>
                        <form name="logout_form" method ="POST" action ="logout.php">
                                Welcome, <?php echo($_SESSION['username']); ?>! <br />
                                <button type="submit" id="login_submit" method = "POST" action ="logout.php">Logout</button></td>
                        </form>
               <?php }else{//admin
                        ?>
                        <form name="logout_form" method ="POST" action ="logout.php">
                                Welcome, <?php echo($_SESSION['username']); ?>! <br />
                                <button type="submit" id="login_submit" method = "POST" action ="logout.php">Logout</button></td>
                        </form>
                      <?php }
              }?>
        </div><!-- end banner right -->
</div><!-- end banner -->