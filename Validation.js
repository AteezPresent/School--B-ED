function validateForm()
   {
let v = document.forms["myform"]["sid"].value;
let w = document.forms["myform"]["sname"].value;


if (v==""){
   alert("ID must be filled out");
   return false;
}

if (w==""){
   alert("sname must be filled out");
   return false;
}
  }


  function validateForm()
   {
let x = document.forms["myform"]["pid"].value;
let y = document.forms["myform"]["pname"].value;

if (x==""){
   alert("pid must be filled out");
   return false;
}

if (y==""){
   alert("pname must be filled out");
   return false;
}
   }