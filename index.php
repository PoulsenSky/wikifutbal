<?php

	SESSION_START();
	require 'function.php';
	
	if(!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}

	$player = query("SELECT * FROM player");
	$coach = query("SELECT * FROM coach");
	
	if(isset($_POST['submit'])) {
		$player = search($_POST['search']);
	}

	if(isset($_POST['submit'])) {
		$coach = search2($_POST['search2']);
	}
?>

<DOCTYPE html>
	<html lang="ja">
		<head>
			<title> Main Menu </title>
			    <meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="css/css.css">
    			<link rel="stylesheet" href="css/bootstrap.min.css">
    			<liml rel="icon" href="favicon.ico">
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
			      <img class="d-block w-100" src="Pictures/liverpool.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/mu.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/sufc.jpg" alt="Third slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/city.jpg" alt="Fourth slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="Pictures/chelsea.jpg" alt="Fifth slide">
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

<div class="bground"> <br>
	<div class="container text-center"> <br> <br> <br>
		<div class="mainshow">
    <img src="Pictures/logo.png" width="300">
	<br> <br>
    <h1 class="display-4" style="font-family: Azonix;" id="mainshow" style="opacity:100%;"> Wikipedia for Football (Wikifutbal) </h1>
    <p class="lead" style="font-family: Azonix;"> Welcome to Wikifutbal! </p>
    <p class="lead" style="font-family: Azonix;"> A place where you'll able to add your favorite players/coaches with your own way in this website! </p>
	<br> <br>
			</div>
		</div>
	</div>

<br> <br>
  		<center>
  		<h2 style="font-family: azonix;"> <b> Data of Players & Coach </b> </h2>
  		<br>
  		<button type="button" name="submit" class="buttonadd" id="linkadd"> <a href="adding.php"> Add Players Here! </a> </button>
				<form action="" method="POST"> <br>
				<input type="text" name="search" placeholder="Input the key" autofocus>
				<button name="submit" class="buttonadd2"> Search </button>
		</form>
  	<table border="10" cellspacing="50" cellpadding="20" width="95%" style="border-color: red;">

  		<tr>
  			<th> ID </th>
  			<th> Name </th>
  			<th> Nationality </th>
  			<th> Date of Birth </th>
  			<th> Club </th>
  			<th> Position </th>
  			<th> Special Skill </th>
  			<th> Option </th>
  		</tr>

  		<?php foreach ($player as $p) { ?>
  		<tr>
  			<td> <?= $p["id"]?> </td>
  			<td> <?= $p["name"]?> </td>
  			<td> <?= $p["nationality"]?> </td>
  			<td> <?= $p["birth"]?> </td>
  			<td> <?= $p["club"]?> </td>
  			<td> <?= $p["position"]?> </td>
  			<td> <?= $p["special"]?> </td>
  			<td>
  				<b> <a href="deleting.php?id= <?= $p["id"]?>" onclick="return confirm('This data will be deleted. Continue?');" id="colorlink"> DELETE </a> | </b>
  				<b> <a href="editing.php?id=<?= $p["id"] ?>" id="colorlink"> EDIT </a> </b>
  			</td>
  		</tr>
  	<?php } ?>
  	</table>
  	  		</center>
  	  		<br> <hr style="width:90%"> <br>
  	  		<center>
  	   		<p> <button type="button" name="submit" class="buttonadd" id="linkadd"> <a href="adding2.php"> Add Coaches Here! </a> </button> </p>
  	   		<form action="" method="POST">
				<input type="text" name="search2" placeholder="Input the key" autofocus>
				<button name="submit" class="buttonadd2"> Search</button> </form>
  	<table border="10" cellspacing="50" cellpadding="20" width="95%" style="border-color: red;">

  		<tr>
  			<th> ID </th>
  			<th> Name </th>
  			<th> Nationality </th>
  			<th> Date of Birth </th>
  			<th> Club Managed </th>
  			<th> Option </th>
  		</tr>

  		<?php foreach ($coach as $c) { ?>
  		<tr>
  			<td> <?= $c["id"]?> </td>
  			<td> <?= $c["namec"]?> </td>
  			<td> <?= $c["nationalityc"]?> </td>
  			<td> <?= $c["birthc"]?> </td>
  			<td> <?= $c["manage"]?> </td>
  			<td syle="color:black;"> 
  				<b> <a href="deleting2.php?id= <?= $c["id"]?>" onclick="return confirm('This data will be deleted. Continue?');" id="colorlink"> DELETE </a> | </b>
  				<b> <a href="editing2.php?id=<?= $c["id"] ?>" id="colorlink"> EDIT </a> </b>
  			</td>
  		</tr>
  	<?php } ?>
  	</table>
  	  		</center> <br> <hr>

  	 <br>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
	<div class="backgroundMain">
    <h1 class="display-4" style="font-family: Azonix;"> What is Football? </h1>
	<br>
	<h5 style="font-style:italic;"> <center> “I never really felt I’d end up at Arsenal or Barcelona” he says. “Did I walk around thinking that? No. I think I knew myself what my level was. I gave it my best and I knew where I was compared to the top players.” <br> ― Lewin Nyatanga <a href = "https://www.planetfootball.com/in-depth/lewin-nyatanga-i-know-a-lot-of-footballers-who-hate-football/" style="color: red;"> (More Read) </center>  </a> </h5>
	<hr class="my-4">
    <p class="lead" style="align=left;"> Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal. Unqualified, the word football normally means the form of football that is the most popular where the word is used. Sports commonly called football include association football (known as soccer in some countries); gridiron football (specifically American football or Canadian football); Australian rules football; rugby football (either rugby union or rugby league); and Gaelic football. These various forms of football share to varying extent common origins and are known as football codes.

	There are a number of references to traditional, ancient, or prehistoric ball games played in many different parts of the world. Contemporary codes of football can be traced back to the codification of these games at English public schools during the 19th century. The expansion and cultural influence of the British Empire allowed these rules of football to spread to areas of British influence outside the directly controlled Empire. By the end of the 19th century, distinct regional codes were already developing: Gaelic football, for example, deliberately incorporated the rules of local traditional football games in order to maintain their heritage. In 1888, The Football League was founded in England, becoming the first of many professional football competitions. During the 20th century, several of the various kinds of football grew to become some of the most popular team sports in the world.</p>
		<button type="button" class="btn btn-danger btn-lg"> <a href="https://en.wikipedia.org/wiki/Football"> More Info! </a> </button> <hr>
	</div>
	<p> Want to give a feedback? You can go click here to give a comment what's your impression about football and this website does to help creator on developing Wikifutbal! </p>
	<button type="button" class="btn btn-danger btn-lg"> <a href="feedback.php"> Give a feedback </a> </button>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col text-center">
      <h2 style="font-family: Azonix;"> About Me </h2>
    </div>
  </div>
  
  <br>

  <div class="row">
    <div class="col text-center">
	<img src="Pictures/Language/UK.png" width="100px" height="60px">
	<br>
	<br>
	<h3> UK</h3> <br>
      <p>To improve your knowledgeable about Football/Soccer in entire of the world, this website gives you a feature that allow you to adding, editing, or deleting your information about players in the world which includes the player from Amateur to the Professional. Also, this may features a schedule of football matches especially from UK, Spain, Italy, and other countries!</p>
    </div>

     <div class="col text-center">
	  <img src="Pictures/Language/Indonesia.jpg" width="100px" height="60px">
		<br>
		<br>
		<h3> Bahasa Indonesia </h3>	<br>  
      <p> Untuk meningkatkan pengetahuan Anda tentang Sepak Bola di seluruh dunia, situs web ini memberi Anda fitur yang memungkinkan Anda untuk menambahkan, mengedit, atau menghapus informasi mengenai pemain-pemain di dunia yang mencakup pemain dari Amatir hingga Profesional. Juga, ini mungkin menampilkan jadwal pertandingan sepak bola terutama dari Inggris, Spanyol, Italia, dan negara lain! </p>
    </div>
	
    <div class="col text-center">
	<img src="Pictures/Language/DNM.png" width="100px" height="60px">
		<br>
		<br>
		<h3> Danmark </h3>	<br>
      <p> For at forbedre din viden om fodbold / fodbold i hele verden giver dette websted dig en funktion, der giver dig mulighed for at tilføje, redigere eller slette dine oplysninger om spillere i verden, som inkluderer spilleren fra amatør til professionel. Dette kan også indeholde en tidsplan for fodboldkampe, især fra Storbritannien, Spanien, Italien og andre lande! </p>
    </div>
  </div>
</div>
<br> <br>

<div class="jumbotron jumbotron-fluid">
  	<div class="container text-center">
			<p> In Co-operation with:</p>
			<br>

	<div class="row" style="width:100%;">
    <div class="col text-center">
	<img src="Pictures/Sponsor/Adidas.png" height="150px">
	<br><br>
    </div>

     <div class="col text-center">
	  <img src="Pictures/Sponsor/Nike.png"  height="150px">
		<br> <br>
    </div>

    <div class="col text-center">
	  <img src="Pictures/Sponsor/Puma.png"  height="150px">
		<br> <br>
    </div>

    <div class="col text-center">
	  <img src="Pictures/Sponsor/Specs.png"  height="150px">
		<br>  <br>
    </div>
	
    <div class="col text-center">
	<img src="Pictures/Sponsor/Hummel.png"  height="150px">
		<br> <br>
    </div>

    <div class="col text-center">
	<img src="Pictures/Sponsor/NB.png"  height="150px">
		<br><br>
    </div>

    <div class="col text-center">
	<img src="Pictures/Sponsor/Umbro.png"  height="150px">
		<br> <br>
    </div>

    <div class="col text-center">
	<img src="Pictures/Sponsor/EA.png"  height="150px">
		<br> <br>
    </div>

    <div class="col text-center">
	<img src="Pictures/Sponsor/Konami.png"  height="150px">
		<br> <br>
    </div>

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

			    <script src="Javascript/jquery-3.4.1.slim.min.js"></script>
    			<script src="Javascript/popper.min.js"></script>
   				 <script src="Javascript/bootstrap.min.js"></script>
   				     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
	</html>