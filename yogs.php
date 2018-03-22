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
    <link href="assets/css/notification_dropdown.css" rel="stylesheet">

  </head>

  <body>
    <script src="assets/js/bodyJs/contentJavaScript.js"></script>
    <script src="assets/js/dropdowm.js"></script>
    <script src="assets/js/dropjs.js"></script>
    <script src="assets/js/headerclick.js"></script>
    <script src="assets/js/right-side-menu.js"></script>
    <script src="assets/js/bellfunction.js"></script>
    <script src="assets/js/belltooltip.js"></script>
    <script src="assets/js/channels.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/option-menu.js"></script>

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <div id="optionmenu" class="menuoption">
     <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeOptionMenu()">&times;</a> -->
     <a href="#">Your files</a>
     <a href="#">All FIles</a>
     <a href="#">workspace directory</a>
     <a href="#">Help</a>
     <a href="#">Whats new</a>
     <a href="#">Keyboard Shotcut</a>
 </div>

    <div class="container-fluid">

     <div class="row" style="margin-top:30px;">
      <div id="navigation" class="col-lg-2 col-md-3 col-sm-3" style="background-color:#4d394b;margin-top:-30px;height:700px;">



        <div class="row" style="background-color:#4d394b;height:100px;">
  <div class="col-sm-10" id="sidebar">
    <div class="dropdown"><p style="color:white; font-size:20px;"> <b>team-gsm </b>
      <label onclick="myFunction();" class="dropbtn dropdown-toggle" ></label><br><img src="assets/images/icon-active.png" width="15" height="15" ><label style="font-size:15px; color:gray;margin-top:-1px;">&nbsp;&nbsp;rohan</label>
      <div id="myDropdown" class="dropdown-content">
        <div>
          <table>
            <tr>
              <td rowspan="2"><img src="assets/images/profile.png" width="40" height="40" ></td>
              <td><th>Priya</th></td>
            </tr>
            <tr>
              <td></td>
              <td><h6 style="color:gray;">priya khaire</h6></td>
            </tr>
          </table>
          <a href="#" class="links">Set s Status</a>
          <a href="#" class="links">Profile & Account</a>
          <a href="#" class="links">Preferences</a>
          <a href="#" class="links">Self Yourself Away</a>
          <a href="#" class="links">Help & Feedback</a>
        </div>
      </div>
    </div>
  </div>
<!--notification bell-->
  <div class="col-sm-2">
    <div class="dropdownbell">
      <a href="#" rel="tooltip" title="Notification"><img src="assets/images/icon-bell.png" onclick="bellfunction();" class="dropbtnbell"></a>
      <div id="mybell" class="dropdownbell-content">
        <h6 style="color:gray; padding-left:10px;">Snooze notification_____</h6>
        <a href="#" class="links">20 minuts</a>
        <a href="#" class="links">1 hour</a>
        <a href="#" class="links">2 hours</a>
        <a href="#" class="links">4 hours</a>
        <a href="#" class="links">8 hours</a>
        <a href="#" class="links">24 hours</a>
      </div>
    </div>
  </div>
</div>

<div class="row" style="overflow-y: scroll;background-color:#4d394b;height:700px;">
  <div class="col-sm-12" id="personaldiv" style="height:700px;">
    <div style="height:10px;" class="links">
      <a href="#" class="bodyclr">.</a>
    </div>
    <div style="height:50px;" class="links">
      <a href="#" class="bodyclr"><img src="assets/images/bh.png" height="20" width="20"/>jump to..</a>
    </div>
    <div class="links" style="height:50px;">
      <a href="#" class="bodyclr"><img src="assets/images/allthread.png" height="20" width="20">All Threads</a>
    </div>
    <div id="channeldiv" style="height:180px;">
        <div class="links users" id="channelid"><a href="#" class="bodyclr" onclick="backcolor();">Channels</a><a href="#" rel="tooltip" title="Create a channel"><img src="assets/images/icon-plus.png" height="17" width="17"/></a></div>
        <div class="links users"><a href="/lonar2-master/code.php" class="bodyclr">&nbsp;#&nbsp;&nbsp;code</a></div>
        <div class="links users"><a href="/lonar2-master/" class="bodyclr">&nbsp;#&nbsp;&nbsp;general</a></div>
        <div class="links users"><a href="/lonar2-master/random.php" class="bodyclr">&nbsp;#&nbsp;&nbsp;random</a></div>
        <div class="links users"><a href="/lonar2-master/code.php" class="bodyclr">&nbsp;#&nbsp;&nbsp;code</a></div>
        <div class="links users"><a href="/lonar2-master/ui-ux.php" class="bodyclr">&nbsp;#&nbsp;&nbsp;ui-ux</a></div>
    </div>
    <div id="persoldiv" style="height:220px;">
      <div class="links users"><a href="#" class="bodyclr">Direct Messages</a><a href="#" rel="tooltip" title="Open a direct message"><img src="assets/images/icon-plus.png" height="17" width="17"/></a></div>
      <div class="links users"><a href="/lonar2-master/Nasprybot.php" class="bodyclr"><img src="assets/images/icon-heart.png" height="15" width="15"/>&nbsp;Slackbot</a></div>
      <div class="links users"><a href="/lonar2-master/priya.php" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;priya</a></div>
      <div class="links users active-element"><a href="/lonar2-master/yogs.php" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;yogs</a></div>
      <div class="links users"><a href="/lonar2-master/amit.php" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;amit</a></div>
      <div class="links users"><a href="/lonar2-master/nagesh.php" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;nagesh</a></div>
      <div class="links users"><a href="/lonar2-master/shweta.php" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;shweta</a></div>
      <div class="links users"><a href="/lonar2-master/rohan.php" class="bodyclr"><img src="assets/images/icon-active.png" height="15" width="15"/>&nbsp;rohan (you)</a></div>
    </div>
    <div class="links" id="invitediv" style="height:50px;">
      <a href="#" class="bodyclr links">&nbsp;+&nbsp;&nbsp;Invite People</a><br>
    </div>
    <div class="links" id="appdiv" style="height:50px">
      <a href="#" class="bodyclr">&nbsp;&nbsp;Apps</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" rel="tooltip" title="Browse apps"><img src="assets/images/add2.png" height="17" width="17"/></a><br>
    </div>
  </div>
</div>
















      </div>

      <div class="col-lg-2 col-md-3 col-sm-3 hidden-xs">
        <!-- Placeholder - keep empty -->
      </div>

      <div id="main" class="col-lg-10 col-md-9 col-sm-9 fill">
                  <!-- Div Header edit here -->

          <div class="row head-css background-f5" style="width:88%;">

  <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top"> -->


      <div class="col-sm-8 col-lg-7">

              <div class="row">
                <div class="col-sm-7 col-lg-12" >
                  <div class="row">
                        <div class="col-sm-10">
                          <div class="chanelname" padding-left:5px><b>#yogs</b></div>

                        </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-12" >
                                <label id="staryellowid" onclick="staryellowclick()">
                                  <img src="assets/images/star.svg" width="12" height="12"  data-toggle="tooltip" data-placement="bottom" title="Star this channel"/> |</label>

                                  <img src="assets/images/usericon.jpg" data-toggle="tooltip" data-placement="bottom" title="View member list" onclick="assets/images/pngfill.png" width="12" height="12"/>

                                  <label style="padding-left:5px" data-placement="bottom" title="View pinned items">1</label> |
                                  <label style="padding-left:5px" data-toggle="tooltip" data-placement="bottom" title="View pinned items">

                                  <img src="assets/images/icon-pin-outline.png" width="14" height="16" /></label><label style="padding-left:5px" data-placement="bottom" title="View pinned items">6</label> |
                                <a href="#" class="header-color"><img src="assets/images/icon-edit.png" width="14" height="16" /> Add a topic</a>
                        </div>
                  </div>
                  </div>
                  <div class="col-sm-5 col-lg-5" > </div>
                </div>

      </div>
                 <div class="row" style="margin-left:-50px;">
                  <div class="padding-left-6px" style="margin-top:15px" >
                    <img src="assets/images/icon-call.png" width="18" height="18"  onclick="callclick();" style="vertical-align:middle;" data-placement="bottom" title="Only paid workspace can start calls from channel">
                  </div>
                  <div class="padding-left-6px" style="margin-top:15px">
                          <img src="assets/images/info.png" width="18" height="18" onclick="infoclick();" data-placement="bottom" title="Only paid workspace can start calls from channel"/>
                  </div>
                  <div class="padding-left-6px" style="margin-top:15px">
                        <img src="assets/images/icon-settings.png" width="18" height="18" onclick="settingclick();" data-placement="bottom" title="Channel Setting"/>
                  </div>
                    <div class="search-box padding-left-6px" >
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1" ><img src="assets/images/icon-search.png" height="12" width="12"/></span>
                      </div>
                      <!--<form class="form-inline ">-->
                      <input class="form-control"  type="text" oninput="" placeholder="Search">
                      <!-- </form>  -->
                    </div>
                    </div>
                    <div class="padding-left-6px" style="margin-top:15px">
                      <img src="assets/images/icon-at-the-rate.png" width="18" height="18" onclick="openNav();" data-placement="bottom" title="Hinde Starred Items"/>
                    </div>
                    <div class="padding-left-6px" style="margin-top:15px">
                      <img src="assets/images/star.svg" width="18" height="18" onclick="openNav();" data-placement="bottom" title="Hinde Starred Items"/>
                    </div>
                      <div class="padding-left-6px" style="margin-top:15px;">
                        <img src="assets/images/option.png" width="18" height="18" onclick="openOptionMenu();" class="header-option" data-placement="bottom" title="Mroe Items"/>
                      </div>
      <!--rigth close-->

              </div>
          </div>
          <!-- Div Header ends here -->

          <!-- Div Content edit here -->
          <!--content starts-->
          <div id="msgDiv" style="margin-top:60px;margin-bottom:60px">
            <!--msg table starts-->
            <table border="0" id="msgTable" class="rcorners">

            </table>
            </div>



<!--msg table ends-->
        <div class="fixed">

        <table>
          <tr>
          <td><input class="attach-btn" type="button" value="+"></td>
          <td style="width:1300px"><input type="text" id="message" onkeypress="return showMsg(event)" placeholder="Message #general"></td>
          </tr>
        </table>
        </div>

            <!--content ends-->
      </div>
     </div>
    </div>

  </body>

</html>
