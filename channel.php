<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/channelStyle.css">

</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="assets/js/channel/createChanelJs.js"></script>
<div id="myNav" class="overlay row" style="display:block;">
  <a href="index.php" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <div name="channel header" style="padding-left:20%;padding-right:20%;padding-top:0%;padding-bottom:5%;  margin:50px">
        <span  style="font-family: calibri;font-size:20px; font-weight: bolder">
            <h1><b>

<<<<<<< HEAD
         Create a channel</b></h1></span>

        <label class="lightFont" align="left">

            Channels are where your people communicate. They're best when organized around a topic:
             <p> #leads, for example.<p>
          </label>
          <br>


=======
         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Create a channel</b></h1></span>

        <label class="lightFont" align="left">
             
            Channels are where your people communicate. They're best when organized around a topic:
             <p> #leads, for example.<p>
          </label> 
          <br>
         
        
>>>>>>> amit
           <!--toggle button-->
           <table  class="table"><tr>
            <td> <label class="switch">
              <input type="checkbox" checked>
              <span align="left" class="slider round"></span>
<<<<<<< HEAD

            </label></td>
            <td style="display:block;"><label> Anyone in your workspace can view and join this channel.</label></td>
        </tr></table>


=======
              
            </label></td>
            <td style="display:block;"><label> Anyone in your workspace can view and join this channel.</label></td>
        </tr></table>
       
           
>>>>>>> amit
  <form>
    <div class="form-group">
      <label for="inputdefault">  Name</label>

     <input class="form-control input-lg" style="padding-bottom: 0%" value="chanel name" placeholder="# e.g. leads" id="name" type="text" onclick="enableCreate(event)">
     <label class="lightFont" for="name" >
                Names must be lowercase, without spaces or periods, and shorter than 22 characters.
            </label>
    </div>


<<<<<<< HEAD

=======
            
>>>>>>> amit
    <div class="form-group">
      <label for="inputlg"> Purpose(Optional)</label>
      <input class="form-control input-lg" id="Purpose" type="text">
         <label class="lightFont" for="name" >
               what is this channel about?
            </label>
    </div>
    <div class="form-group">
      <label for="inputsm"> Send invites to(Optional)</label>
      <input class="form-control input-lg" id="invites" type="text">
         <label class="lightFont" for="name" >
        select upto 1000 people to add to this channel.
            </label>
    </div>
   <div align="right">
       <button class="btn btn-danger formButton" onclick="closeNav()">Cancel</button>
            <button class="btn btn-success disabled " id="createChannel" onclick="createChannelFunc()" disabled>Create channel</button>
   </div>
  </form>
    </div>
  </div>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

</body>
</html>
