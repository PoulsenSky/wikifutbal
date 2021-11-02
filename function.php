<?php 
//Connection ke database
$Connection = mysqli_connect("localhost","root","","uaspemweb") or die("Connection is lose....");

function query($query){
	global $Connection;
	$result=mysqli_query($Connection,$query);
	$rows=[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function adding($data){
	global $Connection;

	$id = htmlspecialchars($data["id"]);
	$name = htmlspecialchars($data["name"]);
	$nationality = htmlspecialchars($data["nationality"]);
	$birth = htmlspecialchars($data["birth"]);
	$club = htmlspecialchars($data["club"]);
	$position = htmlspecialchars($data["position"]);
	$special = htmlspecialchars($data["special"]);

	$adding = "INSERT INTO player (id,name,nationality,birth,club,position,special) VALUES 
	('$id','$name','$nationality','$birth','$club','$position','$special')";
	$sql = mysqli_query($Connection,$adding);
	return mysqli_affected_rows($Connection);

}

function feedback($data){
	global $Connection;

	$anonim = htmlspecialchars($data["anonim"]);
	$comment = htmlspecialchars($data["comment"]);

	$feedback = "INSERT INTO feedback (anonim,comment) VALUES 
	('$anonim','$comment')";
	$sql = mysqli_query($Connection,$feedback);
	return mysqli_affected_rows($Connection);

}

function adding2($data){
	global $Connection;

	$id = htmlspecialchars($data["id"]);
	$namec = htmlspecialchars($data["namec"]);
	$nationalityc = htmlspecialchars($data["nationalityc"]);
	$birthc = htmlspecialchars($data["birthc"]);
	$manage = htmlspecialchars($data["manage"]);

	$adding2 = "INSERT INTO coach (id,namec,nationalityc,birthc,manage) VALUES 
	('$id','$namec','$nationalityc','$birthc','$manage')";
	$sql = mysqli_query($Connection,$adding2);
	return mysqli_affected_rows($Connection);

}
function deleting($id){
	global $Connection;
	mysqli_query($Connection,"DELETE FROM player where id = $id");
	return mysqli_affected_rows($Connection);
}

function deleting2($id){
	global $Connection;
	mysqli_query($Connection,"DELETE FROM coach where id = $id");
	return mysqli_affected_rows($Connection);
}

function deleting3($id){
	global $Connection;
	mysqli_query($Connection,"DELETE FROM feedback where id = $id");
	return mysqli_affected_rows($Connection);
}

function edit($data){
	global $Connection; 

	$id = htmlspecialchars($data["id"]);
	$name = htmlspecialchars($data["name"]);
	$nationality = htmlspecialchars($data["nationality"]);
	$birth = htmlspecialchars($data["birth"]);
	$club = htmlspecialchars($data["club"]);
	$position = htmlspecialchars($data["position"]);
	$special = htmlspecialchars($data["special"]);

		$update = "UPDATE player SET 	id = '$id',
										name = '$name',
										nationality = '$nationality',
										birth = '$birth',
										club = '$club',
										position = '$position',
										special = '$special'
								  WHERE id ='$id'";
			
	$sql=mysqli_query($Connection,$update);
	return mysqli_affected_rows($Connection);

}

function edit2($data){
	global $Connection; 

	$id = htmlspecialchars($data["id"]);
	$namec = htmlspecialchars($data["namec"]);
	$nationalityc = htmlspecialchars($data["nationalityc"]);
	$birthc = htmlspecialchars($data["birthc"]);
	$manage = htmlspecialchars($data["manage"]);

		$update = "UPDATE coach SET 	id = '$id',
										namec =' $namec',
										nationalityc = '$nationalityc',
										birthc = '$birthc',
										manage ='$manage'
								  WHERE id ='$id'";
			
	$sql=mysqli_query($Connection,$update);
	return mysqli_affected_rows($Connection);

}

function register($data) {
	global $Connection;
	$email = htmlspecialchars($data["email"]);
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($Connection, $data["password"]);
	$password2 = mysqli_real_escape_string($Connection, $data["password2"]);
	
	$result = mysqli_query($Connection, "SELECT * FROM account WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		print "<script> alert('The username has been available, find the other one!')</script>";
		return false;
	}
	
	if($password !== $password2) {
		print"<script> alert('Password is not suited!')</script>";
		return false;
	}
	
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_query($Connection, "INSERT INTO account VALUES ('','$email','$username','$password')");
	return mysqli_affected_rows($Connection);
}

function search($search){
	$query="SELECT * FROM player WHERE name like '%$search%'";
	return query($query);
}

function search2($search2){
	$query="SELECT * FROM coach WHERE namec like '%$search2%'";
	return query($query);
}

?>