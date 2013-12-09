<div id="banner">
<div id="banner_left">
    <a href = "index.php"><img src="images/logo.png"></a><!-- logo -->
</div>
<div id="banner_right">
	<div class="nav-collapse_  collapse">
		<ul class="nav">
			<li class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {echo 'active';}else{echo 'sub-menu';} ?>"><a href="index.php">Home</a></li>
			<li class="<?php if (basename($_SERVER['PHP_SELF']) == 'final_report.php') {echo 'active';}else{echo 'sub-menu';} ?>"><a href="final_report.php">About Us</a></li>
			<li class="<?php if (basename($_SERVER['PHP_SELF'])== 'orderform.php') {echo 'active';}else{echo 'sub-menu';} ?>"><a href="orderform.php">Menus</a></li>
			<li class="sub-menu"><a href="http://www.campusdish.com/en-US/CSNE/Rochester/Locations/Connections.htm" target="_blank">Nutrition</a></li>
		</ul>
	</div>
	<?php include 'banner_login.php'; ?>
</div><!-- end banner right -->
<div class="clear"></div>
</div><!-- end banner -->
<div class="clear"></div>
