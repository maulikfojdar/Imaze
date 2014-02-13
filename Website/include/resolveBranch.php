<?php

if(!$_GET['branch']) die("0");

$page = $_GET['branch'];

if(file_exists('pages/'.$page.'.php'))
	echo file_get_contents('pages/'.$page.'.php');

else 
	echo "<p> <h2>Oops,</h2> It looks like we've misplaced a page after the last pachyderm stampede. We'll find it and get back to you shortly";
?>
