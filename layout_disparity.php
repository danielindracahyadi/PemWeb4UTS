<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<title>Disparity</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style> 
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
*{
  box-sizing: border-box;
}
/*FEBRY ASU tgl 10 batas atas 1*/

body{
  background-color: #10171e;
}

.disparity{
  /*margin-left: -150px;
  margin-right: 150px;*/
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: relative;
  width: 100px;
  padding-top: 50px;
}

.col-10 {
  float: left;
  width: 10%;
  padding-left: 1.5%;
  padding-top: 4.5%;
}

.col-90 {
  float: left;
  width: 90%;
  padding-left: 4%;
  padding-top: 3%;
}
.col-30 {
  float: left;
  width: 33.3%;
  padding-top: 10px;
}

.postbtn{
  float: right;
  margin-top: 1%;
  margin-bottom: 1%;
  font-size: 15px;
  background-image: linear-gradient(to right, #11998e, #38ef7d);
  padding: 10px;
  border: none;
  border-radius: 50px;
  width: 100px;
  text-align: center;
  opacity: 5;
  transition: 0.8s;
}

.postbtn:hover{
  background-image: linear-gradient(to right, #1888ce, #5bc8ff);
  color: white;
}
/*FEBRY ASU tgl 10 batas bawah 1*/

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

.kotak {
  height:8; 
  resize:none;
  padding: 8px 20px;
  margin-bottom: 5px 0;
  border: 3px solid #ccc;
  border-radius: 8px;
  float: left;
  width: 100%;
}

.content {
  padding: 0px;
  max-height: 0px;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

.komen{
  resize:none;
  width: 100%;
  color: white;
  border: 1px solid;
  border-color: #2c7062;
  background-color: #10171e;   
}

.komenbtn{
  font-size: 15px;
  margin-top: 10px;
  margin-left: 640px;
  width: 20%;
  background-image: linear-gradient(to right, #11998e, #38ef7d);
  border: none;
  border-radius: 50px;
  text-align: center;
  opacity: 5;
  transition: 0.8s;
}

.komenbtn:hover{
  background-color: #11998e;
  color: white;
}

[contenteditable=true]:empty:before {
  content: attr(placeholder);
  display: block; /* For Firefox */
}

</style>
<body class="">

  <!-- Navbar -->
 <!--  FEBRY ASU tgl 10 batas atas 2-->

  <div class="w3-top" style="background-color: #15202b;">
    <div class="col-30">
      <a href="layout_disparity.php" class="w3-padding-large">
        <img src="disparity_logo.png" style="width:50px;">
      </a>
    </div>
    <div class="col-30">
      <img class="disparity" src="disparity.png">
    </div>
    <div class="col-30">
      <!-- edit Fian 11/09/19 -->
      <?php
        $host = "localhost";
        $username = "root";
        $dbname = "disparity";
        $password = "";
        $con = new mysqli($host, $username, $password, $dbname);
        $cekUser = $_SESSION["id"];
        $stmt = "SELECT * FROM usr WHERE email = '$cekUser'";
        $result = mysqli_query($con, $stmt);
        $user = mysqli_fetch_array($result);
        mysqli_close($con);

        echo '
          <form id="home" method="post" style="position: relative">
            <a href="login.php">
              <img src="logout.png" name="nameLogOut" id="idLogOut" class="w3-right img-responsive" style="width: 90px; position: relative; margin-top: 5px;"> 
            </a>
            <button class = "w3-circle w3-right" name="home" type="submit" value="' . $user['tag'] . '" style="width: 50px;height=50px;padding-top=0px;padding-left=0px;padding-right=0px;padding-bottom=0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px; height:50px; width: 50px; position: relative;">
              <img src="avatar.png" style="width:50px" class="w3-circle w3-right img-responsive">
            </button>
          </form>';

      ?>
    </div>
  </div>
  <!-- End Navbar -->
 <!--  FEBRY ASU tgl 10 batas bawah 2-->

<!--<div class="w3-container w3-content" style="max-width: 100vw; height: 100vh; margin-top: 10px; background-color: #10171e;"> -->
  <div style='height:100vh;background-color: #10171e;' >
  <div><br><br><br><br></div>   
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Column 1 --><div class="w3-col m1">-</div>
    <!--  Column 2-->
    <div class="w3-col m7">

      <!-- FEBRY ASU tgl 10 batas atas 3-->
      <?php 
      $idnya = $_SESSION['id'];
      $con = new mysqli($host, $username, $password, $dbname);
      $stmt = "SELECT * FROM usr WHERE email = '$idnya'";
        
      $result = mysqli_query($con, $stmt);
      $user = mysqli_fetch_array($result);
      if($_SESSION['tag'] == $user['tag']): ?>
      <div class="w3-row-padding">
        <div class="w3-col m12" >
          <div class="w3-card w3-round" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
            <div class="w3-container w3-padding">
              <div class="col-10">
                <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right img-responsive" style="width:60px;"><br>
              </div>
              <div class="col-90">
                
                <!-- UPDATE TONY tgl 10 batas atas 1-->
                <form id="idFormPost" method="post">
                  <p id="idPostP" placeholder="Post Something..." contenteditable="true" class="w3-padding" style=" border: 1px solid; border-color: #2c7062;"></p>
                  <textarea id="idPostTextarea" name="isiPost" style="display:none"></textarea>
                  <div style="text-align: center; vertical-align:center;">
                    <button type="submit" class="postbtn" style="font-size: 14px;">Post</button>
                    <!--UPDATE FEBRY 12 MARET, GAK USA ANCURIN LAGII TON ASU, EDIT AJA SIZE KALO MAU, ANCUR LGI GUA TABOK LU-->
                    <a href="#" class="attach">
                      <img src="attach.png" style="width: 30px; height: 30px; float:right; margin-top:2%; margin-right:2%;">
                    </a>
                    
                  </div>
                </form>
                <!-- UPDATE TONY tgl 10 batas bawah 1-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!-- FEBRY ASU tgl 10 batas bawah 3-->


      <!-- POSTINGAN -->
      <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!-- Update Febry 12 Mar butn trash -->
        <img src="delete_trash.png" class="w3-right w3-margin-right" style="width:15px;">
        <!-- Update Febry 12 Mar butn trash -->
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
        <!-- UPVOTE DOWNVOTE COMMENT 12 maret Febe -->
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
          <img class="img-responsive" src="upvote.png" style="width: 20px; height: 20px;">
        </button>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
          <img class="img-responsive" src="downvote.png" style="width: 20px; height: 20px;">
        </button>
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom collapsible">
         <img class="img-responsive" src="comment.png" style="width: 20px; height: 20px;">
        </button> 
        
        <div class="content" style="background-color: #15202b;">
          <!-- BUAT BAR COMMENT TIAP POST 12 maret Febe-->
          <div>
            <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right img-responsive" style="width:40px; margin-top: 5px; margin-left: 5px;">
            <div style=" border: 1px solid; border-color: #2c7062;">
              <img src="delete_x.png" class="w3-right w3-margin-right w3-margin-top" style="width:15px;">
              ADI
              <br>
              Isi Komennya<br><br>

            </div>
          </div>
          <!-- UPDATE TONY tgl 10 batas atas 2-->
         <form id="idFormComment" method="post" style="padding-top: 10px;">
          <!-- <p id="idCommentP" contenteditable="true" placeholder="Comment Something..." class="w3-padding" style=" border: 1px solid; border-color: #2c7062;"></p> -->
          <textarea id="idCommentTextArea" name="isiComment" placeholder="Write Something..." rows="3" class="komen" maxlength="500" ></textarea>
          <button type="submit" class="postbtn" style="font-size: 14px; margin-bottom: 2%;">Comment</button>
         </form>
         <!-- UPDATE TONY tgl 10 batas bawah 2-->
        </div>
      </div>

    <?php 
      $host = "localhost";
      $username = "root";
      $dbname = "disparity";
      $password = "";

      $con = new mysqli($host, $username, $password, $dbname);

      $idnya = $_SESSION['id'];
      $tagnya = $_SESSION['tag'];
      $queryPribadi = "SELECT * from usr where email='$idnya'";

      $result = mysqli_query($con, $queryPribadi);
      // if (!$check1_res) {
      //     printf("Error: %s\n", mysqli_error($con));
      //     exit();
      // }
      $user = mysqli_fetch_array($result);

      $queryContent = "SELECT * FROM content WHERE tag='$tagnya' ORDER BY contentId DESC";
      $result = $con->query($queryContent);
      
      foreach ($result as $caption):
    ?>
    <!-- yang ini tolong jangan diubah (Daniel) -->
    <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4><?=$user['firstName'];?></h4><br>
        <hr class="w3-clear">
        <p><?=$caption['captionContent'];?></p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom collapsible"><i class="fa fa-comment"></i>  Comment</button> 
        <div class="content" style="background-color: #15202b;">
          ADI<br>
          Isi Komennya<br><br>
          AAN<br>
          Komennya<br><br>
         <form id="idFormComment" method="post">
          <!-- <p id="idCommentP" contenteditable="true" placeholder="Comment Something..." class="w3-padding" style=" border: 1px solid; border-color: #2c7062;"></p> -->
          <textarea id="idCommentTextArea" name="isiComment" placeholder="Write Something..." rows="3" class="komen" maxlength="500" ></textarea>
          <button type="submit" class="postbtn" style="font-size: 14px; margin-bottom: 2%;">Comment</button>
         </form>
        </div>
      </div>
      
      <!-- <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <h4><?=$user['firstName'];?></h4><br>
        <hr class="w3-clear">
        <p><?=$caption['captionContent'];?></p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>   -->
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
                <?php
                  $host = "localhost";
                  $username = "root";
                  $dbname = "disparity";
                  $password = "";

                  $con = new mysqli($host, $username, $password, $dbname);
                  $cekUser = $_SESSION["tag"];
                  $stmt = "SELECT * FROM usr WHERE tag = '$cekUser'";
                  $result = mysqli_query($con, $stmt);
                  $user = mysqli_fetch_array($result);
                  mysqli_close($con);

                  if ( $user["profilePicture"] != null)
                  {
                    echo "<img src='" . $user["profilePicture"] . "' alt='Avatar' style='width:200px; height: 200px;'>";
                  }
                  else
                  {
                    echo '<img src="avatar.png" alt="Avatar" style="width:200px; height: 200px" class="img-responsive" >';
                  }
                ?>
              </div>
              <div class="flip-card-back">
                <!-- isi flipcard disini -->
                <input type="image" src="eye.png" name="view" style="border-radius:100%; width:80px; margin-top:5%;"><br>
                <input type="image" src="camera.jpg" name="camera" style="border-radius:100%; width:80px; margin-top:10%;">
              </div>
            </div>
          </div>
          <!-- <img src="avatar.png" alt="Avatar" style="width:50%; padding-top: 10px;"><br> -->
          <!-- edit Fian 9/03/2019 -->
          <span>
            <?php
              $host = "localhost";
              $username = "root";
              $dbname = "disparity";
              $password = "";

              $con = new mysqli($host, $username, $password, $dbname);
              $cekUser = $_SESSION["tag"];
              $stmt = "SELECT * FROM usr WHERE tag = '$cekUser'";
              $result = mysqli_query($con, $stmt);
              $user = mysqli_fetch_array($result);
              mysqli_close($con);

              echo $user["firstName"] . " " . $user["lastName"];
            ?>
          </span>
          <p style="text-align:left; padding-left: 5px;">
          <!-- edit Fian 9/03/2019 -->
            <?php
              $host = "localhost";
              $username = "root";
              $dbname = "disparity";
              $password = "";
              
              $con = new mysqli($host, $username, $password, $dbname);
              $cekUser = $_SESSION["id"];
              $tagnya = $_SESSION['tag'];
              $stmt = "SELECT * FROM usr WHERE tag='$tagnya'";
              $resultuser = mysqli_query($con, $stmt);
              $user = mysqli_fetch_array($resultuser);

              mysqli_close($con);

              echo "<br>";
              echo "Hello, ";
              echo '<b>' . $user["firstName"] . " " . $user["lastName"] . '</b><br><br>';
              echo "Here " . '<b>' . $user["firstName"] . '</b>' . " Profile: " . '<br>';
              

              echo "Email    : ";
              echo $user["email"] . '<br>';

              echo "Birthday : ";
              echo $user["birthDate"] . '<br>';

              $host = "localhost";
              $username = "root";
              $dbname = "disparity";
              $password = "";
              
              $con = new mysqli($host, $username, $password, $dbname);
              $stmt = "SELECT * FROM usr";
              $connStatus = $con->query($stmt);
              $numberOfRows = mysqli_num_rows($connStatus) - 1;
              mysqli_close($con);

              echo "Friends  : ";
              echo $numberOfRows . " friends";
            ?>
          </p>
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-center" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
        <div class="w3-container">
          <?php
            $host = "localhost";
            $username = "root";
            $dbname = "disparity";
            $password = "";
              
            $con = new mysqli($host, $username, $password, $dbname);
            $stmt = "SELECT * FROM usr";
            $connStatus = $con->query($stmt);
            $numberOfRows = mysqli_num_rows($connStatus) - 1;

            $cekUser = $_SESSION["id"];
            $stmtfriendlist = "SELECT * FROM usr WHERE email != '$cekUser'";
            $resultfriend = mysqli_query($con, $stmtfriendlist);
            $friends = mysqli_fetch_array($resultfriend);

            $result = mysqli_query($con, $stmtfriendlist);

            echo "<br>";
            echo "<table>";
            while($row = mysqli_fetch_assoc($result))
            {
              $friend_firstname = $row['firstName'];
              $friend_lastname = $row['lastName'];
              
                echo "<tr>";
                  echo "<td>";
                    echo '
                    <form id = "id_visit_profile"  method="post" action="visit_profile.php">
                      <button name="name_visit_profile" type="submit" value="' . $row['tag'] . '" style="width: 50px;height=50px;padding-top=0px;padding-left=0px;padding-right=0px;padding-bottom=0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px;">
                        <img src="avatar.png" style="width:50px">
                      </button>
                    </form>';

                    // echo '
                    // <form id = "id_visit_profile"  method="post" action="visit_profile.php">
                    //   </button>
                    //   <input name="name_visit_profile" type="image" src="avatar.png" value="' . $row['tag'] . '" style="width:50px">
                    // </form>';

                  echo "</td>";
                  echo "<td>";
                      echo "<p class=" . '"w3-left"' . "style=" . '"margin-left: 10px; color: white;"' . ">" . $friend_firstname . " " . $friend_lastname . "</p>";
                  echo "</td>";
                echo "</tr>";
                echo "<tr>";
                  echo "<td>";
                    echo "&nbsp;";
                  echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
          ?>
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
     document.getElementById("idPostTextarea").value = document.getElementById("idPostP").innerHTML;
    var dataform = $(this).serialize(); 
    $.ajax({
      url:"save_posting.php",
      type:"post",
      data:dataform,
      success:function(data) {
        if(data == "gagal"){
          alert("Gagal Post");
        } else{
          //alert(data);
          location.reload();
        }
      }
    });
    return false;
  });
});
$(document).ready(function() {
  $("#idFormComment").submit(function() {
     document.getElementById("idCommentTextarea").value = document.getElementById("idCommentP").innerHTML;
    var dataform = $(this).serialize(); 
    $.ajax({
      url:"save_comment.php",
      type:"post",
      data:dataform,
      success:function(data) {
        if(data == "gagal"){
          alert("Gagal Comment");
        } else{
          //alert(data);
          location.reload();
        }
      }
    });
    return false;
  });
});

$(document).ready(function() {
  $("#home").submit(function() {
    var dataform = $(this).serialize(); 
    $.ajax({
      url:"back_to_my_profile.php",
      type:"post",
      data:dataform,
      success:function(data) {
        if(data == "gagal"){
          alert("Gagal Kembali");
        } else{
          //alert(data);
          document.location.href = 'index.php';
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
//DropDown Comment
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
//autosize(document.getElementById("idCommentTextArea"));
</script>

</body>
</html> 