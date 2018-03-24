
        <!-- Div Content edit here -->
                    <!--content starts-->
<html>
<head><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<style>
.hide{
	display:none;
}
.grey{
  color:grey;
}
.black{
  color:black;
  font-weight: bold;
}
</style>

<script>
$(function(){
    $('[rel="popover"]').popover({
        html: true,
        content: function () {
            var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
            return clone;
        }
    }).click(function(e) {
        e.preventDefault();
    });
});
</script>

<div id="myPopover" class="hide">
  <p class="grey">New code or text snippet-----------------</p>
  <a href="#" class="black">Code or text Snippet</a><br>
  <a href="#" class="black">Post</a><br>
  <p class="grey">Files from your computer-----------------</p>
  <input type="file" value="Your Computer">
</div>
</head>
<body>
          <div id="content" style="margin-left: 242px;">

              <div id="msgDiv1" style="margin-top:60px;margin-bottom:60px">

                <h6 class="" style="font-weight: bolder;padding-left:500px;padding-right:600px" id="msgTimeBar">Today</h6>
                        <script>
                              var date=new Date();
                              var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
                              var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
                              var d=date.getDate();
                              var ext=d%10;
                              var ext1="th";
                                     if(ext===1)
                                     {
                                       ext1="st";
                                     }
                                     else if (ext===2) {
                                       ext1=="nd";
                                     }
                                     else if (ext===3) {
                                       ext1=="rd";
                                     }
                              document.getElementById("msgTimeBar").innerHTML=day[date.getDay()]+","+month[date.getMonth()]+' '+d+ext1;

                     </script>

                        <!--msg table starts-->
                        <table border="0" cellspacing="5" cellpadding="2" id="msgTable" class="tablecorners">

                        </table>
                    </div>
                    <!--msg table ends-->
                    <div class="fixed">
                        <table>
                            <tr>
                                <td><button id="attach-btn-id" class="attach-btn" value="+" rel="popover" data-placement="top" data-popover-content="#myPopover">+</button></td>
                                <td style="width:1300px"><input type="text" id="message" onkeypress="return showMsg(event)" placeholder="Message #general"></td>
                            </tr>
                        </table>
                    </div>
                  </div>
          </div>

                    <!--content ends-->
