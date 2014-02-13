<?php 
		define('INCLUDE_CHECK',true);

include_once('../lib/config.php');

//session_name('imazeWebPortal');
session_start();


if(!$_SESSION['usr_id']) {
	$_SESSION=array();
	session_destroy();
		header("Location: ../login.php?flag=1");	
}
date_default_timezone_set('Asia/Kolkata');
$t1=date("h:i:s A");
$d1=date("d/m/Y");
		$queryfinal ="INSERT INTO indi_entry VALUES ('$_SESSION[usr_id]', '$_POST[eventid]','$d1' ,'$t1')";
		if(dbQuery($queryfinal))
		{	print"you have succesfully registered fot the ".$_SESSION['event_name'];
		}
		$n1 = $_SESSION['maxa'];
		$newcount = $_SESSION['count'] -1;
		$partid = $_SESSION['usr_id'];
		$queryfinal1 = "UPDATE stu_login SET max_a='$n1',count='$newcount' WHERE part_id='$partid'";
		if(dbQuery($queryfinal1))
		{echo "done";}
		else
		{die();}

?>