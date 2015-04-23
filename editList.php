<?php
 	$oldListName = ($_POST['oldListName']);
 	$newListName = ($_POST['newListName']);
 	$dbconn = pg_connect("host=localhost user=postgres password='' dbname=todo")
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