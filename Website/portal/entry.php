<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left: 200px;
	margin-right: 200px;
}
</style>

<script type="text/javascript">

function ent()
{
     var formobj = document.entry;
	 var alphaExp= /^[a-zA-Z]+$/;
	 var betaExp= /^[0-9]+$/;	 
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if(formobj.coord_branch_id.value =="" || formobj.coord1_name.value=="" || formobj.coord2_name.value=="" || formobj.event_id.value=="" || formobj.coord_type.value=="" || formobj.coord1_phone.value=="" || formobj.coord1_email.value=="" ||formobj.coord2_phone.value=="" || formobj.coord2_email.value=="" || formobj.coord_uname.value==""|| formobj.coord_pass.value=="")
	 {
	   alert("YOU HAVE NOT FILLED UP ALL DETAILS.. PLS CHECK IT AGAIN");
	  return false;
	 }
	
	 	
	 if(!(formobj.coord1_phone.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Mobile NO.!");
		formobj.coord1_phone.focus();
		return false;
	 }	
	 if(!(formobj.coord2_phone.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Mobile NO.!");
		formobj.coord2_phone.focus();
		return false;
	 }	
	 
 	if(reg.test(formobj.coord1_email.value)==false)
	{
		alert('Invalid Email Address');
		formobj.coord1_email.focus();
		return false;
	}
	if(reg.test(formobj.coord2_email.value)==false)
	{
		alert('Invalid Email Address');
		formobj.coord2_email.focus();
		return false;
	}
	
	if(formobj.coord_pass.value!=formobj.coord_pass1.value)
	{
		alert('Passwords do not match');
		return false;
	}
	
	 return true;
}
</script>	 
</head>
<body bgcolor="#CCCCCC"> 
<h1 align="center"><font color="#444">IMAZE CO-ORDINATORS REGISTRATION FORM</font></h1><br /><br />
<table align="center" width="700px" border="1">
<tr>
<td>
<img src="logo.png" height="166px" width="78px" align="right"/>
<div id="ent">
<form id="entry" name="entry" method="post" action="submit_coord.php" onsubmit="return ent()"> 
<ul>
<li type="circle"><b>BRANCH :</b>
                    <select name="coord_branch_id">
                    	<option value="GCH">CHEMICAL</option>
                    	<option value="GCP">IT/CP</option>
                    	<option value="GME">MECHANICAL</option>
                    	<option value="GEE">ELECTRICAL</option>
                    	<option value="GEC">EC</option>
                    	<option value="GCE">CIVIL</option>
                    	<option value="GMC">MECHATRONICS</option>
                    	<option value="GAE">AUTOMOBILE</option>
                    	<option value="GFP">FOOD TECH</option>
                    	<option value="GMG">MANAGEMENT</option>
                    </select> <br/><br/></li>

<h2>coordinator 1</h2>

<li type="circle"><b>NAME :</b>
<input type="text" name="coord1_name" maxlength="40" size="40"/><br /><br /></li>

<li type="circle"><b>MOBILE NO. :</b>
<input type="text" name="coord1_phone" maxlength="11" size="11"/><br /><br /></li>

<li type="circle"><b>E-MAIL ID :</b>
<input type="text" name="coord1_email" maxlength="40" size="40"><br /><br /></li>
<h2>coordinator 2</h2>
<li type="circle"><b>NAME :</b>
<input type="text" name="coord2_name" maxlength="40" size="40"/><br /><br /></li>

<li type="circle"><b>MOBILE NO. :</b>
<input type="text" name="coord2_phone" maxlength="11" size="11"/><br /><br /></li>

<li type="circle"><b>E-MAIL ID :</b>
<input type="text" name="coord2_email" maxlength="40" size="40"><br /><br /></li>

<li type="circle"><b>EVENT ID :</b>
<input type="text" name="event_id" maxlength="6" size="6"/><br /><br /></li>

<li type="circle"><b>COORDINATOR TYPE :</b>
                    <select name="coord_type">
                    <!--	<option value="CMPGN">CAMPAIGN</option> -->
                    	<option value="EVENT">EVENT</option>
                    	<option value="BRANCH">BRANCH</option>
                    	
                    </select> <br/><br/></li>


<li type="circle"><b>USER NAME:</b>
<input  type="text" name="coord_uname" maxlength="20" size="20" /><br /><br /></li>

<li type="circle"><b>PASSWORD:</b>
<input type="password" name="coord_pass" maxlength="20" size="20" /><br /><br /></li>

<li type="circle"><b>RE-ENTER PASSWORD:</b>
<input type="password" name="coord_pass1" maxlength="20" size="20" /><br /><br /></li>

</ul>
<center>
<input type="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset" />
</center>
</form>
</div>
</td>
</tr>
</table>

</body>
</html>