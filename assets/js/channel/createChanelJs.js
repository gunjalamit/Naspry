    function createChannelFunc()
    {
        alert('channel created');
    }
    function enableCreate(event)
{

var channel=document.getElementById('name').value;
if(channel)
{
      //alert('inside funct');

$("#createChannel").removeAttr("disabled");
    document.getElementById('createChannel').style.cssText="background-color:#2EA664;opacity:1;border-radius:8px";  
    //document.getElementById('createChannel').disabled="false";
}
}
function openNav() {
    document.getElementById("myNav").style.display = "block";
}

function closeNav() {
    document.getElementById("myNav").style.display = "none";
}