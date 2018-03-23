var flagmenu = 0;

function msgPopup() {
  if (flagmenu == 0) {

      this.flagmenu=1;
    document.getElementById("msgdiv").style.width = "1250px";
    document.getElementById("messageBox").style.width = "50";
  }
  else{
    this.flagmenu=0;
      document.getElementById("msgdiv").style.width = "0";
      document.getElementById("main").style.marginRight = "0";
  }
}
function setMsg1(event){

  if (event.which == 13 || event.keyCode == 13) {
    var m=document.getElementById("topicbox").value;
    if(m!=""){
    document.getElementById('topp').innerHTML =m;
    }
    document.getElementById("msgdiv").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
    return false;
  }
}
function setMsg(){

   var m=document.getElementById("topicbox").value;
   if(m!=""){
   document.getElementById('topp').innerHTML =m;
    }

   document.getElementById("msgdiv").style.width = "0";
   document.getElementById("main").style.marginRight = "0";

}
function clgMsg(){

  document.getElementById("msgdiv").style.width = "0";
  document.getElementById("main").style.marginRight = "0";
}
