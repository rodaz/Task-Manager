<?php
 	$listName = ($_POST['listName']);
 	$taskName = ($_POST['taskName']);
 	$dbconn = pg_connect("host=localhost user=postgres password='' dbname=todo")
 		or die('Could not con: '.pg_last_error());
 	$query = "DELETE FROM $listName
 				WHERE taskName='$taskName'";
 	$result	= pg_query($query)
		or die('Could not con: '.pg_last_error());
	pg_close();
?>