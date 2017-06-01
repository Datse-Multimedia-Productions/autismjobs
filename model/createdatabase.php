<?php

$tables=cleanPostArray("tables");

foreach ($tables as $table) {
	switch ($table) {
		case "users":
			createDatabaseTables($connection, "users.sql");
			break;
		default:
			echo "No such tables";
	}
}

?>
