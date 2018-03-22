var flagmenu = 0;

function openOptionMenu() {
 if (flagmenu == 0) {
     this.flagmenu=1;
   document.getElementById("optionmenu").style.width = "250px";
   document.getElementById("messageBox").style.width = "50";
 }
 else{
   this.flagmenu=0;
     document.getElementById("optionmenu").style.width = "0";
     document.getElementById("main").style.marginRight = "0";
 }
}
