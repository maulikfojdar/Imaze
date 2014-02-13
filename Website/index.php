<?php 
session_start();
	if(isset($_SESSION["usr_id"]) && isset($_SESSION["usr_name"]))
	{	
			$name = $_SESSION['usr_name'];
			$log = " | LOGOUT";
			$panel = "DASHBOARD";
	}
	else
	{
		$name = "";
		$panel = "Log In | Register";
		$log = "";
	}
	$flag="";
	$msg="";
	if(isset($_GET["flag"])) {
		if($_GET["flag"]==1) {
			$msg="All fields must be filled in!";
		}
		elseif ($_GET["flag"]==2) {
			$msg="Incorrect Username or Password.";
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IMAZE 11</title>
<link href="styles/style.css" rel="stylesheet" type="text/css"/>
<link href="styles/reset.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles/nivo-slider.css" type="text/css" media="screen" />

<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.10.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/interface.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--Login panel-->
<link rel="stylesheet" href="styles/slide.css" type="text/css" media="screen" />
<!--Script for login-->
<script src="js/slide.js" type="text/javascript"></script>
<!-- Sliding effect -->
<script type="text/javascript">
//Set the two dates
function f(){
today=new Date()
var imaze=new Date(today.getFullYear(), 3, 7) 
//Set 1 day in milliseconds
var one_day=1000*60*60*24;
window.start = parseFloat(Math.ceil((imaze.getTime()-today.getTime())));
var end = 0 // change this to stop the counter at a higher value
var refresh=1000; // Refresh rate in milli seconds
// Calculate the number of days left
var days=Math.ceil(window.start / one_day ); 
// After deducting the days calculate the number of hours left
var hours =24 - today.getHours()-1;
// After days and hours , how many minutes are left 
var minutes = 60 - today.getMinutes();
// Finally how many seconds left after removing days, hours and minutes. 
var x ="D:"+days + " H:"+hours + " M:" + minutes ;
//alert(x);
document.getElementById('site_sidebar1').innerHTML = x;
if(window.start >= end ){
mytime=setTimeout('f()',refresh)
}
else {alert("Time Over ");}
}
</script>
 
<!--DOC-->


<!--[if lt IE 7]>
 <style type="text/css">
 .dock img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->

<link href="styles/dockstyle.css" rel="stylesheet" type="text/css" />

</head>

<body  >

<div id="site_header">
<!-- Panel -->
<div id="toppanel" >
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to IMAZE 11</h1>
				<h2>Please use this dialog to login and select events.</h2>		
				<p class="grey">Use the username and password provided to you. If you have not received your username and password, then contact the Registrations Team at the numbers provided. At least 24 hours will be needed to process your registrations</p>
                <br/>
				<h2>REGISTRATIONS BEGIN FROM 21st March 2011, 12:00 AM</h2>
				
			</div>
			<div class="left">
				<h1> IMAZE Web & Registration Team</h1>
                <h2> Maitrik : +91-9974367026  </h2>
                <h2> Umang  : +91-9033787554  </h2>
                <h2> Vivek : +91-9428852155  </h2>
                <h2> Varun : +91-7383130850  </h2>
                
            </div>
			<div class="left right">	
            	<form class="clearfix"  action="include/submitlogin.php" method="post">
					<h1>Register/Login here</h1>
					<label class="grey" for="log">Username:</label>
					<input class="field" type="text" name="imaze_uname" id="log" value="" size="23" />
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="imaze_pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
                    <?php print $msg ?>
				</form>		
				<!-- Register Form -->
			
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li><?php print $name?><a href="include/logout.php"><?php print $log?></a></li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open"><?php print $panel ?></a>
				<a id="close" style="display: none;" class="close">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->

    <div id="container">
		<div id="content" style="padding-top:100px;">
		
<h2>&nbsp;</h2>
</div><!-- / content -->		
	</div><!-- / container -->
</div>

<div id="site_wrapper">


<a href="" style="" >
<div id="site_logo">
<img src="images/logo.png" />
</div></a>
<div id="site_title">
	<img src="images/gcet.png" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;<img src="images/other_colleges.png" />
</div>
<div id="loading_wrapper">
    	<img src="images/content_loader.gif" alt="Loading..." />
    </div>
   
   <div id="site_left_bar" class="glass1"></div>
   <a href="">
   <div id="site_left_bar1">
   <br />
   <br />
   <br/>
    <img src="images/home.png" style="left:0px; float:right;" />

   </div></a>

<div id="site_right_bar" class="glass1"></div>
<div id="site_right_bar1">
   <a href="#about"><img src="images/capture.png" /></a><br/><hr class="line"/><br/>
   <a href="#team"><img src="images/capture1.png" /></a><br/><hr class="line"/><br/>
   <a href="#isr"><img src="images/capture3.png" /></a>
   </div>
  
<div id="site_main">

<div id="main_panel" class="glass">
	</div>
	<div id="main_panel_content">
	        <div id="slider" class="nivoSlider">
                <img src="images/1.png" alt="" title="" />
                <img src="images/2.png" alt="" title="" />       
                <img src="images/3.png" alt="" title="" />
                <img src="images/4.png" alt="" title="" />       
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption witha link
</div>
     
     
    <br/><br/>
		  <p>
          	IMAZE, the 3-day National level Technical extravaganza held at the G.H.Patel College of Engineering and Technology, brings forth the perfect platform to showcase the talents and to assess the technical proficiency of budding engineers.
          </p>
          <br/>
          <p>
          	G.H.Patel College of Engineering and Technology (GCET) of Charutar Vidhya Mandal, a renowned engineering institute of Gujarat, has been organizing a National Level Technical Event-IMAZE. Since its inception in 2004, IMAZE has been rendering a platform to technical minds all over the country. Come, Experience and Find Your Way In.
          </p>
	</div>
    
<div id="site_sidebar" class="glass"></div>
<div id="side_bar_content">	
<div id="site_sidebar1">
</div>

<div id="site_sidebar2">
    <h2>&agrave; la carte</h2>
	<marquee direction="down" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" height="100px" vspace="15px" align="left"> &nbsp;&raquo;&nbsp; <a href="#openhouse" >Open House </a> <br/><br/>&nbsp;&raquo;&nbsp;<a href="#ipl">IPL </a><br/><br/>&nbsp;&raquo;&nbsp;<a href="#paintball">Paint Ball</a></marquee>
	</div>
	<div id="site_sidebar3">
<h2>updates</h2>
	<marquee direction="down" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" height="100px" vspace="15px" align="left"> &nbsp;&raquo; Registration to be started soon. <br/><br/>  <br/><br/> </marquee>
	</div>
    
	<div id="site_sidebar4" > 
	<a href="http://www.facebook.com/pages/Vallabh-Vidyanagar-India/Imaze-11/202140803136304" target="_blank"><img src="images/fb.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://twitter.com/#!/imaze11" target="_blank"><img src="images/twitter.png" /></a>
    <br/>
    <a href="#"><b>Video</b></a>
  	</div>
</div>
</div>

</div>
<div class="dock" id="dock2">
<div class="dock-container2">
  <div  id="dock_left"></div>
  <a class="dock-item2" href="#mechitnomous"><span>MECHITNOMOUS</span><img src="images/mechitnomous.png" alt="MECHITNOMOUS" /></a> 
  <a class="dock-item2" href="#chemibondz"><span>CHEMIBONDZ</span><img src="images/chemibondz.png" alt="CHEMIBONDZ" /></a> 
  <a class="dock-item2" href="#faravoltz"><span>FARAVOLTZ</span><img src="images/faravoltz.png" alt="FARAVOLTZ" /></a> 
  <a class="dock-item2" href="#prodacque"><span>PRODACQUE</span><img src="images/prodacque.png" alt="PRODACQUE" /></a> 
  <a class="dock-item2" href="#electrobuzzers"><span>ELECTROBUZZERS</span><img src="images/electrobuzzers.png" alt="ELECTROBUZZERS" /></a> 
  <a class="dock-item2" href="#jiggearnut"><span>JIGGEARNUT</span><img src="images/jiggearnut.png" alt="JIGGEARNUT" /></a> 
  <a class="dock-item2" href="#infracreators"><span>INFRACREATORS</span><img src="images/infracreators.png" alt=">INFRACREATORS" /></a> 
  <a class="dock-item2" href="#cybetron"><span>CYBETRON</span><img src="images/cybetron.png" alt="CYBETRON" /></a> 
  <a class="dock-item2" href="#flipsyde"><span>FLIPSYDE</span><img src="images/flipsyde.png" alt="FLIPSYDE" /></a> 
  <a class="dock-item2" href="#autolutionary"><span>AUTOLUTIONARY</span><img src="images/autolutionary.png" alt="AUTOLUTIONARY" /></a> 
  <div id="dock_right"></div>
  </div>
</div>
	


<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>



<!--dock menu JS options -->
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock2').Fisheye(
				{
					maxWidth: 70,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container2',
					itemWidth:75,
					proximity: 60,
					alignment :'left',
					valign: 'bottom',
					halign : 'center'
				}
			)
		}
	);

</script>
</body>
</html>
