<?php 
session_start();
?>
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
.flip-card {
  margin: 10px 0 10px 0;
  background-color: transparent;
  width: 200px;
  height: 200px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
}

.flip-card-front {
  background-color: #000;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
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
    <a href="#">
    <img src="avatar.png" class="w3-circle" style="height:50px;width:50px;position: relative;" alt="Avatar">
    </a>
    <a href="login.php">
      <img src="logout.png" name="nameLogOut" id="idLogOut" style="width: 90px; position: relative;"> 
    </a>
  </div>

 </div>
</div>
<!-- End Navbar -->

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
            	<form method="post" id="idFormPost">
					<textarea id="subject" name="isiPost" placeholder="Write something.." rows="5" class="kotak" maxlength="250" style="background-color: #10171e; color: white; border: 1px solid; border-color: #2c7062;"></textarea>
					<button type="submit" class="postbtn">Post</button>
            	</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- POSTINGAN -->
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

    <?php 
    	$host = "localhost";
  		$username = "root";
  		$dbname = "disparity";
  		$password = "";

  		$con = new mysqli($host, $username, $password, $dbname);

  		$idnya = $_SESSION['id'];
  		$queryPribadi = "SELECT * from usr where email='$idnya'";
  		$result = mysqli_query($con, $queryPribadi);
  		// if (!$check1_res) {
  		//     printf("Error: %s\n", mysqli_error($con));
  		//     exit();
  		// }
  		$user = mysqli_fetch_array($result);

  		$queryContent = "SELECT * FROM content ORDER BY contentId DESC";
  		$result = $con->query($queryContent);
  		
  		foreach ($result as $caption):
		?>
     	<!-- yang ini tolong jangan diubah, ubah yg atas aja ntar gw samain ke yg sini -->
      <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4><?=$user['firstName'];?></h4><br>
        <hr class="w3-clear">
        <p><?=$caption['captionContent'];?></p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  
  <?php endforeach; ?>  

    <!-- End Column 2 -->
    </div>
    
    <!-- Column 3-->
    <div class="w3-col m3">
      
      <div class="w3-card w3-round w3-center" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
        <div class="w3-container">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="avatar.png" alt="Avatar" style="width:200px;height: 200px">
              </div>
              <div class="flip-card-back">
                <!-- isi flipcard disini -->
                <h1>John Doe</h1> 
                <p>Architect & Engineer</p> 
                <p>We love that guy</p>
              </div>
            </div>
          </div>
          <!-- <img src="avatar.png" alt="Avatar" style="width:50%; padding-top: 10px;"><br> -->
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
$(document).ready(function() {
	$("#idFormPost").submit(function() {
		var dataform = $(this).serialize();	
		$.ajax({
			url:"save_posting.php",
			type:"post",
			data:dataform,
			success:function(data) {
				if(data == "gagal"){
					alert("Email or Password not exist.");
				} else{
					//alert(data);
					location.reload();
				}
			}
		});
		return false;
	});

});

var btn = document.getElementById('idLogOut');
    btn.addEventListener('click', function() {
      $.ajax({
        url:"action_logout.php",
        type:"GET",
        success:function(data) {
          document.location.href = 'index.php';
        }
      });
    });

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
