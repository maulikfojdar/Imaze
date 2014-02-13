<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 

$con = mysql_connect("localhost","root","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("imaze11",$con);

$event_id=$_POST['event_id'];
$coord_branch_id=$_POST['coord_branch_id'];
$coord1_name=$_POST['coord1_name'];
$coord1_phone=$_POST['coord1_phone'];
$coord1_email=$_POST['coord1_email'];
$coord2_name=$_POST['coord2_name'];
$coord2_phone=$_POST['coord2_phone'];
$coord2_email=$_POST['coord2_email'];
$coord_type=$_POST['coord_type'];
$coord_uname=$_POST['coord_uname'];
$coord_pass=sha1($_POST['coord_pass']);



$query="INSERT INTO coordi_info 
VALUES('$event_id','','$coord_branch_id','$coord1_name','$coord1_phone','$coord1_email','$coord2_name','$coord2_phone','$coord2_email','$coord_type','$coord_uname','$coord_pass')";

$res=mysql_query($query);

if($res)
{
mysql_query("COMMIT");
header('Location: index.php');
}
?>

</body>
</html>