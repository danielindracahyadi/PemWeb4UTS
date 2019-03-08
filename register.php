<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="register.css">
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

	<div style="margin: 25px">
	
	<div id="modalRegister">
		<div class="modal-dialog">
		  <form class="modal-content animate" method="post" id="formModalRegister">
			<div class="imgcontainer">
				<img src="disparity_logo_full.png" alt="Avatar" class="avatar">
			</div>
		    <div class="container" style="text-align:center; color:white;">
				<input type="text" placeholder="First Name" name="fnameReg" class="input" style="width:49%" required>
				<input type="text" placeholder="Last Name" name="lnameReg" class="input" style="width:49%" required>
				<input type="email" placeholder="Email" name="emailReg" class="input" required>
				<input type="password" placeholder="Password" name="pswReg" class="input" required>
				<input type="date" name="bdayReg" required>
				<input type="radio" name="genderReg" value="male"> Male
				<input type="radio" name="genderReg" value="female"> Female
				<div style="margin-top: 20px;">
					<button type="submit" class="regisbtn">Register</button>
					<a href="login.php">
						<button type="button" class="cancelbtn">Cancel</button>
					</a>
				</div>   
		    </div>
		  </form>
		</div>
	</div>
	</div>
<script>
	$(document).ready(function() {
		$("#formModalRegister").submit(function() {
			var dataform = $(this).serialize();
			$.ajax({
				url:"action_register.php",
				type:"post",
				data:dataform,
				success:function(data) {
					alert(data);
					document.location.href = 'login.php';
				}
			});
			return false;
		});

	});

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