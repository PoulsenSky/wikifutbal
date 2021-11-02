<?php
	SESSION_START();
	
		if(!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}
?>

<DOCTYPE html>
	<html lang="ja">
		<head>
			<title> Choose </title>
			    <meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="css/css.css">
    			<link rel="stylesheet" href="css/bootstrap.min.css">
    			<style>
    				input[type=text], input[type=password] {
					  width: 60%;
					  padding: 15px;
					  margin: 5px 0 22px 0;
					  display: inline-block;
					  border: none;
					  background: #f1f1f1;
					}

					body {
						background-image: url("Pictures/Wallpaper2.jpg");
						background-position: center;
						background-size: cover;
					}

					#card {
					        background: #fbfbfb;
					        border-radius: 10px;
					        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
					        height: 410px;
					        margin: 12rem auto 8.1rem auto;
					        width: 1000px;
					        opacity: 99%;
					}

					.buttonlgn {
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
			<img class="logo_int" src="Pictures/logo.png" width="45px" height="50px" cellpadding="30"> <a class="navbar-brand" href="index.php" style="font-family:Azonix; padding-left: 10px; color: white;"> Wikifutbal </a>
			  <div class="container">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="fontonly">
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="index.php" style="color: white;"> Home | <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="choose.php" style="color: white;"> Add Data | </a>
			    </div>
				 <form class="form-inline my-2 my-lg-0">
				  <div class="navbar-nav" style="padding-left:20px;">
					<button class="btn btn-outline-dark my-2 my-sm-0"> <a class="nav-item nav-link" href="logout.php" style="color:white;"> Logout </a> </button>
				  </div>
			    </form>
			  </div>
			  </div>
			  </div>
			</nav>


				<center>
					<div id="card">
					<br> <br> <h3 style="font-family: Azonix; color: black;"> Choose 2 Option to add the data! </h3> <hr style="width:43%;"> <br>
<div class="container">
		<div class="row">
   			<div class="col text-center">
			  <a href="adding.php"> <img src="Pictures/player.jpg" class="float-left" alt="Player" width="400" height="236" style="padding-left: 40px;"></a> 
			  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			  <p> <h4 style="padding-right:40px;"> <hr style="width:86%"> - Player - </h4> </p> </div>

			 <div class="col text-center">
			  <a href="adding2.php"> <img src="Pictures/coach.jpg" class="float-right" alt="Coach" width="400" height="236" style="padding-right: 40px;"> </a> 
			  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			  <p> <h4 style="padding-left:40px;"> <hr style="width:86%"> - Coach/Manager - </h4> </p> </div>
		</div>
	</div>
				</center>

			    <script src="Javascript/jquery-3.4.1.slim.min.js"></script>
    			<script src="Javascript/popper.min.js"></script>
   				<script src="Javascript/bootstrap.min.js"></script>
		</body>
	</html>