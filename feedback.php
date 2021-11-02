<?php
	SESSION_START();
	
		if(!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}
	require 'function.php';

	if(isset($_POST["submit"])) {
		if(feedback($_POST)) {
			echo "<script> alert('Your Feedback has been sent!');
							location.href='feedback.php';
						</script>";
			} else {
			echo "<script> alert('The Feedback does not saving.....');
							location.href='feedback.php';
						</script>";
		}
	}
?>

<DOCTYPE html>
	<html lang="ja">
		<head>
			<title> Feedback </title>
			    <meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="css/css.css">
    			<link rel="stylesheet" href="css/bootstrap.min.css">
    			<style>

    				.bground {
						background: url("Feedback/main.jpg");
						background-repeat: no-repeat;
						background-size: cover;
						color:black;
					}

					#mainshow {
						opacity:100%;
					}

    				.buttonlgn {
						background-color: #092676;
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
						background-color: #092676;
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
						background-color: #092676;
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
					<button class="btn btn-outline-dark my-2 my-sm-0"> <a class="nav-item nav-link" href="../../logout.php" style="color:white;"> Logout </a> </button>
				  </div>
			    </form>
			  </div>
			  </div>
			  </div>
			</nav>

<div class="bground"> <br>
	<div class="container text-center"> <br> <br> <br>  <br> <br>
		<div class="mainshow">
    <img src="Feedback/Feedback-icon-715x715.png" width="300">
	<br> <br>
    <h1 class="display-4" style="font-family: Azonix;" id="mainshow" style="opacity:100%;"> Feedback </h1>
    <p class="lead" style="font-family: Azonix;"> Here where you can give a comment anything about football as like discussion room! </p>
	<br> <br>
			</div>
		</div>
	</div>

<br> <br>
		<center>
			<form action="" method="POST">
			  <div class="form-group row" style="width:90%;">
			    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"> Your Name </label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control form-control-lg" id="anonim" name ="anonim" placeholder="Input your name">
			    </div>
			  </div>
			  <div class="form-group row" style="width:90%;">
			    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"> Feedback </label>
			    <div class="col-sm-10">
			      <textarea type="text" class="form-control form-control-lg" id="comment" name="comment" placeholder="Give us a comment!"></textarea>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-danger btn-lg" name="submit"> <center> Comment! </center> </button>
			  <button type="button" class="btn btn-danger btn-lg"> <a href="showfeed.php"> <center> Show Feedbacks </center> </a> </button>
			</form>
		</center>


  	 <br>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
	<div class="backgroundMain">
    <h1 class="display-4" style="font-family: Azonix;"> A Message at the Future </h1>
	<br>
	<h5 style="font-style:italic;"> <center> “Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.” <br> <b> -Pele </b></center>   </h5>
	<hr class="my-4">
    <p class="lead" style="align=left;"> "Gradually, this website will always be developed optimally and with the support of users who access this website, it is hoped that it will become a means of motivation for the website maker to be more enthusiastic in improving information and communication technology about football." <br> <b> <i> -Putera Fradhana Caeshandra (09021281924085) </i> </b> </p>
												<br>
	</div>
	</div>
</div>


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

			    <script src="../Javascript/jquery-3.4.1.slim.min.js"></script>
    			<script src="../Javascript/popper.min.js"></script>
   				 <script src="../Javascript/bootstrap.min.js"></script>
		</body>
	</html>