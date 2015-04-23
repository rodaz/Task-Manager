<?php
 	$listName = ($_POST['listName']);
 	$oldTaskName = ($_POST['oldTaskName']);
 	$newTaskName = ($_POST['newTaskName']);
 	$dbconn = pg_connect("host=localhost user=postgres password='' dbname=todo")
 		or die('Could not con: '.pg_last_error());
 	$query = "UPDATE $listName SET taskName='$newTaskName'
 				WHERE taskName='$oldTaskName'";
 	$result	= pg_query($query)
		or die('Could not con: '.pg_last_error());
	pg_close();
?>