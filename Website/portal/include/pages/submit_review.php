<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
define('INCLUDE_CHECK',true);
include_once('../../../lib/config.php');

//session_name('imazeWebPortal');
session_start();


if(!$_SESSION['usr_id']) {
	$_SESSION=array();
	session_destroy();
		header("Location: ../login.php?flag=1");	
}

$coord_id=(int)$_SESSION['usr_id'];

date_default_timezone_set('Asia/Kolkata');
$d1=date("d/m/Y");

$sql="SELECT * FROM stu_reg where entry_date='$d1' AND coord_id='$coord_id'";
$query = dbQuery($sql);
//$row_coord = mysql_fetch_array(dbQuery($sql));
echo "<center><h1>Welcome   ";
echo $_SESSION['usr1_name']."  &   ".$_SESSION['usr2_name'];
//"</h1></center>";
echo "<h2>ENTRIES FOR DATE: ".$d1."</h2><br/>";



$ct = count('$query');
if(!$ct)
{
echo "You Have Not added any entries today"; 	
}
{ $srnum=1;			
					echo "<center> ";
					
					echo "<table width=1000px border=1px >";
					 
					echo "<tr>
					<td><h2>Sr. No.</h2></td> 
					<td><h2>Receipt No.</h2></td>
					<td><h2>Participant Name</h2></td> 
					<td><h2>Participant Phone</h2></td>
					<td><h2>participant e-mail</h2></td>					
					</tr>";
					
					
							
			while($row_coord = mysql_fetch_array($query)){
					echo "<tr>";
					echo"<td>"; echo $srnum ;echo "</td>";
					echo"<td>"; echo $row_coord["extra_receipt"]; echo"</td>";
					echo"<td>"; echo $row_coord["part_name"]; echo"</td>";
					echo"<td>"; echo $row_coord["part_phone"]; echo"</td>";
					echo"<td>"; echo $row_coord["part_email"]; echo"</td>";					
					echo"</tr>";
					$srnum=$srnum+1;
			 											}		
echo "</table>";
echo "</center>";
}


?>
</body>
</html>