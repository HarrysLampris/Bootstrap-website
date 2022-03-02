<?php 

	session_start();
	
	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}


?>

<html>

<head>

	<title>Login Page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--  -->
	<link rel="stylesheet" href="log-css.css">
	
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!--  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	
</head>

<body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
		integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
		crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css">

	<!--Navigation bar-->
	<?php 
		include 'nav.php';
	?>

	<center>
		<div id="flog">
			<form action="login.php" method="POST">
				<!-- <div class="imgcontainer">
    					<img src="img_avatar2.png" alt="Avatar" class="avatar">
  				</div> -->
				<div class="container-login">
					<h2>Login</h2>
					<p>Please fill your username and password!</p>
					<label for="uname"><b>Username</b></label>
					<span class="input-group-text"><i class="fas fa-user"></i>
						<input type="text" placeholder="Enter Email" id="username" name="username" required></span>

					<label for="psw"><b>Password</b></label>
					<span class="input-group-text"><i class="fas fa-key"></i>
						<input type="password" placeholder="Enter Password" id="password" name="password" required>
					</span>
					<hr>
					<button type="button" name="button" id="login">Login</button>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="sign_up.php" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Forgot your password?</a>
					</div>
					<br>
				</div>
			</form>
		</div>
	</center>

	<script>
		$(function () {
			$('#login').click(function (e) {

				var valid = this.form.checkValidity();

				if (valid) {
					var username = $('#username').val();
					var password = $('#password').val();
				}

				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'jslogin.php',
					data: { username: username, password: password },
					success: function (data) {
						alert(data);
						if ($.trim(data) === "1") {
							setTimeout(' window.location.href = "index.php"', 1000);
						}
					},
					error: function (data) {
						alert('There were errors while doing the operation.');
					}
				});
			});
		});
	</script>
<br>
<br>
<br>
</body>


<!--footer-->
<?php 
	include 'footer1.php';
?>

</html>