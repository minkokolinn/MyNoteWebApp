<?php 

	session_start();
	include('connect.php');
	session_destroy();
				echo "<script>window.alert('Logout successfully')</script>";
        	echo "<script>window.location='index.php'</script>";
 ?>