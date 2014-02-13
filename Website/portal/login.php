<?php 
session_start();
	if(isset($_SESSION["usr_id"]) && isset($_SESSION["usr_name"]))
	{		header("Location: index.php");
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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>IMAZE 11 || Login</title>
	<link rel="stylesheet" type="text/css" href="styles/reset.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div id="container">
		<div id="masthead">
			<div id="titleContainer">			
				<h2>IMAZE WEB PORTAL</h2>			
			</div>
			<div id="logoContainer">
				<img src="images/logo.png" alt="IMAZE 11" />
			</div>
		</div>
		<div id="loginBox">
			<div id="loginWrapper">
				<form action="include/submitlogin.php" method="POST">
					<br/>
					<div class="label1">USERNAME</div>
					<div class="textdiv">
						<input type="text" name="uname" id="username" class="text" />
					</div>
					<br/>
					<div class="label2">PASSWORD</div>
					<div class="textdiv">
						<input type="password" name="password" id="pass" class="text" />
					</div>
					<br/>
					<div class="buttonContainer">
						<input type="submit" value="SUBMIT" class="myButton" />
						<input type="reset" value="RESET" class="myButton" />
					</div>					
				</form>
			</div>
		</div>
		<div class="msg"> <?php print $msg?></div>
	</div>
	<div id="footer">
		DEVELOPED AND MAINTAINED BY IMAZE 11 WEB TEAM
	</div>
	
</body>
</html>
