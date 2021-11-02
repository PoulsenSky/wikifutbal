<?php

	require 'function.php';
	$id = $_GET["id"];

	if (deleting2($id)>0) {
		print "<script> alert('The Data has been deleted!');
		location.href='index.php';
		</script>";
		
	}
	else{
		print "<script> alert('The Data isn't Deleting....');
		windows.history.go(-1);
		</script>";
	}