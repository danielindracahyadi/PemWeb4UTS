<!DOCTYPE html>
<html>
<title>Disparity</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style> 
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
*{
  box-sizing: border-box;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;
}
.postbtn{
  margin-top: 10px;
  font-size: 15px;
  background-image: linear-gradient(to right, #11998e, #38ef7d);
  border: none;
  border-radius: 50px;
  width: 100%;
  text-align: center;
  opacity: 5;
  transition: 0.8s;
}
.postbtn:hover{
  background-color: #11998e;
  color: white;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top" style="background-color: #15202b;">
 <div class="w3-bar w3-left-align" >
  <a href="layout_disparity.php" class="w3-bar-item w3-padding-large">
    <img src="disparity_logo.png" style="width:50px;">
  </a>

  <img src="disparity.png" style=" margin-left: -150px; margin-right: 150px; top: 50%; left: 50%; transform: translate(-50%, -50%); position: relative; width: 100px; padding-top: 50px;">
  
  <div class="w3-bar-item w3-right w3-padding-large ">
    <a href="login.php">
      <img src="logout.png" style="width: 100px; position: relative; padding-top: 5px;"> 
    </a>
  </div>
 </div>
</div>



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:100%;margin-top:10px; background-color: #10171e;"> 
  <div><br><br><br><br></div>   
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Column 1 -->
    <div class="w3-col m1"> 
    	-
    <!-- End Column 1 -->
    </div>
    
    <!--  Column 2-->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
            <div class="w3-container w3-padding">
              <div class="row">
                <div class="column">
                  <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="margin-top:20px; width:60px;"><br>
                  <a href="#" class="w3-left w3-margin-right attach "><img src="attach.png" style="width: 30px;"></a>
                </div>
                <div class="column">
                  <textarea id="subject" name="subject" placeholder="Write something.." rows="5" class="kotak" maxlength="250" style="background-color: #10171e; color: white; border: 1px solid; border-color: #2c7062;"></textarea>
                  <button class="postbtn">Post</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4>John Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
        </div>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>
      
      <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4>Jane Doe</h4><br>
        <hr class="w3-clear">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  

     
    <!-- End Column 2 -->
    </div>
    
    <!-- Column 3-->
    <div class="w3-col m3">
      
      <div class="w3-card w3-round w3-center" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
        <div class="w3-container">
          <img src="avatar.png" alt="Avatar" style="width:50%; padding-top: 10px;"><br>
          <span>Jane Doe</span>
          <p style="text-align:left; padding-left: 5px;">HELO.</p>
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-center" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
        <div class="w3-container">
          <p align="left" style="padding-top: 5px">Friend List:</p>
          <div class="w3-left" style="padding-bottom: 10px">
            <img src="avatar.png" alt="Forest" style="width: 50px;">
          </div>
          <div >
            <p class="w3-left" style="margin-left: 10px;">Name</p>
          </div><br>
        </div>
      </div>
      <br>
      
    <!-- End Column 3 -->
    </div>

    <!-- Column 1 -->
    <div class="w3-col m1"> 
    <!-- End Column 1 -->
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

</script>

</body>
</html> 
