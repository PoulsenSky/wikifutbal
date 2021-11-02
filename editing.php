<?php	
	SESSION_START();
	
		if(!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}
		require 'function.php';
		$id=$_GET['id'];

		$p=query("SELECT * FROM player WHERE id = $id")[0];

	if (isset($_POST["submit"])) {

		if (edit($_POST)) {
			echo "<script> alert('Data Has Been Edited!');
			location.href='index.php';
			</script>";
		}
		else {
			echo "<script> alert('The Data isn't Edited Yet.....');
			location.href='index.php';
			</script>";
		}
	}
?>

<DOCTYPE html>
	<html>
		<head>
			<title> Edit Player </title>
			    <meta charset="utf-8">
    			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="stylesheet" href="css/css.css">
    			<link rel="stylesheet" href="css/bootstrap.min.css">
    			<style>
    				input[type=text] {
					  width: 60%;
					  padding: 15px;
					  margin: 1px 0 2px 0;
					  border: none;
					  background: #f1f1f1;
					}

					body {
						background-image: url("Pictures/Wallpaper4.jpg");
						background-position: center;
						background-size: cover;
					}

					#card {
					        background: #fbfbfb;
					        border-radius: 10px;
					        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
					        height: 730px;
					        margin: 1rem auto 8.1rem auto;
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
					<br> <br> <br> <br> <br> <br> <br>
					<div id="card">
					<br> <br> <h3 style="font-family: Azonix; color: black;"> Edit Data Here! </h3> <hr style="width:58%;">


			<form action="" method="POST" autocomplete="off">
				<p> <h4 style="padding-right: 505px;"> ID Player : </h4> 
					<input type="text" name="id" 
					value="<?= $p['id']?>" required> </p>

				<p> <h4 style="padding-right: 529px;"> Name : </h4>
					<input type="text" name="name" 
					value="<?= $p['name']?>" required> </p>

				<p> <h4 style="padding-right: 490px;"> Nationality : </h4>
					<input type="text" name="nationality" 
					value="<?= $p['nationality']?>" required></p>

				<p> <h4> Date Of Birth : </h4>
					<input type="date" name="birth" min="1900-01-01" max="2100-12-31" 
					value="<?= $p['birth']?>" required> </p>

				<p> <h4 style="padding-right: 545px;"> Club : </h4>
					<input type="text" name="club" 
					value="<?= $p['club']?>" required> </p>

				<p> <h4> Position : </h4>
							<select name="position">
							<option value="Forward"
								<?php if($p['position']=="Forward") {
									echo "selected=selected"; } ?>> 
									Forward </option>
							<option value="Winger"
								<?php if($p['position']=="Winger") {
									echo "selected=selected"; } ?>>
									Winger </option>
							<option value="Midfielder"
								<?php if($p['position']=="Midfielder") {
									echo "selected=selected"; } ?>> 
									Midfielder </option>
							<option value="Defender"
								<?php if($p['position']=="Defender") {
									echo "selected=selected"; } ?>> 
									Defender </option>
							<option value="Goalkeeper"
							<?php if($p['position']=="Goalkeeper") {
									echo "selected=selected"; } ?>> 
									Goalkeeper </option>
							</select></p>

				<p> <h4 style="padding-right: 465px;"> Special Ability : </h4>
					<input type="text" name="special" 
					value="<?= $p['special']?>"></p>

					<hr>
				<p> <button type="submit" name="submit" class="buttonrgt"> Edit Now!</button> </p>
			</form>
				</div>
				</center>

			    <script src="Javascript/jquery-3.4.1.slim.min.js"></script>
    			<script src="Javascript/popper.min.js"></script>
   				<script src="Javascript/bootstrap.min.js"></script>
		</body>
	</html>