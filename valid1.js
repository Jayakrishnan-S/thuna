function validateform()
{
var x=document.forms["myform"]["name"].value;
if(x=="")
{
alert("Please fill name");
return false;
}
if( document.myform.phone.value == "" ||
           isNaN( document.myform.phone.value) ||
           document.myform.phone.value.length != 10 )
   {
     alert( "Please provide a 10 digit mobile no" );
     document.myform.phone.focus() ;
     return false;
   }
   var a=document.forms["myform"]["gender"].value;
if(a=="")
{
  alert("Please choose your Gender: Male or Female");
return false;
}
   
var a=document.forms["myform"]["dob"].value;
if(a=="")
{
alert("Please give date of birth");
return false;
}
var c=document.forms["myform"]["service"].value;
if(c=="")
{
alert("Please select a service ");
return false;
}
var b=document.forms["myform"]["city"].value;
if(b=="")
{
alert("Please select a city");
return false;
}
var c=document.forms["myform"]["add"].value;
if(c=="")
{
alert("Please fill address field");
return false;
}
var c=document.forms["myform"]["service"].value;
if(c=="")
{
alert("Please select a service ");
return false;
}

if(myform.uname.value == "") {
      alert("Error: Username cannot be blank!");
      myform.uname.focus();
      return false;
    }
    

    if(myform.uname.value.length < 6) {
        alert("Error: username must contain at least six characters!");
        myform.uname.focus();
        return false;
      }
   

    if(myform.pass.value != "" && myform.pass.value == myform.cpass.value) {
      if(myform.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        myform.pass.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(myform.pass.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        myform.pass.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(myform.pass.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        myform.pass.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(myform.pass.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        myform.pass.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      myform.pass.focus();
      return false;
    }

    return true;
 }