<?php 
define('INCLUDE_CHECK',true);

include_once('../../lib/config.php');

//session_name('imazeWebPortal');
session_start();


if(!$_POST['uname'] || !$_POST['password']) {
	session_destroy();
	header("Location: ../login.php?flag=1");	
}


$_POST['uname'] = mysql_real_escape_string($_POST['uname']);
$_POST['password'] = mysql_real_escape_string($_POST['password']);
	
$sql_coord = "SELECT * FROM coordi_info WHERE coord_uname='{$_POST['uname']}' AND coord_pass='".sha1($_POST['password'])."'";
$sql_faculty1 = "SELECT * FROM department WHERE dept_fac1uname='{$_POST['uname']}' AND dept_fac1pass='".sha1($_POST['password'])."'";
$sql_faculty2 = "SELECT * FROM department WHERE dept_fac2uname='{$_POST['uname']}' AND dept_fac2pass='".sha1($_POST['password'])."'";


$row_coord = dbFetchAssoc(dbQuery($sql_coord));
$row_faculty1 = dbFetchAssoc(dbQuery($sql_faculty1));
$row_faculty2 = dbFetchAssoc(dbQuery($sql_faculty2));


if($row_coord['coord_id']) {
		$_SESSION['usr_id']=$row_coord['coord_id'];
		$_SESSION['usr1_name']=$row_coord['coord1_name'];
		$_SESSION['usr2_name']=$row_coord['coord2_name'];
		$_SESSION['type']=$row_coord['coord_type'];
		$_SESSION['clearance']="COORD";
		$_SESSION['clearance_id']=$row_coord['event_id'];
		$_SESSION['branch_id']=$row_coord['coord_branch_id'];
		
		header("Location: ../index.php");
	} elseif ($row_faculty1['dept_fac1id']) {
		$_SESSION['usr_id']=$row_faculty1['dept_fac1id'];
		$_SESSION['usr_name']=$row_faculty1['dept_fac1name'];
		$_SESSION['clearance']="FAC";
		$_SESSION['clearance_id']=$row_faculty1['branch_id'];
		
		header("Location: ../index.php");
	} elseif ($row_faculty2['dept_fac1id']) {
		$_SESSION['usr_id']=$row_faculty2['dept_fac2id'];
		$_SESSION['usr_name']=$row_faculty2['dept_fac2name'];
		$_SESSION['clearance']="FAC";
		$_SESSION['clearance_id']=$row_faculty2['branch_id'];
		
		header("Location: ../index.php");
	} else {
		session_destroy();
		header("Location: ../login.php?flag=2");
	}
	
?> 