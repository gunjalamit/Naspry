   <!-- Div Header edit here -->
   <div id="msgdiv" style="border:1px"  class="myDiv input-group ">
             <form>
             <input id="topicbox" onkeypress="return setMsg1(event)" name="topicbox" type="text-area" style="height:100px;width:400px" class="form-control" placeholder="Add a topic" id="text"/>
             <div style="padding-left: 245px;padding-top: 5px">
               <div style="width:258px"></div>
               <input type="button" class="btn btn-secondary" onclick="clgMsg()" value="cancel" name="cancel"/>


                 <input type="button" class="btn btn-primary" style="background-color:green" onclick="setMsg()" value="setTopic" name="setTopic"/></div>
           </form>
           </div>


           <div id="optionmenu" class="menuoption">
     <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeOptionMenu()">&times;</a> -->
     <a href="#"><img src="assets/images/file-menu.png" height="22" width="22"/>Your Files</a>
     <a href="#"><img src="assets/images/allfiles.png" height="28" width="28"/>All FIles</a>
     <a href="#"><img src="assets/images/directory.png" height="28" width="28"/>workspace directory</a>
     <a href="#"><img src="assets/images/help.png" height="22" width="22"/>Help</a>
     <a href="#"><img src="assets/images/wnew.png" height="28" width="28"/>Whats new</a>
     <a href="#">Keyboard Shotcut</a>

 </div>



                    <div id="header"style="margin-left:243px;">
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

                                            <img src="assets/images/usericon.jpg" data-toggle="tooltip" data-placement="bottom" title="View member list" onclick="assets / images / pngfill.png" width="12" height="12"/>

                                            <label style="padding-left:5px" data-placement="bottom" title="View pinned items">1</label> |
                                            <label style="padding-left:5px" data-toggle="tooltip" data-placement="bottom" title="View pinned items">

                                                <img src="assets/images/icon-pin-outline.png" width="14" height="16" /></label><label style="padding-left:5px" data-placement="bottom" title="View pinned items">6</label> |
                                            <a href="#" class="header-color"><img src="assets/images/icon-edit.png" width="14" height="16" /> <label id="topp" onclick="msgPopup()"> Add a topic </label></a>
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
                  </div>
                    <!-- Div Header ends here -->
