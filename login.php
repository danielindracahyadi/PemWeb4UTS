<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<style>
		body {
			background-color: #10171e;
			font-family: Arial, Helvetica, sans-serif;
		}
	</style>
</head>
<body>
	<?php require 'awal.php'?>
	<div style="margin: 25px">

	<div id="modalLogin">
		<div class="modal-dialog">
		  <form class="modal-content animate" action="layout_disparity.php" method="post" id="formModalLogin">
			<div class="imgcontainer">
				<img src="disparity_logo_full.png" alt="Avatar" class="avatar">
			</div>
		    <div class="container">
				<label for="uname" style="color:white;"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" class="input" required>

				<label for="psw" style="color:white;"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" class="input" required>
		        
				<div style="margin-top: 20px;">
					<button type="submit" onclick="document.getElementById('id01').style.display='none'" class="loginbtn">Login</button>
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="signupbtn" href="#modalRegister" data-toggle="modal" data-dismiss="modal">Register</button>
				</div>   
		    </div>
		  </form>
		</div>
	</div>

	<div id="modalRegister" class="modal hide">
		<div class="modal-dialog">
		  <form class="modal-content animate" action="layout_disparity.php">
			<div class="imgcontainer">
				<img src="disparity_logo_full.png" alt="Avatar" class="avatar">
			</div>
		    <div class="container">
				<label for="uname" style="color:white;"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" class="input" required>

				<label for="psw" style="color:white;"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" class="input" required>
		        
				<div style="margin-top: 20px;">
					<button type="submit" onclick="document.getElementById('id01').style.display='none'" class="loginbtn">Register</button>
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="signupbtn" href="#modalLogin" data-toggle="modal" data-dismiss="modal">Cancel</button>
				</div>   
		    </div>
		  </form>
		</div>
	</div>

	</div>

<script>
	$(document).ready(function() {

		$("#formModalLogin").submit(function() {
			var dataform = $(this).serialize();
			
			$.ajax({
				url:"action_modalLogin.php",
				type:"post",
				data:dataform,
				success:function(data) {
					if(data == "gagal"){
						alert("Email or Password not exist.");
					} else{
						//alert(data);
						//location.reload()
						 document.location.href = 'layout_disparity.php';
					}
				}
			});
			return false;
		});

		$("#formModalRegister").submit(function() {
			var dataform = $(this).serialize();
			
			$.ajax({
				url:"action_register.php",
				type:"post",
				data:dataform,
				success:function(data) {
					if(data == "gagal"){
						alert("Email or Password not exist.");
					} else{
						//alert(data);
						location.reload()
					}
				}
			});
			return false;
		});
	});

	function funcLogOut(){
			$.ajax({
				url:"action_logout.php",
				type:"GET",
				success:function(data) {
					location.reload();
				}
			});
		}

	function funcRegister(){
		$.ajax({
			url:"action_register.php",
			type:"GET",
			success:function(data) {
				alert(data);
				//location.reload();
			}
		});
	}

	function reload(){
		location.reload();
	}

	var modal = document.getElementById('modalLogin');
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}

</script>

</body>
</html>
