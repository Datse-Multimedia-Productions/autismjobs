<?php

$pgconnection="host=".$config['database']['host'].
" dbname=".$config['database']['dbname'].
" user=".$config['database']['user'].
" password=".$config['database']['password'];

$connection=pg_connect($pgconnection);

// This will create the database tables
function createDatabaseTables($connection, $sqlfile) {
	$sqlcommand = file_get_contents($sqlfile);
	if ($sqlcommand) {
		$result = pg_query($connection, $sqlcommand);
		if (!$result) {
			echo "An error occured";
			echo pg_last_error($connection);
		}
	}
}

?>

