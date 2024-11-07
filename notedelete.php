<?php 
	include('connect.php');
	if (isset($_REQUEST['noteid'])) {
		$noteid=$_REQUEST['noteid'];
		$delete="delete from note where noteid=$noteid";
		$rundelete=mysqli_query($connection,$delete);
		if ($rundelete) {
			echo "<script>window.alert('Deleted successfully')</script>";
        	echo "<script>window.location='index.php'</script>";
		}
	}
 ?>