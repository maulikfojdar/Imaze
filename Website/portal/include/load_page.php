<?php
session_start();

$type=$_SESSION['type'];


if(!$_POST['page']) die("0");

$page = $_POST['page'];

if(($type == "EVENT" || $type=="BRANCH")) {
	if($page == "events") {
		if(file_exists('pages/'.$page.'.php'))
			echo file_get_contents('pages/'.$page.'.php');
	}else
		echo "You are not authorized to access this features";
}elseif($type == "CMPGN" && ($page == "register"|| $page=="review")) {
	if(file_exists('pages/'.$page.'.php'))
		echo file_get_contents('pages/'.$page.'.php');
	else
		echo "You are not authorized to access this features";
} 
else
	echo "You are not authorized to access this features";
?>
