<?php

$tables=cleanPostArray("tables");

foreach ($tables as $table) {
	switch ($table) {
		case "users":
			createDatabaseTables($connection, "model/users.sql");
			$output[$table]="Table $table created";
			break;
		default:
			echo "No such tables";
	}
}

?>
