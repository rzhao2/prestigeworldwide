<div id="banner">
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
                                                <td class="align_right">Net ID:</td>
                                                <td class="align_left"><input type="text" class="login_input" name = "username"/></td>
                                        </tr>
                                        <tr>
                                                <td class="align_right">Password:</td>
                                                <td class="align_left"><input type="password" class="login_input" name = "password"/></td>
                                        </tr>
                                        <tr>
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