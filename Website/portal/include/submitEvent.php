<?php

define('INCLUDE_CHECK',true);

include_once('../../lib/config.php');

//session_name('imazeWebPortal');
session_start();


if(!$_SESSION['usr_id']) {
	$_SESSION=array();
	session_destroy();
		header("Location: ../login.php?flag=1");	
}

$event_id=mysql_real_escape_string($_SESSION['clearance_id']);
$event_branch=mysql_real_escape_string($_SESSION['branch_id']);
$branch_name=mysql_real_escape_string($_POST['branch_name']);
$event_name=mysql_real_escape_string($_POST['event_name']);
$event_type=mysql_real_escape_string($_POST['event_type']);
$event_category=mysql_real_escape_string($_POST['event_category']);
$event_intro=mysql_real_escape_string($_POST['event_intro']);
$event_details=mysql_real_escape_string($_POST['event_details']);
$event_rules=mysql_real_escape_string($_POST['event_rules']);
$event_judgincrit=mysql_real_escape_string($_POST['event_judgincrit']);
$max_part=mysql_real_escape_string($_POST['max_part']);
$max_entry=mysql_real_escape_string($_POST['max_entry']);

$sql="INSERT INTO event_db VALUES('$event_id','$event_name','$event_branch','$branch_name','$event_type','$event_category','$event_intro','$event_details','$event_rules','$event_judgincrit','$max_part','$max_entry')";

if(!dbQuery($sql)) {
	echo 'Data Not Added';
}
else {
	header("Location: ../index.php#events");
}

?>
