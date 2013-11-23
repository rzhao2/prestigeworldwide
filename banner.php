<div id="banner">
<div id="banner_left">
    <a href = "index.php"><img src="images/logo.png"></a><!-- logo -->
</div>
<div id="banner_right">
<div class="container clearfix">
    <div class="row">
    	<div class="span12">
			<div class="navbar navbar_">
				<div class="container">
				  <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_"><span class="icon-bar"></span> </a>
					<div  id="nav-items" class="nav-collapse nav-collapse_  collapse">
					  <ul class="nav sf-menu">
						<li class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {echo 'active';}else{echo 'sub-menu';} ?>"><a href="index.php">Home</a></li>
						<li class="<?php if (basename($_SERVER['PHP_SELF']) == 'final_report.php') {echo 'active';}else{echo 'sub-menu';} ?>"><a href="final_report.php">About Us</a></li>
						<li class="<?php if (basename($_SERVER['PHP_SELF'])== 'orderform.php') {echo 'active';}else{echo 'sub-menu';} ?>"><a href="orderform.php">Menus</a></li>
						<li class="sub-menu"><a href="http://www.campusdish.com/en-US/CSNE/Rochester/Locations/Connections.htm">Nutrition</a></li>
					  </ul>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
		<?php include 'banner_login.php'; ?>
        </div><!-- end banner right -->
</div><!-- end banner -->
