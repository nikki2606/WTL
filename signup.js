function validate()
{
   var roll=document.getElementById('rollno').value;
  var numbers = /^[0-9]+$/;

  if (roll.match(numbers))
      {
   if (roll.length!="6")
   {
    alert("ROLL NO should be of length 6 digits ");
    return false;
   }
else {
  {
    if((roll.charAt(0)!="1")&(roll.charAt(1)!="0") & (roll.charAt(2)!="1")& (roll.charAt(3)!="5"))
    {

      alert("ROLL NO should be in the format '1015--'");
      return false;
    }
  }
}
}
else {
  {  alert("ROLL NO should should not contain alphabets & should be in the format '1015--'");
    return false;

  }
}
}
