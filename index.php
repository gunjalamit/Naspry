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
  </head>

  <body>
    <script src="assets/js/bodyJs/contentJavaScript.js"></script>
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
        <div class="main">
          <!-- Div Header edit here -->

          <div class="row" style="overflow:hidden !important;padding:10px;border:0px solid black;z-index:0;background-color:gray;position:fixed;top:0;width: 100%;">

            <div class="row border-element" style="position:fixed;width:83%;overflow:hidden;">
  <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top"> -->


      <div class="col-sm-8 col-lg-8">

              <div class="row">
                <div class="col-sm-7 col-lg-7" >
                  <div class="row">
                        <div class="col-sm-12 ">
                          <div class="chanelname" padding-left:5px><b>#general</b></div>

                        </div>
                  </div>
                  <div class="row">
                        <div class="col-sm-12" >
                                <label id="staryellowid" onclick="staryellowclick()"style="padding-left:5px" data-toggle="tooltip" data-placement="bottom" title="Star this channel"><img src="assets/images/star.svg" width="12" height="12"/> |</label>
                                <label style="padding-left:5px" data-toggle="tooltip" data-placement="bottom" title="View member list"><img src="assets/images/usericon.jpg" onclick="assets/images/pngfill.png" width="12" height="12"/></label><label style="padding-left:5px" data-placement="bottom" title="View pinned items">1</label> |
                                <label style="padding-left:5px" data-toggle="tooltip" data-placement="bottom" title="View pinned items"><img src="assets/images/pinicon.jpg" width="12" height="13" /></label><label style="padding-left:5px" data-placement="bottom" title="View pinned items">6</label> |
                                <a href="#" > Add a topic</a>
                        </div>
                  </div>
                  </div>
                  <div class="col-sm-5 col-lg-5" > </div>

                </div>

      </div>
     <div class="col-sm-4 col-lg-4">
                 <div class="row">
                  <div class="col-sm-1 col-lg-1" style="margin-top:15px" >
                    <img src="assets/images/call.png" width="18" height="18"  onclick="callclick();" style="vertical-align:middle;" data-placement="bottom" title="Only paid workspace can start calls from channel">
                  </div>
                  <div class="col-sm-1 col-lg-1" style="margin-top:15px">
                          <img src="assets/images/info.png" width="18" height="18" onclick="infoclick();" data-placement="bottom" title="Only paid workspace can start calls from channel"/>
                  </div>
                  <div class="col-sm-1 col-lg-1" style="margin-top:15px">
                        <img src="assets/images/setting.png" width="18" height="18" onclick="settingclick();" data-placement="bottom" title="Channel Setting"/>
                  </div>
                    <div class="col-sm-6 col-lg-6" >
                       <!--<form class="form-inline ">-->
                       <input class="form-control" type="text" oninput="" placeholder="Search">
                       <!-- </form>  -->
                    </div>
                    <div class="col-sm-1 col-lg-1" style="margin-top:15px">
                      <label class="aticonclass" id="calliconid" onclick="atclick();"height="20 "width="20" data-placement="bottom" title="Show Activity">@</label>
                   </div>
                    <div class="col-sm-1 col-lg-1" style="margin-top:15px">
                      <img src="assets/images/star.svg" width="18" height="18" onclick="starclick();" data-placement="bottom" title="Hinde Starred Items"/>
                    </div>
                      <div class="col-sm-1 col-lg-1" style="margin-top:15px">
                        <img src="assets/images/option.png" width="18" height="18" onclick="myFunction();" class="dropbtn" data-placement="bottom" title="Mroe Items"/>
                      </div>
                </div>
      </div><!--rigth close-->

</div>



















          </div>
          <!-- Div Header ends here -->

          <!-- Div Content edit here -->
          <!--content starts-->
          <div id="msgDiv" style="margin-top:30px;margin-bottom:60px">
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
