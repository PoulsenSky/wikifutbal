<?php

	SESSION_START();
	require 'function.php';
	
	if(!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}

?>

<DOCTYPE html>
	<html lang="ja">
		<head>
			<title> League </title>
			    <meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="css/css.css">
    			<link rel="stylesheet" href="css/bootstrap.min.css">
    			    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="BootstrapBeta/dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    			<style>

    				.bground {
						background: url("Pictures/Main.jpg");
						background-repeat: no-repeat;
						background-size: cover;
						color:black;
					}

					#mainshow {
						opacity:100%;
					}

    				.buttonlgn {
						background-color: #FF0000;
						color: white;
						padding: 10px 20px;
						margin: 1px 0;
						border: none;
						cursor: pointer;
						width: 8%;
						opacity: 100%;
						border-radius: 10px;
					}

					.buttonadd {
						background-color: #FF0000;
						color: white;
						padding: 10px 20px;
						margin: 1px 0;
						border: none;
						cursor: pointer;
						width: 10%;
						opacity: 100%;
						border-radius: 10px;
					}

					.buttonadd2 {
						background-color: #FF0000;
						color: white;
						padding: 4px 20px;
						margin: 1px 0;
						border: none;
						cursor: pointer;
						width: 5%;
						opacity: 100%;
						border-radius: 5px;
					}

					a:link, a:visited{
					  color: white;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
					}

					#colorlink{
					  color: black;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
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
			      <a class="nav-item nav-link" href="league.php" style="color: white;"> All Leagues | </a>
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

<br> <br> <br>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="Pictures/Clubs/Premier.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/Clubs/Ligue 1.png" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/Clubs/Bundesliga.jpg" alt="Third slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/Clubs/Serie A.jpg" alt="Fourth slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/Clubs/La Liga.jpg" alt="Fifth slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

<hr style="width:90%">
<div class="container">
  <div class="row">
    <div class="col text-center">
      <h2 style="font-family: Azonix;"> Choose the League </h2> <hr>
    </div>
  </div>
  
  <br>

  <div class="row">
    <div class="col text-center">
	<a href="League/Premier/premier.php"> <img src="Pictures/League/Premier.png"  height="150px"> </a>
	<br>
	<br> <hr>
	<h3> Premier League </h3> <br>
    </div>

     <div class="col text-center">
	  <img src="Pictures/League/Ligue.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Ligue 1 </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Bundesliga.png" height="150px">
		<br>
		<br> <hr>
		<h3> Bundesliga </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Serie.jpg" height="150px">
		<br>
		<br> <hr>
		<h3> Serie A </h3>	<br>  
    </div>
	
    <div class="col text-center">
	<a href="League/La Liga/la liga.php"> <img src="Pictures/League/La Liga.png" height="150px"> </a>
		<br>
		<br> <hr>
		<h3> La Liga </h3>	<br>
    </div>
  </div>

  <br>

    <div class="row">
    <div class="col text-center">
	<img src="Pictures/League/Eredivisie.png" height="150px">
	<br>
	<br> <hr>
	<h3> Eredivisie </h3> <br>
    </div>

     <div class="col text-center">
	  <img src="Pictures/League/Nos.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Liga Nos </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Denmark.jpg"  height="150px">
		<br>
		<br> <hr>
		<h3> Danish Superliga </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Jupiler.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Jupiler Pro League </h3>	<br>  
    </div>
	
    <div class="col text-center">
	<img src="Pictures/League/Championship.jpg" height="150px">
		<br>
		<br> <hr>
		<h3> EFL Championship </h3>	<br>
    </div>
  </div>

    <br>

    <div class="row">
    <div class="col text-center">
	<a href="League/Scottish/scottish.php"> <img src="Pictures/League/Scottish.png"  height="150px"> </a>
	<br>
	<br> <hr>
	<h3> Scottish Premier League </h3> <br>
    </div>

     <div class="col text-center">
	  <img src="Pictures/League/Russia.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Russia Premier Liga </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Bundes.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Austrian Bundesliga </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Superlig.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Superlig </h3>	<br>  
    </div>
	
    <div class="col text-center">
	<img src="Pictures/League/MLS.png"  height="150px">
		<br>
		<br> <hr>
		<h3> Major League Soccer </h3>	<br>
    </div>
  </div>

      <br>

    <div class="row">
    <div class="col text-center">
	<img src="Pictures/League/Superliga.png" height="150px">
	<br>
	<br> <hr>
	<h3> Superliga Argentina </h3> <br>
    </div>

     <div class="col text-center">
	  <a href="League/Liga 1/liga.php"> <img src="Pictures/League/Liga 1.png"  height="150px"> </a>
		<br>
		<br> <hr>
		<h3> Liga 1 </h3>	<br>  
    </div>

    <div class="col text-center">
	  <a href="League/J1/jleague.php"> <img src="Pictures/League/J.png"  height="150px"> </a>
		<br>
		<br> <hr>
		<h3> J1 League </h3>	<br>  
    </div>

    <div class="col text-center">
	  <img src="Pictures/League/Al.png"  height="150px">
		<br>
		<br> <hr>
		<h3> A-League </h3>	<br>  
    </div>
	
    <div class="col text-center">
	<img src="Pictures/League/CSL.jpg" height="150px">
		<br>
		<br> <hr>
		<h3> Chinese Super League </h3>	<br>
    </div>
  </div>

</div>
<br> <br>

<footer class="footer text-center" style="width:100%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4" style="font-family:azonix; color: white;"> Attention: </h4>
          <p class="lead mb-0" style="color:white;"> This website is only a pre-test for using free hosting website. </p>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4" style="font-family:azonix; color: white;"> Created By: </h4>
		  <h6 style="color: white;"> Putera Fradhana Caeshandra <br> 09021281924085 </h6>
        </div>
		<br>

        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4" style="font-family:azonix; color: white;">About Website: </h4>
          <p class="lead mb-0" style="color:white;"> This website is designed as the requirement to complete the Final Exam of Programming Web II <br>
           </p>
        </div>
      </div>
    </div>
  </footer>

			    <script src="Javascript/jquery-3.4.1.slim.min.js"></script>
    			<script src="Javascript/popper.min.js"></script>
   				 <script src="Javascript/bootstrap.min.js"></script>
   				     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
	</html>