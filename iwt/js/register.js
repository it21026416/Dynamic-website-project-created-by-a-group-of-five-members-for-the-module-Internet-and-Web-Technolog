function cpassword()
{
  if (document.getElementById("password").value != document.getElementById("pswrepeat").value)
  {
    alert("Password not matched");
    return false;
  }
  else
  {
	alert("Registration successful");
    return true;
  }
}

function func()
{
  var GivenDate = document.getElementById("bday").value;
  var CurrentDate = new Date();
  GivenDate = new Date(GivenDate);
  
  if(GivenDate > CurrentDate){
    alert('date of birth is invalid');
    return false;
  }
  else{
    return true;
  }
}

function enable()
{
  if(document.getElementById("checkbox").checked)
  {
    document.getElementById("sub").disabled=false;
  }
  else
  {
    document.getElementById("sub").disabled=true;
  }
}
