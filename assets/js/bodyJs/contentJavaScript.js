function showMsg(event) {

	  if (event.which == 13 || event.keyCode == 13) {

            var msg=document.getElementById('message').value;
	 var date=new Date();
	 var hours=date.getHours();
	 var minutes=date.getMinutes();
	 var period=" am";
	 if(hours>12)
	 {
	 	period=" pm";
	 	hours-=12;
	 }
	document.getElementById('msgTable').innerHTML+="<tr><td>"+
	"<img class='rcorners' src='Koala.jpg' height='40' width='40'><b> Naspry </b>"+hours+":"+minutes+period+" &nbsp;</td>"+"<td>"+msg+"</td></tr>";

        return false;
    }
     }
