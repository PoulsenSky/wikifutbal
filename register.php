<?php
	require 'function.php';
	if(isset($_POST["submit"])) {
		if(register($_POST) > 0) {
			print "<script> alert('You've registered your Account!');
			</script>";
		} 
			else {
			print mysqli_error($Connection);
		}
	}
?>

<DOCTYPE html>
	<html>
		<head>
			<title> Register </title>
			    <meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="css/css.css">
    			<link rel="stylesheet" href="css/bootstrap.min.css">
    			<style>
    				input[type=text], input[type=password] {
					  width: 60%;
					  padding: 15px;
					  margin: 1px 0 2px 0;
					  border: none;
					  background: #f1f1f1;
					}

					body {
						background-image: url("Pictures/Wallreg.jpg");
						background-position: center;
						background-size: cover;
					}

					#card {
					        background: #fbfbfb;
					        border-radius: 10px;
					        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
					        height: 550px;
					        margin: 12rem auto 8.1rem auto;
					        width: 1000px;
					        opacity: 99%;
					}

					a {
						color: red;
					}

					.buttonrgt {
						background-color: #FF0000;
						color: white;
						padding: 10px 20px;
						margin: 1px 0;
						border: none;
						cursor: pointer;
						width: 30%;
						opacity: 100%;
						border-radius: 10px;	
					}
    			</style>
		</head>
		<body>
			<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-danger">
			<img class="logo_int" src="Pictures/logo.png" width="45px" height="50px" cellpadding="60"> <a class="navbar-brand" href="index.php" style="font-family:Azonix; padding-left: 10px; color:white;"> Wikifutbal </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="fontonly">
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav" >
			      <a class="nav-item nav-link" href="register.php" style="color: white;"> Register | 
			      	<span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="login.php" style="color: white;"> Login | </a>
			    </div>
			  </div>
			  </div>
			</nav>
				<center>

					<div id="card">
					<br> <br> <h3 style="font-family: Azonix; color: black;"> Register Here! </h3> <hr style="width:58%;">


			<form action="" method="POST">

				<p> <h4 style="padding-right: 529px;"> Email : </h4>
					<input type="text" name="email" placeholder="Insert your Email..."  autocomplete="off" required> </p>

				<p> <h4 style="padding-right: 490px;"> Username : </h4>
					<input type="text" name="username" id="username" placeholder="Insert your Username..."  autocomplete="off" required></p>

				<p> <h4 style="padding-right: 495px;"> Password : </h4>
					<input type="password" name="password" id="password" placeholder="Insert your Password..."   autocomplete="off" required> </p>

				<p> <h4 style="padding-right: 430px;"> Confirm Password: </h4>
					<input type="password" name="password2" id="password2" placeholder="Confirm your Password..."  autocomplete="off" required> </p> <hr style="width:60%;">

				<p> By creating the account, you have agree to our <a href="#"> Terms & Privacy </a> </p>
				<p> <button type="submit" name="submit" class="buttonrgt"> Register Me!</button> </p>
			</form>
				</div>
				</center>

			    <script src="Javascript/jquery-3.4.1.slim.min.js"></script>
    			<script src="Javascript/popper.min.js"></script>
   				<script src="Javascript/bootstrap.min.js"></script>
		</body>
	</html>