    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/channel/createChanelJs.js"></script>
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
                                    <label onclick="myFunction();" class="dropbtn dropdown-toggle" style="background-color:#4d394b;"></label><br>
                                    <img src="assets/images/icon-active.png" width="15" height="15" ><label style="font-size:15px; color:gray;margin-top:-1px;">&nbsp;&nbsp;priya</label>
                                <div id="myDropdown" class="dropdown-content">
                                    <div style="font-size:15px;">
                                        <table>
                                            <tr>
                                                <td rowspan="2"><img src="assets/images/profile.png" width="30" height="30" ></td>
                                                <td><th>priya</th></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><h6 style="color:gray;">Priya Khaire</h6></td>
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
                                    <h6 style="color:gray; padding-left:10px;margin-top:25px;">Snooze notification</h6>
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

                    <div class="row" style="background-color:#4d394b;height:700px;">
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
                                    <a href="channel.php" class="bodyclr" rel="tooltip" title="Create a channel">
                                        Channels
                                        <img align="right" src="assets/images/icon-plus.png" height="17" width="17"/>
                                    </a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;code</a></div>
                                <div class="links users"><a href="#" class="bodyclr active-element">&nbsp;#&nbsp;&nbsp;general</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;random</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;test</a></div>
                                <div class="links users"><a href="#" class="bodyclr">&nbsp;#&nbsp;&nbsp;ui-ux</a></div>
                            </div>
                            <div id="persoldiv" style="height:220px;">
                                <div class="links users">
                                    <a href="#" class="bodyclr"  rel="tooltip" title="Open a direct message">Direct Messages
                                        <img align="right" src="assets/images/icon-plus.png" height="17" width="17"/></a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-heart.png" height="15" width="15"/>&nbsp;Slackbot</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-active.png" height="15" width="15"/>&nbsp;priya (you)</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;yogs</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;amit</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;nagesh</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-inactive.png" height="15" width="15"/>&nbsp;shweta</a></div>
                                <div class="links users"><a href="#" class="bodyclr"><img src="assets/images/icon-active.png" height="15" width="15"/>&nbsp;rohan</a></div>
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
