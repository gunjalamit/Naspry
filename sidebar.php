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
        <link href="assets/css/scrollbar.css" rel="stylesheet">

    </head>

    <body>
        <script src="assets/js/bodyJs/contentJavaScript.js"></script>
        <script src="assets/js/dropdowm.js"></script>
        <script src="assets/js/dropjs.js"></script>
        <script src="assets/js/headerclick.js"></script>
        <script src="assets/js/right-side-menu.js"></script>
        <script src="assets/js/bellfunction.js"></script>
        <script src="assets/js/belltooltip.js"></script>
        <!--script src="assets/js/channels.js"></script-->
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
                                <div class="links users" id="channelid">
                                    <a href="channel.php" class="bodyclr" onclick="backcolor();"  rel="tooltip" title="Create a channel">
                                        Channels
                                        <img align="right" src="assets/images/icon-plus.png" height="17" width="17"/>
                                    </a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;code</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;general</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;random</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;code</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;ui-ux</a></div>
                            </div>
                            <div id="persoldiv" style="height:220px;">
                                <div class="links users">
                                    <a href="#" class="bodyclr"  rel="tooltip" title="Open a direct message">Direct Messages
                                        <img align="right" src="assets/images/icon-plus.png" height="17" width="17"/></a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-heart.png" height="15" width="15"/>&nbsp;Slackbot</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;priya</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;yogs</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;amit</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;nagesh</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;shweta</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-active.png" height="15" width="15"/>&nbsp;rohan (you)</a></div>
                            </div>
                            <div class="links" id="invitediv" style="height:50px;">
                                <a href="#" class="bodyclr links">&nbsp;+&nbsp;&nbsp;Invite People</a><br>
                            </div>
                            <div class="links" id="appdiv" style="height:50px">
                                <a href="#" align="right" class="bodyclr"  rel="tooltip" title="Browse apps">&nbsp;&nbsp;Apps<img align="right" src="assets/images/icon-plus.png" height="17" width="17"/></a><br>
                            </div>
                        </div>
                    </div>

                </div>
</body>
</html>
