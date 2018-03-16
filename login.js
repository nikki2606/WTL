function validate()
{
   var pwd=document.getElementById('pwd').value;
    var special = /^[0-9a-zA-Z]+$/;
    if (pwd.match(special))
        {
          return true;
        }
    else{
      alert("PASSWORD should not contain special characters");
      return false;
    }

}
