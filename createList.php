<?php
	$listName = ($_POST['listName']);
 	$dbconn = pg_connect("host=ec2-54-163-238-96.compute-1.amazonaws.com user=fnpdoraqiofwwb password=St5MbVy9jx51CLEmAxGVynleFA dbname=d5ee2fuhq3beii")
 		or die('Could not con: '.pg_last_error());
 	$query = "CREATE TABLE IF NOT EXISTS listing (
 		list_id SERIAL,
 		listName VARCHAR(100) not null,
		PRIMARY KEY (list_id))";
	$result = pg_query($query)
		or die('Error '.pg_last_error());
 	$query = "INSERT INTO listing (listName)
 				VALUES ('$listName')";
 	$result	= pg_query($query)or die('Error '.pg_last_error());
 	$query = "CREATE TABLE $listName (
 		task_id SERIAL,
 		taskName TEXT not null,
 		done INT,
 		priority smallserial, 
 		PRIMARY KEY (task_id))";
	$result = pg_query($query)or die('Error '.pg_last_error());
	pg_close();
?>