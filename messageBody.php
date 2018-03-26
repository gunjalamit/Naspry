<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>#general | team-gsm</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/corners.css" rel="stylesheet">
        <link href="assets/css/right-side-menu.css" rel="stylesheet">
        <link href="assets/css/bell.css" rel="stylesheet">
        <link href="assets/css/channel.css" rel="stylesheet">
        <link href="assets/css/bodytext.css" rel="stylesheet">
        <link href="assets/css/divpadding.css" rel="stylesheet">
        <link href="assets/css/dropdown.css" rel="stylesheet">
        <link href="assets/css/tooltip.css" rel="stylesheet">
        <link href="assets/css/option-menu.css" rel="stylesheet">
        <link href="assets/css/msgDisplay.css" rel="stylesheet">
        <link href="assets/css/notification_dropdown.css" rel="stylesheet">
        <link href="assets/css/scrollbar.css" rel="stylesheet">
        <link href="assets/css/attach-btn.css" rel="stylesheet">

    </head>

    <body>
        <script src="assets/js/bodyJs/contentJavaScript.js"></script>
        <script src="assets/js/dropdowm.js"></script>
        <script src="assets/js/dropjs.js"></script>
        <script src="assets/js/headerclick.js"></script>
        <script src="assets/js/right-side-menu.js"></script>
        <script src="assets/js/bellfunction.js"></script>
        <script src="assets/js/belltooltip.js"></script>
        <script src="assets/js/popupmsg.js"></script>
        <!--script src="assets/js/channels.js"></script-->
        <script src="assets/js/dropdown.js"></script>
        <script src="assets/js/option-menu.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="vendor\bootstrap\js\bootstrap.min.js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="vendor\bootstrap\css\bootstrap.min.css"></script>

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


          <!-- Div Content edit here -->
                    <!--content starts-->


                    <div id="content" style="margin-left: 0;">
                      <div id="myPopover" class="hide" >
                        <ul id="menu_items" role="menu" style="list-style-type: none;">

                            <div class="section_header">
                              <span class="header_label menu_mini">
                                 New…
                              </span>
                            </div>

                            <li data-which="snippet" class="file_menu_item"><a class="grey" target="_blank" href="">
                              Code or text snippet
                            </a></li>

                            <li data-which="snippet" class="file_menu_item"><a class="grey" target="_blank" href="">
                              Post
                            </a></li>

                            <div class="section_header"><hr><span class="header_label menu_mini">
                              Add a file from…
                            </span></div>

                              <li data-which="choose" class="file_menu_item">
                                <label class="grey" for="file_input_id">Your Computer</label>
                                  <input type="file" id="file_input_id">
                                </li>
                            </ul>
                     </div>


                    <div id="msgDiv" style="margin-top:60px;margin-bottom:60px">
                      <h6 style="padding-left:450px;padding-right:400px" id="msgTimeBar">Today</h6>
                     <script>
                     var date=new Date();
                     var day=['Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
                     var month=['January','February','March','April','May','June','July','Augest','September','October','November','December'];
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
                     document.getElementById("msgTimeBar").innerHTML=day[date.getDay()]+", "+month[date.getMonth()]+' '+d+ext1;

                     </script>
                        <!--msg table starts-->
                        <table border="0" cellspacing="5" cellpadding="2" id="msgTable" class="tablecorners">

                        </table>
                    </div>
                    <!--msg table ends-->
                    <div class="fixed">
                        <table>
                            <tr>
                                <td><input id="attach-btn-id" class="attach-btn" type="button" value="+" rel="popover" data-placement="top" data-popover-content="#myPopover"></td>
                                <td style="width:1300px"><input type="text" id="message" onkeypress="return showMsg(event)" placeholder="Message #general"></td>
                            </tr>
                        </table>
                    </div>
                  </div>

                    <!--content ends-->
