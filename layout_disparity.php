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
.image-upload>input
{
  display: none;
}
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
*{
  box-sizing: border-box;
}
/*tgl 10 batas atas 1*/
body{
  background-color: #10171e;
}
.upload-preview {border-radius:4px;width: 200px;height: 200px;}
#body-overlay {background-color: rgba(0, 0, 0, 0.6);z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
#targetOuter{ 
  position:relative;
  text-align: center;
  background-color: #F0E8E0;
  margin: 20px auto;
  width: 200px;
  height: 200px;
  border-radius: 4px;
}
.btnSubmit {
  background-color: #565656;
  border-radius: 4px;
  padding: 10px;
  border: #333 1px solid;
  color: #FFFFFF;
  width: 200px;
  cursor:pointer;
}
.inputFile{
  margin-top: 0px;
  left: 0px;
  right: 0px;
  top: 0px;
  width: 200px;
  height: 36px;
  background-color: #FFFFFF;
  overflow: hidden;
  opacity: 0;
  position: absolute;
  cursor: pointer;
}
.icon-choose-image {
  position: absolute;
  opacity: 0;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 55px;
  height: 55px;
  cursor:pointer;
}
.icon-choose-image:hover {
  position: absolute;
  opacity: 1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 55px;
  height: 55px;
  cursor:pointer;
}
#profile-upload-option{
  display:none;
  position: absolute;
  top: 163px;
  left: 23px;
  margin-top: -24px;
  margin-left: -24px;
  border: #d8d1ca 1px solid;
  border-radius: 4px;
  background-color: #F0E8E0;
  opacity: 0.9;
  width: 200px;
}
.profile-upload-option-list{
  margin: 1px;
  height: 25px;
  border-bottom: 1px solid #cecece;
  cursor: pointer;
  position: relative;
  padding:5px 0px;
  color: black;
}
.profile-upload-option-list:hover{
  background-color: #fffaf5;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}
/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}
/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}
@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}
/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}
.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}
/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<body>

  <!-- Navbar -->
 <!--tgl 10 batas atas 2-->

  <div class="w3-top" style="background-color: #15202b;">
    <div class="col-30">
      <a href="index.php" class="w3-padding-large">
        <img src="disparity_logo.png" style="width:50px; margin-left: 23%;">
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
        $user0 = mysqli_fetch_array($result);
        mysqli_close($con);
        echo '
          <form id="home" method="post" style="position: relative">
            <a href="login.php">
              <img src="logout.png" name="nameLogOut" id="idLogOut" class="w3-right img-responsive" style="width: 90px; position: relative; margin-top: 5px; margin-right: 23%; margin-left:2%;"> 
            </a>
            <button class = "w3-circle w3-right" name="home" type="submit" value="' . $user0['tag'] . '" style="width: 50px;height=50px;padding-top=0px;padding-left=0px;padding-right=0px;padding-bottom=0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px; height:50px; width: 50px; position: relative;">';
        if ($user0["profilePicture"] != null)
        {
          echo '<img src="' . $user0["profilePicture"] . ' " width=50 height=50 class="w3-circle w3-right img-responsive">
            </button>
          </form>';
        }
        else
        {
          echo '<img src="avatar.png" style="width:50px" class="w3-circle w3-right img-responsive">
            </button>
          </form>';
        }
        echo '<font class="w3-right" color="white" style="margin:15px 3%;">'.$user0['firstName'].'</font>'
      ?>
    </div>
  </div>
  <!-- End Navbar -->
 <!--tgl 10 batas bawah 2-->

<!--<div class="w3-container w3-content" style="max-width: 100vw; height: 100vh; margin-top: 10px; background-color: #10171e;"> -->
  <div style='height:100vh;background-color: #10171e;' >
  <div><br><br><br><br></div>   
  <!-- The Grid -->
  <div class="w3-row" style="margin-top: 30px;">
    <!-- Column 1 --><div class="w3-col m1">-</div>
    <!--  Column 2-->
    <div class="w3-col m7">

      <!--tgl 10 batas atas 3-->
      <?php 
      $idnya = $_SESSION['id'];
      $con = new mysqli($host, $username, $password, $dbname);
      $stmt = "SELECT * FROM usr WHERE email = '$idnya'";
        
      $result = mysqli_query($con, $stmt);
      $user1 = mysqli_fetch_array($result);
      if($_SESSION['tag'] == $user1['tag']): ?>
      <div class="w3-row-padding">
        <div class="w3-col m12" >
          <div class="w3-card w3-round" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
            <div class="w3-container w3-padding">
              <div class="col-10">
                <?php  
                if ($user1["profilePicture"] != null)
                {
                  echo '<img src="' . $user1["profilePicture"] . ' " alt="Avatar" class="w3-left w3-circle w3-margin-right img-responsive" style="width:60px;">
                    </button>
                  </form>';
                }
                else
                {
                  echo '<img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right img-responsive" style="width:60px;">
                    </button>
                  </form>';
                }
                ?>
              </div>
              <div class="col-90">
                
                <!-- UPDATE TONY tgl 10 batas atas 1-->
                <form id="idFormPost" method="post">
                  <p id="idPostP" placeholder="Post Something..." contenteditable="true" class="w3-padding" style=" border: 1px solid; border-color: #2c7062;"></p>
                  <textarea id="idPostTextarea" name="isiPost" style="display:none"></textarea>
                  <div style="text-align: center; vertical-align:center;">
                    <button type="submit" class="postbtn" style="font-size: 14px;">Post</button>
                    <!--12 MARET-->
                   <!--  <a href="#" class="attach">
                      <img src="attach.png" style="width: 30px; height: 30px; float:right; margin-top:2%; margin-right:2%;">
                    </a> -->
                    
                  </div>
                </form>
                <!--tgl 10 batas bawah 1-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!--tgl 10 batas bawah 3-->


      <!-- POSTINGAN -->

    <?php 
      $host = "localhost";
      $username = "root";
      $dbname = "disparity";
      $password = "";
      $con = new mysqli($host, $username, $password, $dbname);
      $idnya = $_SESSION['id'];
      $tagnya = $_SESSION['tag'];
      $queryPribadi = "SELECT * from usr where tag='$tagnya'";
      $result = mysqli_query($con, $queryPribadi);
      // if (!$check1_res) {
      //     printf("Error: %s\n", mysqli_error($con));
      //     exit();
      // }
      $user = mysqli_fetch_array($result);
      $queryContent = "SELECT * FROM content WHERE tag='$tagnya' ORDER BY contentId DESC";
      $result = $con->query($queryContent);
      if (mysqli_num_rows($result)==0){ ?>
      <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
        <span class="center">There is no post yet from this user.</span>
        <hr class="w3-clear">
      </div>
    <?php }
      foreach ($result as $caption): ?>
    <!-- yang ini tolong jangan diubah (Daniel) -->
    <div class="w3-container w3-card w3-round w3-margin" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;"><br>
      <?php  
        if ($user["profilePicture"] != null)
        {
          echo '<img src="' . $user["profilePicture"] . ' " alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            </button>
          </form>';
        }
        else
        {
          echo '<img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
            </button>
          </form>';
        }
      ?>
        <!-- Update Febry 12 Mar butn trash -->
        <?php if($_SESSION['tag'] == $user1['tag']): ?>
          <form method="post" name="nameDeletePost" id="idDeletePost">
            <input type="hidden" name="isiContentId" value="<?=$caption['contentId']?>">
            <input type="image" src="delete_trash.png" class="w3-right w3-margin-right" style="width:15px;">
          </form>
        <?php endif; ?>
        <!-- Update Febry 12 Mar butn trash -->
        <h4><?=$user['firstName'];?></h4><br>
        <hr class="w3-clear">
        <p><?=$caption['captionContent'];?></p>

        <!-- UPVOTE DOWNVOTE COMMENT 12 maret Febe -->
        <!-- <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
          <img class="img-responsive" src="upvote.png" style="width: 20px; height: 20px;">
        </button>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
          <img class="img-responsive" src="downvote.png" style="width: 20px; height: 20px;">
        </button> -->
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom collapsible">
         <img class="img-responsive" src="comment.png" style="width: 20px; height: 20px;">
        </button> 
        
        <div class="content" style="background-color: #15202b;">
          <!-- BUAT BAR COMMENT TIAP POST 12 maret Febe-->
          
              <?php 
              $contentnya = $caption['contentId'];
              $queryContent = "SELECT * FROM comment WHERE contentId='$contentnya'";
              $result2 = $con->query($queryContent);
              
              foreach ($result2 as $comment):
                $tag2 = $comment['tag'];
                $queryNamaKomen = "SELECT * FROM usr WHERE tag='$tag2'";
                $result3 = $con->query($queryNamaKomen); ?>

                <div>
                  
                  <?php foreach ($result3 as $orang): ?>
                  <div style=" border: 1px solid; border-color: #2c7062;">
                  <?php if($_SESSION['tag'] == $user1['tag'] || $user0['tag'] == $orang['tag']): ?>
                  <form method="post" name="nameDeleteComment" id="idDeleteComment">
                    <input type="hidden" name="isiCommentId" value="<?=$comment['commentId']?>">
                    <input type="image" src="delete_x.png" class="w3-right w3-margin-right w3-margin-top" style="width:15px;">
                  </form>
                  <?php endif; ?>
                  
                  <?php  
                  if ($orang["profilePicture"] != null)
                  {
                    echo '<img src="' . $orang["profilePicture"] . ' " alt="Avatar" class="w3-left w3-circle w3-margin-right img-responsive" style="width:40px;  height:40px; margin-top: 15px; margin-left: 15px;">
                      </button>
                    </form>';
                  }
                  else
                  {
                    echo '<img src="avatar.png" alt="Avatar" class="w3-left w3-circle w3-margin-right img-responsive" style="width:40px; height:40px; margin-top: 5px; margin-left: 5px;">
                      </button>
                    </form>';
                  }
                  ?>
                
                  <?=$orang['firstName'] . " " . $orang['lastName'];
                endforeach; ?>
              <br>
              <?= $comment['commentText'] ?><br><br>
                  </div>
                </div>

              <?php endforeach; ?>
                <form id="idFormComment" name="nameFormComment" method="post" style="padding-top: 10px;">
                  <textarea id="idCommentTextArea" name="isiComment" placeholder="Write Something..." rows="3" class="komen" maxlength="500" ></textarea>
                  <input type="hidden" name="idKonten" value="<?= $contentnya ?>"></input>
                  <button type="submit" class="postbtn" style="font-size: 14px; margin-bottom: 2%;">Comment</button>
                </form>
        </div>
      </div>
  <?php endforeach; ?>  

    <!-- End Column 2 -->
    </div>
    
    <!-- Column 3-->
    <div class="w3-col m3">
      
      <div class="w3-card w3-round w3-center" style="background-color: #15202b; color: white; border: 1px solid; border-color: #2c7062;">
        <div class="w3-container">
          <div class="w3-col m12">
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
              if($_SESSION["id"]==$user["email"])
              {
            ?>
            <form id='idUploadForm' action='upload_profile.php' method='post' enctype="multipart/form-data">
                <div id="targetOuter">
                  <div id="targetLayer"><?php 
                    if ( $user["profilePicture"] != null)
                      { 
                        echo "<img id='myImg' src ='" . $user["profilePicture"] . "' alt='Avatar' style='width:200px; height: 200px;' class='upload-preview'>"; ?> 
                        <?php 
                      } else 
                      {
                        ?>
                        <img id="myImg" src='avatar.png' alt='Avatar' style='width:200px; height: 200px;'>
                    <?php } ?>
                  </div>
                  <!-- MODAL IMAGE FULLSCREEN -->
                  <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
          <!-- MODAL IMAGE FULLSCREEN -->
                  <div class="icon-choose-image" onClick="showUploadOption()">
                    <img src="edtProfile_4.png" class="icon-choose-image"/>
                  </div>
                  <div id="profile-upload-option">
                    <div class="profile-upload-option-list">
                      <input name="fileToUpload" type="file" class="inputFile" onChange="showPreview(this);"></input>
                      <span>Upload</span>
                    </div>
                    <div class="profile-upload-option-list" id="myView">View</div>
                    <div class="profile-upload-option-list" onClick="hideUploadOption();">Cancel</div>
                  </div>
                </div>
                <div>
                  <input type="submit" value="Upload Image" name="submit" class="btnSubmit" onClick="hideUploadOption();"/>
                </div>
                &nbsp;
            </form>
            <?php }
            else { ?>
            <form id='idUploadForm' action='upload_profile.php' method='post' enctype="multipart/form-data">
                <div id="targetOuter">
                  <div id="targetLayer"><?php 
                    if ( $user["profilePicture"] != null)
                      { 
                        echo "<img id='myImg' src ='" . $user["profilePicture"] . "' alt='Avatar' style='width:200px; height: 200px;' class='upload-preview'>"; ?> 
                        <?php 
                      } else 
                      {
                        ?>
                        <img id="myImg" src='avatar.png' alt='Avatar' style='width:200px; height: 200px;'>
                    <?php } ?>
                  </div>
                  <!-- MODAL IMAGE FULLSCREEN -->
                  <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
          </div>
          <!-- MODAL IMAGE FULLSCREEN -->
                  <div class="icon-choose-image" onClick="showUploadOption()">
                    <img src="edtProfile_4.png" class="icon-choose-image" style="width: 130%; height: 130%;"/>
                  </div>
                  <div id="profile-upload-option">
                    
                    <div class="profile-upload-option-list" id="myView">View</div>
                    <div class="profile-upload-option-list" onClick="hideUploadOption();">Cancel</div>
                  </div>
                </div>
                
                &nbsp;
            </form>
            <?php } ?>
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
              echo "Gender : ";
              echo $user["gender"] . '<br>';
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
      <?php 
      if ($numberOfRows>0):?>
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
                  echo "<script type='text/javascript'>" . $user["profilePicture"] . ";</script>";
                  if ( $row["profilePicture"] != null)
                  {
                    echo '
                    <form id = "id_visit_profile"  method="post" action="visit_profile.php">
                      <button name="name_visit_profile" type="submit" value="' . $row['tag'] . '" style="width: 50px;height=50px;padding-top=0px;padding-left=0px;padding-right=0px;padding-bottom=0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px;">
                        <img src="' . $row["profilePicture"]. '" style="width:50px">
                      </button>
                    </form>';
                  }
                  else
                  {
                    echo '
                    <form id = "id_visit_profile"  method="post" action="visit_profile.php">
                      <button name="name_visit_profile" type="submit" value="' . $row['tag'] . '" style="width: 50px;height=50px;padding-top=0px;padding-left=0px;padding-right=0px;padding-bottom=0px;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;padding-right: 0px;border-top-width: 0px;border-left-width: 0px;border-bottom-width: 0px;border-right-width: 0px;">
                        <img src="avatar.png" style="width:50px">
                      </button>
                    </form>';
                  }
                    
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
      <?php endif; ?>
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
  $("#uploadForm").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "upload.php",
      type: "POST",
      data:  new FormData(this),
      beforeSend: function(){$("#body-overlay").show();},
      contentType: false,
      processData:false,
      success: function(data)
      {
      $("#targetLayer").css('opacity','1');
      setInterval(function() {$("#body-overlay").hide(); },500);
      },
      error: function() 
      {
      }           
     });
  }));
  $("form[name='nameFormComment']").submit(function() {
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
  $("form[name='nameDeletePost']").submit(function() {
    var dataform = $(this).serialize(); 
    $.ajax({
      url:"delete_post.php",
      type:"post",
      data:dataform,
      success:function(data) {
        if(data == "gagal"){
          alert("Gagal Menghapus");
        } else{
          //alert(data);
          location.reload();
        }
      }
    });
    return false;
  });
  $("form[name='nameDeleteComment']").submit(function() {
    var dataform = $(this).serialize(); 
    $.ajax({
      url:"delete_comment.php",
      type:"post",
      data:dataform,
      success:function(data) {
        if(data == "gagal"){
          alert("Gagal Menghapus");
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
function showUploadOption(){
  $("#profile-upload-option").css('display','block');
}
function hideUploadOption(){
   $("#profile-upload-option").css('display','none');
}
function showPreview(objFileInput) {
  hideUploadOption();
  if (objFileInput.files[0]) {
    var fileReader = new FileReader();
    fileReader.onload = function (e) {
      $("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
      $("#targetLayer").css('opacity','0.7');
      $(".icon-choose-image").css('opacity','0.5');
    }
    fileReader.readAsDataURL(objFileInput.files[0]);
  }
}
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var img2 = document.getElementById('myImg');
var view = document.getElementById('myView');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
view.onclick = function(){
  modal.style.display = "block";
  modalImg.src = img.src;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
  hideUploadOption();
}
</script>

</body>
</html> 