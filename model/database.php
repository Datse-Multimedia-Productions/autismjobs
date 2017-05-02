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
		pg_query($connection, $sqlcommand);
	}
}

?>

