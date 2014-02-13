//Function for ensuring filled form fields in Registration Form.
function validateregistration()
{	alert("hi");
     var formobj = document.registration;
	 var alphaExp= /^[a-zA-Z]+$/;
	 var betaExp= /^[0-9]+$/;	 
	 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

	 if (formobj.receipt_no.value =="" || formobj.part_name.value=="" || formobj.college_name.value=="" || formobj.part_branch.value=="" || formobj.part_year.value=="" || formobj.part_phone.value=="" || formobj.part_email.value=="")
	 {
	   alert("YOU HAVE NOT FILLED UP ALL DETAILS.. PLS CHECK IT AGAIN");
	  return false;
	 }
	 
	 if(!(formobj.part_name.value.match(alphaExp)))
	 {
		alert("Please enter Letters only in Participent's Name!");
		formobj.part_name.focus();
		return false;
	 }	
	 
	 if(!(formobj.part_phone.value.match(betaExp)))
	 {
		alert("Please enter Numbers only in Mobile NO.!");
		formobj.part_phone.focus();
		return false;
	 }	
	 	if(reg.test(formobj.part_email.value) == false)
	{
		alert('Invalid Email Address');
		formobj.part_email.focus();
		return false;
	}
/*
	 if (formobj.lastname.value =="")
	 {
	   alert("Please enter your last Name.");
	   formobj.lastname.focus();
	   return false;
	 }

	 if(!(formobj.lastname.value.match(alphaExp)))
	 {
		alert("Please enter Letters only in LastName!");
		formobj.lastname.focus();
		return false;
	 }	
					 
	 if (formobj.username.value =="")
	 {
	   alert("Please enter username for future login.");
	   formobj.username.focus();
	   return false;
	 }
	 if (formobj.password.value =="")
	 {
	   alert("Please enter your password.");
	   formobj.password.focus();
	   return false;
	 }

	 if (formobj.confirmpassword.value =="")
	 {
	   alert("Please repeat your password for confirmation.");
	   formobj.confirmpassword.focus();
	   return false;
	 }

	 if(formobj.password.value!=formobj.confirmpassword.value)
	 {
		alert("Confirm Password does not match! Please enter same password for confirmation.");
		formobj.password.value ==""
		formobj.confirmpassword.value ==""
		formobj.confirmpassword.focus();
		return false;
	 }
	 
	 if (formobj.address.value =="")
	 {
	   alert("Please enter your postal address.");
	   formobj.address.focus();
	   return false;
	 }
	 if (formobj.mobile.value =="")
	 {
	   alert("Please enter your Mobile number.");
	   formobj.mobile.focus();
	   return false;
	 }
	 if (isNaN(formobj.mobile.value))
	 {
		alert("Please enter numbers only!!");
		formobj.mobile.focus();
		return false;
	 }

	 if (formobj.home_number.value =="")
	 {
	   alert("Please enter your Home Phone number.");
	   formobj.home_number.focus();
	   return false;
	 }
	 if (isNaN(formobj.home_number.value))
	 {
		alert("Please enter numbers only!!");
		formobj.home_number.focus();
		return false;
	 }

	 if (formobj.emailaddress.value =="")
	 {
	   alert("Please enter your Email Address..");
	   formobj.emailaddress.focus();
	   return false;
	 }

	*/

		 
	/* if (formobj.sec_question.value =="")
	 {
	   alert("Please select security question.");
	   formobj.sc_question.focus();
	   return false;
	 }
	 
	 if (formobj.sec_answer.value =="")
	 {
	   alert("Please provide answer of security question.");
	   formobj.sec_answer.focus();
	   return false;
	 }*/
					 
	//return true;
}//End of function