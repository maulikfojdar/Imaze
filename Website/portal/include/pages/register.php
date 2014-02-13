
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 	$("#extrfrm").hide();
 	$("#reg").hide();
  	$("#part_branch_other").hide();
 			$("input#ext").click(function(){
    			$("#extrfrm").show();
				$("#reg").hide();
  				$("#wsreg").hide();
				});
			$("input#pckg").click(function(){
    			$("#reg").show(); 
				$("#extrfrm").hide();
				$("#wsreg").hide();
				});
			$("#other").change(function(){
				var src = $(this).val();
				if(src=="OTHER")
				{$("#part_branch_other").show();}
				else{$("#part_branch_other").hide();}
									   });
		});
</script>
<script type="text/javascript" language="javascript">
//Function for ensuring filled form fields in Registration Form.
function validateregistration()
{	
     var formobj = document.registration;
	 var alphaExp= /^[a-zA-Z]+$/;
	 var betaExp= /^[0-9]+$/;	 
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

	 if (formobj.receipt_no.value =="" || formobj.part_name.value=="" || formobj.college_name.value=="" || formobj.part_branch.value=="" || formobj.part_year.value=="" || formobj.part_phone.value=="" || formobj.part_email.value=="")
	 {
	   alert("YOU HAVE NOT FILLED UP ALL DETAILS.. PLS CHECK IT AGAIN");
	  return false;
	 }
	 
	 	
	 
	 if(!(formobj.part_phone.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Mobile NO.!");
		formobj.part_phone.focus();
		return false;
	 }	
	 
	 if(!(formobj.receipt_no.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Receipt NO.!");
		formobj.part_phone.focus();
		return false;
	 }	
	 	if(reg.test(formobj.part_email.value) == false)
	{
		alert('Invalid Email Address');
		formobj.part_email.focus();
		return false;
	}
			 
	return true;
}//End of function

function validate_extra()
{
	
	var formobj1 = document.extra;
	var betaExp= /^[0-9]+$/;	 
	
	if (formobj1.old_rec.value =="" || formobj1.new_rec.value=="")
	 {
	   alert("YOU HAVE NOT FILLED UP ALL DETAILS.. PLS CHECK IT AGAIN");
	  return false;
	 }
	 
	 if(!(formobj1.old_rec.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Receipt NO.!");
		formobj1.old_rec.focus();
		return false;
	 }	
	 
	 if(!(formobj1.new_rec.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Receipt NO.!");
		formobj1.new_rec.focus();
		return false;
	 }
	
return true;	}

</script>
</head>

<body> 

<h2><b><center>REGISTRATION FORM</center></b></h2><br /><br />
<b>TYPE :</b>
<input id="pckg" type="radio" name="receipt_type" value="PACKAGE"  />PACKAGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input id="ext" type="radio" name="receipt_type" value="EXTRA" />EXTRA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div id="reg"> 
<form name="registration" method="post"  action="include/submit_reg.php" onsubmit="return validateregistration()">
<b>RECEIPT NO. :</b>
<input type="text" name="receipt_no" maxlength="4"  size="4"/><br /><br />
<b>NAME :</b>
<input id="nik" type="text" name="part_name" maxlength="40" size="40" /><br /><br />
<b>COLLEGE :</b>
<input type="text" name="college_name" maxlength="50" size="50"/><br /><br />
<b>BRANCH :</b>
<select id="other" name="part_branch">
<option value="CP/IT">CP/IT</option>
<option value="EC">EC</option>
<option value="EE">ELECTRICAL</option>
<option value="ME">MECHANICAL</option>
<option value="MC">MECHATRONICS</option>
<option value="CH">CHEMICAL</option>
<option value="CE">CIVIL</option>
<option value="FP">FOOD TECH & PROCESS</option>
<option value="AM">AUTOMOBILE</option>
<option value="MG">MANAGEMENT</option>
<option  value="OTHER">OTHER</option>
</select>
<br/>
<div id="part_branch_other">
<br/><b>Other Branch Name:</b><input type="text" name="part_branch_other" maxlength="20" size="20"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div><br/>
<b>YEAR :</b>
<select name="part_year">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select> <br /><br />
<b>MOBILE NO. :</b>
<input type="text" name="part_phone" maxlength="11" size="11"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>E-MAIL ID :</b>
<input type="text" name="part_email" maxlength="40" size="40"/><br /><br />
<br /><br />
<center><input type="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" /></center>
</form>
</div>
<div id="extrfrm" >
<form name="extra" method="post"  action="include/submit_extra_reg.php" onsubmit="return validate_extra()">  
<h2><b><center>Extra Event</center></b></h2><br /><br /> 
OLD RECEIPT NO: <input type="text" name="old_rec" maxlength="4"/>
NEW RECEIPT NO: <input type="text" name="new_rec" maxlength="4"/>
<input type="submit"  value="Submit" />

</form>
</div>

</body>
</html>
	