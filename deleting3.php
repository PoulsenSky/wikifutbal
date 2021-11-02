<?php

	require 'function.php';
	$id = $_GET["id"];

	if (deleting3($id)>0) {
		print "<script> alert('The Data has been deleted!');
		location.href='showfeed.php';
		</script>";
		
	}
	else{
		print "<script> alert('The Data isn't Deleting....');
		windows.history.go(-1);
		</script>";
	}