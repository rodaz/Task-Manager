<?php
 	$listName = ($_POST['listName']);
 	$dbconn = pg_connect("host=localhost user=postgres password='' dbname=todo")
 		or die('Could not con: '.pg_last_error());
 	$query = "DELETE FROM listing
 				WHERE listName='$listName'";
 	$result	= pg_query($query)
		or die('Could not con: '.pg_last_error());
 	$query = "DROP TABLE $listName";
	$result = pg_query($query)
		or die('Could not con: '.pg_last_error());
	pg_close();
?>