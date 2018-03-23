function showMsg(event) {
//check if enter is pressed
  if (event.which == 13 || event.keyCode == 13) {

    var msg = document.getElementById('message').value;

    document.getElementById('message').value = "";
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var period = " AM";
    if (hours > 12) {
      period = " PM";
      hours -= 12;
    }
    if(msg != "" && msg != null)
    {document.getElementById('msgTable').innerHTML += "<tr><td rowspan=2>" +
      "<img src='assets/images/slack-user.png' class='rcorner' height='30' width='30'></td><td class='userName'>Naspry<small style='color:#9E9E9E;font-size:12px;padding-left:4px;'>" + hours + ":" + minutes + period + "</small> &nbsp;</td></tr>" + "<tr id='msgRow'><td class='td1'>" + msg + "</td></tr>";
    return false;}
  }
}
