
function hideALL(){
  var hide_them = document.getElementsByClassName('main-body');
  for(var i =0;i<hide_them.length;i++)
  {
    hide_them[i].style.display="none"
  }
}

function display_this(id_to_display){
  hideALL();
  document.getElementById(id_to_display).style.display="block";
}
