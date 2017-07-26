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

/**
 * Insert record into database table.
 *
 * This inserts a record into the database table.  
 * 
 * There is a bit of an odd decision which we have made here.  The row
 * array contains the string literals for the row names, and get escaped
 * by this function itself, and the values to insert are escaped and
 * simply passed to the insert as is.
 * 
 * The reason for this is that the row names, can (as far as I know) 
 * consistantly be named as a string, and escaping them as 
 * pg_escape_identifier() should work in all known cases.
 * 
 * Whereas, with the values, sometimes the values are based on postgres
 * functions, and if those end up being escaped after being passed to
 * this function, they will end up with the function name (and paramaters)
 * used as a literal string, rather than actually calling the function.
 *
 * Due to the fact that I am calling a function at this point (as I am 
 * writing this, there is a "waitng" call to this function which uses a 
 * function in the database) and the only way that I can realistically
 * handle that is to pass the values as they should show up in the query
 * so while I would rather *not* have to escape before calling, I am 
 * deciding to handle it at this time with the "escaped" values getting
 * passed, rather than having this function handle them.
 * 
 * In the future, I think I may try to find a way to tell this function
 * whether it is getting passed the values escaped or not.
 *
 * @param pg_connection $connection Connection to pg_connect() function
 * @param string $table Table name
 * @param string[] $rows Strings with row names (unescaped)
 * @param string[] $values Values to insert (escaped)
 * 
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * 
 * @todo
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */
function insertRecord($connection, $table, $rows, $values) {
	$sqlcommand = "INSERT INTO $table ($rows) VALUES ($values);";
	$result = pg_query($connection, $sqlcommand);
	if (!$result) {
		echo "An error occured";
		echo pg_last_error($connection);
	}
}

?>

