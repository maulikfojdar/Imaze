<?php 
define('INCLUDE_CHECK',true);

include_once('../lib/config.php');

//session_name('imazeWebPortal');
session_start();

if(!$_POST['imaze_uname'] || !$_POST['imaze_pwd']) {
	session_destroy();
	header("Location: ../index.php?flag=1");	
}

$_POST['imaze_uname'] = mysql_real_escape_string($_POST['imaze_uname']);
$_POST['imaze_pwd'] = mysql_real_escape_string($_POST['imaze_pwd']);
	
$sql_part = "SELECT * FROM stu_reg WHERE part_uname='{$_POST['imaze_uname']}' AND part_password='".sha1($_POST['imaze_pwd'])."'";

$row_part = dbFetchAssoc(dbQuery($sql_part));

if($row_part['part_id']) {
		$_SESSION['usr_id']=$row_part['part_id'];
		$_SESSION['usr_name']=$row_part['part_name'];
		$_SESSION['receipt']=$row_part['receipt_no'];
		header("Location: ../index.php");
		echo $_SESSION['usr_name'];
	}else {
		session_destroy();
		header("Location: ../index.php?flag=2");
	}
?> 