var flagmenu = 0;

function openSettingMenu() {
  if (flagmenu == 0) {
    this.flagmenu = 1;
    document.getElementById("settingmenu").style.width = "250px";
    document.getElementById("settingmenu").style.marginRight = "250px";

    document.getElementById("messageBox").style.width = "50";
  } else {
    this.flagmenu = 0;
    document.getElementById("settingmenu").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
  }
}
