<?php 
define('INCLUDE_CHECK',true);

include_once('../lib/config.php');

session_start();
	if(isset($_SESSION["usr_id"]) && isset($_SESSION["usr_name"]))
	{		
	$flag="";
	$msg="";
	if(isset($_GET["flag"])) {
		if($_GET["flag"]==1) {
			$msg="All fields must be filled in!";
		}
		elseif ($_GET["flag"]==2) {
			$msg="Incorrect Username or Password.";
		}
	}
	$query = "SELECT count from stu_reg where part_id ='$_SESSION[usr_id]'";
	$row_count = dbFetchAssoc(dbQuery($query));
	$count = $row_count['count'];
	$_SESSION['count'] = $count;
	if($count > 0)
	{		
	$query1 = "select max_entry from event_db where event_id = '$_POST[event_id]'";
	$row_maxcount = dbFetchAssoc(dbQuery($query1));
	$maxcount = $row_maxcount['max_entry'];
	if($maxcount>0)
	{		$query2 = "select * from event_db where event_id = '$_POST[event_id]'";
			$row_event = dbFetchAssoc(dbQuery($query2));
			$type =  $row_event['event_type'];
			$maxpart = $row_event['max_part'];
			$category = $row_event['event_category'];
			$_SESSION['event_name'] = $row_event['event_name'];

			if($type =="TEAM")
			{		print "<form action=\"finalsubmit.php\">";
					for($i =$maxpart;	$i > 1 ;$i--)
					{		print "RECEIPT NO:$i<input type=\"text\" name=\"receipt\".$i /> <br />";
					}
					print "<input type=\"submit\" value=\"SUBMIT\" />";
					print"</form>";
			}
			else if($type =="INDIVIDUAL")
			{		print "<form action=\"submitfinal.php\" method=\"post\">";
				$query3 = "SELECT * FROM indi_entry WHERE part_id='$_SESSION[usr_id]' AND event_id = '$_POST[event_id]'";
				if(dbAffectedRows(dbQuery($query3)) > 0)
					{		
							print "You have already registered for this event";
							exit();
					}
					else
					 {		$query6 = "select max_a from stu_login where part_id = '$_SESSION[usr_id]'";	
						 	$row_ev = dbFetchAssoc(dbQuery($query6));
							$maxa =  $row_ev['max_a'];
							if($category =="A")
							{	$_SESSION['maxa'] = $maxa -1;
							}
							else
							{
							$_SESSION['maxa'] = $maxa;
							}
							
							if($maxa == 0 && $category == "A")
							{		print "You cannot register more than once in Category A events";
							}
							else
						 	{		
								print "confirm submission";
								$x = $_POST['event_id'];
					 			print "<input type=\"hidden\" value=\"$x\" name =\"eventid\"/>";
					 			print "<input type=\"submit\" value=\"SUBMIT\" />";
								print"</form>";
							}
					 }
					 
			}
			
	}
	else
		{		echo "registration for these event are closed";
		}
	}
	else
	{
		echo "registrattion for you are over";
	}
	}
	else
	{
		header("Location: index.php");
	}
?>