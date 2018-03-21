<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bootstrap Kickstarter Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/corners.css" rel="stylesheet">
    <link href="assets/css/right-side-menu.css" rel="stylesheet">
  </head>

  <body>
    <script src="assets/js/bodyJs/contentJavaScript.js"></script>
    <script src="assets/js/dropdowm.js"></script>
    <script src="assets/js/dropjs.js"></script>
    <script src="assets/js/headerclick.js"></script>
    <script src="assets/js/right-side-menu.js"></script>

      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <div class="container-fluid">

     <div class="row" style="margin-top:30px;">
      <div id="navigation" class="col-lg-2 col-md-3 col-sm-3" style="background-color:#4d394b;margin-top:-30px;height:700px;">
        <ul style="margin-top:20px;">
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 1</a></li>
        </ul>
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
                          <div class="chanelname" padding-left:5px><b>#general</b></div>

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
                 <div class="row" style="margin-left:0px;">
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
                       <!--<form class="form-inline ">-->
                       <input class="form-control" type="text" oninput="" placeholder="Search">
                       <!-- </form>  -->
                    </div>
                    <div class="padding-left-6px" style="margin-top:15px">
                      <img src="assets/images/icon-at-the-rate.png" width="18" height="18" onclick="openNav();" data-placement="bottom" title="Hinde Starred Items"/>
                    </div>
                    <div class="padding-left-6px" style="margin-top:15px">
                      <img src="assets/images/star.svg" width="18" height="18" onclick="openNav();" data-placement="bottom" title="Hinde Starred Items"/>
                    </div>
                      <div class="padding-left-6px" style="margin-top:15px;">
                        <img src="assets/images/option.png" width="18" height="18" onclick="openNav();" class="dropbtn" data-placement="bottom" title="Mroe Items"/>
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
