<?php 
	include('connect.php');
	$dropnote="Drop table note";
	$rundropnote=mysqli_query($connection,$dropnote);
	if ($rundropnote) {
		echo "<p>Note Table is dropped successfully!</p>";
	}else{
		echo mysqli_error($connection);
	}

	$createnote="CREATE table note
		(
			noteid int Auto_Increment not null primary key,
			title varchar(150),
			note text,
			userid int,
			modifieddate date,
			foreign key(userid) references user(userid)
		)" ;
	$runcreatenote=mysqli_query($connection,$createnote);
	if ($runcreatenote) {
		echo "<p>Note Table is created successfully!</p>";
	}else{
		echo mysqli_error($connection);
	}
 ?>