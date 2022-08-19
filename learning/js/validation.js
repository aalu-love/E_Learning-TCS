function validateForm()								 
{ 
	var name = document.forms["myForm"]["usrname"];
	var course = document.forms["myForm"]["course"];
	var phone = document.forms["myForm"]["phone"];
	var email = document.forms["myForm"]["mail"];  
	var password = document.forms["myForm"]["password"]; 
	var con_password = document.forms["myForm"]["con_password"]; 

	if (name.value == "")								 
	{ 
		window.alert("Please enter your name."); 
		name.focus(); 
		return false; 
	} 

	if (course.value == "")							 
	{ 
		window.alert("Please enter your Course."); 
		course.focus(); 
		return false; 
	} 
	
	if (phone.value == "")								 
	{ 
		window.alert("Please enter a valid Phone."); 
		phone.focus(); 
		return false; 
	} 

	if (email.value == "")						 
	{ 
		window.alert("Please enter your email address."); 
		email.focus(); 
		return false; 
	} 

	if (password.value == "")					 
	{ 
		window.alert("Enter your password"); 
		password.focus(); 
		return false; 
	} 

		if (con_password.value == "")					 
	{ 
		window.alert("Enter Confirm Password"); 
		con_password.focus(); 
		return false; 
	} 

	if (password.value != con_password.value)					 
	{ 
		window.alert("Password does not match"); 
		return false; 
	} 

	return true; 
}