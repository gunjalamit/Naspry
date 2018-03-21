function callclick(){
  alert("callclick");

}
function infoclick(){
  alert("infoclick");

}
function settingclick(){
  alert("settingclick");

}
function atclick(){
  alert("atclick");

}
function starclick(){
  alert("starclick");

}
function optionclick(){
  alert("optionclick");

}

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// function optionclickdrop(){
//   document.getElementById("myoption").classList.toggle("show");
// }

var marked=0;
function staryellowclick(){
    if(marked==0)
    {
      this.marked=1;
      document.getElementById('staryellowid').innerHTML ='<img id="yellowstar" src="assets/images/pngfill.svg" width="12" height="12" > |';

    }
    else{
      this.marked=0;
      document.getElementById('staryellowid').innerHTML ='<img id="yellowstar" src="assets/images/star.svg" width="12" height="12" > |';

    }

}
