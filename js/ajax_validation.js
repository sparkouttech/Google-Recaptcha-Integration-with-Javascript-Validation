function form_validation() 
{
	var username=document.getElementById('username').value;
	var Password=document.getElementById('Password').value;

	// recaptcha validation
	var v = grecaptcha.getResponse();

	if(username=='')
	{
		alert('Please Enter Username');
		document.getElementById('username').focus();
		return false;
	}
	else if(Password=='')
	{
		alert('Please Enter Password');
		document.getElementById('Password').focus();
		return false;
	}
	else if(v.length == 0)
	{
		alert('Please Check Google Recaptcha');
		return false;
	}
	else
	{
		return true;
	}
}