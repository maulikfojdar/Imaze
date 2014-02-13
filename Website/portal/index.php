<?php 
session_start();
//print "my session id is".session_id()."hello";
//print"$_SESSION[type]";
if (!isset($_SESSION['usr_id'])) {
  header("Location: login.php");  
	exit;
   }
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Welcome to IMAZE WEB PORTAL</title>
		<link rel="stylesheet" type="text/css" href="styles/port.css" />
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.10.custom.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
        <!-- Skin CSS file -->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.2r1/build/assets/skins/sam/skin.css">
        <!-- Utility Dependencies -->
        <script src="http://yui.yahooapis.com/2.8.2r1/build/yahoo-dom-event/yahoo-dom-event.js"></script> 
        <script src="http://yui.yahooapis.com/2.8.2r1/build/element/element-min.js"></script> 
        <!-- Needed for Menus, Buttons and Overlays used in the Toolbar -->
        <script src="http://yui.yahooapis.com/2.8.2r1/build/container/container_core-min.js"></script>
        <!-- Source file for Rich Text Editor-->
        <script src="http://yui.yahooapis.com/2.8.2r1/build/editor/simpleeditor-min.js"></script>

    </head>
	<body class="yui-skin-sam">
		<div id="header">
			<div class="logo"></div>
				<div class="text1">IMAZE WEB PORTAL</div>
		        	<div class="text2">Hi,<?php echo $_SESSION['usr1_name']."  &  ".$_SESSION['usr2_name']?> | <b><a href="include/logout.php">LOGOUT</a></b></div>
		</div>
		<div id="main_wrapper">
			<div id="main">
				<div class="right" id="content_wrapper">
					<div id="content">
		                This is the default content. Please use the menu on left.
					</div>
					<div id="loader_container">
						<img src="images/ajax-loader.gif" alt="Loading.." />
					</div>
				</div>
				<div class="left" id="menu">
					<ul>
						<li class="register"><a href ="#">registration</a></li> 
						<li class="events"><a href="#events">Review</a></li>
						<li class="review"><a href="#">Events</a></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>