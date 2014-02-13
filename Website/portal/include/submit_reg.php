<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
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

function generatePassword($length,$level=2){

   list($usec, $sec) = explode(' ', microtime());
   srand((float) $sec + ((float) $usec * 100000));

   $validchars[1] = "0123456789abcdfghjkmnpqrstvwxyz";
   $validchars[2] = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

   $password  = "";
   $counter   = 0;

   while ($counter < $length) {
     $actChar = substr($validchars[$level], rand(0, strlen($validchars[$level])-1), 1);

     // All character must be different
     if (!strstr($password, $actChar)) {
        $password .= $actChar;
        $counter++;
     }
   }

   return $password;

}

$coord_id=(int)$_SESSION['usr_id'];
$count=4;
$receipt_type="PACKAGE";

$pb=$_POST['part_branch'];
if($pb=="OTHER") 
{
	$_POST['part_branch']=$_POST['part_branch_other'];
}

date_default_timezone_set('Asia/Kolkata');
$t1=date("h:i:s A");
$d1=date("d/m/Y");
$pass=generatePassword(8);
$uname=$_POST['part_name'];
$uname= strtok($uname," ");
$uname=$uname."_".generatePassword(5);


$query="INSERT INTO stu_reg 
VALUES('$_REQUEST[receipt_no]','$_POST[part_name]','$_POST[part_email]','$_POST[part_phone]','$_POST[part_branch]','$_POST[part_year]','$receipt_type','$coord_id','','$_POST[college_name]','','$d1','$t1','$_REQUEST[receipt_no]','$count','$uname','".sha1('$pass')."')";

if(!dbQuery($query)) {
	echo 'Data Not Added';
	echo "<a href=../index.php#register>GO BACK</a>";
}
else {
		$query1 = "select * from stu_reg where receipt_no = '$_REQUEST[receipt_no]'";
		$row = dbFetchAssoc(dbQuery($query1));
		if($row)
		{	$query2="INSERT INTO stu_login VALUES('$row[part_id]','$row[part_uname]','$row[part_password]','$row[count]','1')";
			if(!dbQuery($query2)) {
				echo 'Data Not Added';
				echo "<a href=../index.php#register>GO BACK</a>";
				}
				else
				{
					header("Location: ../index.php#register");
				}
			
		}
		else
		{
				echo 'Data Not Added';
				echo "<a href=../index.php#register>GO BACK</a>";
		}
		
	
}
?>
</body>
</html>