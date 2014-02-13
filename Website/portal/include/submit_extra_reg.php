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
$old_receipt=$_POST['old_rec'];
$query="SELECT * FROM stu_reg WHERE receipt_no='$old_receipt'";

$row_coord = dbFetchAssoc(dbQuery($query));

if(!$row_coord['receipt_no']) {
	echo 'You have to take package first';
	echo "<a href=../index.php#register>GO BACK</a>";
}
else {
	
	$n1=$_POST['new_rec'];
	$newcount=(int)$row_coord['count'];
	$newcount=$newcount+1;
	$partid = $row_coord['part_id'];
	$query1="UPDATE stu_reg SET extra_receipt='$n1',count='$newcount' WHERE receipt_no='$old_receipt'";
$query2="SELECT * FROM stu_login WHERE part_id='$partid'";
$row_co = dbFetchAssoc(dbQuery($query2));
$maxa = $row_co['max_a'] +1;
$query3="UPDATE stu_login SET count='$newcount',max_a = '$maxa' WHERE part_id='$partid'";
	dbQuery($query3);
	if(!dbQuery($query1)) {
	echo '<h1>Data Not Added</h1>';
	echo "<a href=../index.php#register>GO BACK</a>";
}
else{
	
header("Location: ../index.php#register");
}
}
?>
</body>
</html>