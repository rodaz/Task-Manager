<?php
 	$taskName = ($_POST['taskName']);
 	$listName = ($_POST['listName']);
 	$dbconn = pg_connect("host=localhost user=postgres password='' dbname=todo")
 		or die('Could not con: '.pg_last_error());
 	$query = "INSERT INTO $listName (taskName, done)
 				VALUES ('$taskName', 0)";
	$result = pg_query($query)
		or die('Could not con: '.pg_last_error());
	pg_close();
?>