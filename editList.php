<?php
 	$oldListName = ($_POST['oldListName']);
 	$newListName = ($_POST['newListName']);
 	$dbconn = pg_connect("host=ec2-54-163-238-96.compute-1.amazonaws.com user=fnpdoraqiofwwb password=St5MbVy9jx51CLEmAxGVynleFA dbname=d5ee2fuhq3beii")
 		or die('Could not con: '.pg_last_error());
 	$query = "UPDATE listing SET listName='$newListName'
 				WHERE listName='$oldListName'";
 	$result	= pg_query($query)
		or die('Could not con: '.pg_last_error());
 	$query = "ALTER TABLE $oldListName RENAME TO $newListName";
	$result = pg_query($query)
		or die('Could not con: '.pg_last_error());
	pg_close();
?>