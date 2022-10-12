/* checking customer has entered username and pw */
function validateForm()
    {
    var a = document.forms["details"]["username"].value;
    var b = document.forms["details"]["password"].value;
    if (a==null || a==""|| b==null || b=="")
      {
      alert("Please Fill All Required Fields");
      return false;
      }
    }