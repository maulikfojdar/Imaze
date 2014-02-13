<?php
define('INCLUDE_CHECK',true);

include_once('../lib/config.php');

session_start();

$event=$_GET['eventID'];

$sql="SELECT * FROM event_db WHERE event_id='$event'";
$row=dbFetchAssoc(dbQuery($sql));


if(!$row) {
	echo "<br/><br/><div id=\"event_details\"><div id=\"#content_wrapper\" ><h2>Oops,</h2><br/> <p>Looks like we misplaced a page during the last pachyderm stampede. This page will be up shortly. Stay Tuned</p></div></div>";
} elseif($row['event_intro']=="" ||  $row['event_details']=="" || $row['event_details']=="" || $row['event_rules']=="") {
		echo "<br/><br/><div id=\"event_details\"><div id=\"#content_wrapper\" ><h2>Sorry</h2> <p> We are continuously updating our website. This page will be up shortly. Stay Tuned</p></div></div>";
} else {
	echo "<div id=\"event_details\">
			<div class=\"title glass2\">
			</div>
			
			<div class=\"title_content\">
				INTRODUCTION
			</div>
			<div class=\"event_content\">
				".$row['event_intro']."
			</div>
	
			<div class=\"title glass2\">
			</div>
			
			<div class=\"title_content\">
				DETAILS
			</div>
				
			<div class=\"event_content\">
				".$row['event_details']."<br /><br />
			</div>
		
			<div class=\"title glass2\">
			</div>
			
			<div class=\"title_content\">
				RULES
			</div>
			
			<div class=\"event_content\">
				".$row['event_rules']."<br /><br />
			</div>
			
			<div class=\"title glass2\">
			</div>
			
			<div class=\"title_content\">
				JUDGING CRITERIA
			</div>
			<div class=\"event_content\">
				".$row['event_judging_criteria']."<br /><br />
			</div>
			
			<form id=\"register\" method=\"post\" action=\"#\">
				<input type=\"hidden\" name=\"event_id\" value=\"".$row['event_id']."\" />
				<div class=\"registerButton\">
					<input type=\"submit\" class=\"myButton\" value=\"REGISTER\" />
				</div>
			</form>
		</div>
		";
}


?>
