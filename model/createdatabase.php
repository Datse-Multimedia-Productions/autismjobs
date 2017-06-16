<?php
/**
 * Create the database tables 
 *
 * This calls what is needed to create the database tables.
 * 
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * 
 * @todo We need to look at profiles and job listings still
 * @todo We need to look at what happens when no database tables get selected
 * @todo We need to look at dependencies:
 * @todo profiles link to users, users needs to be created.
 * @todo Need to look at handling existing successfully.
 * @todo If table already exists, how to handle.
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */

$tables=cleanPostArray("tables");


/**
 * Create the tables
 *
 * This creates the tables.  
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * 
 * @todo Find out why this is only doing one table at a time.
 * @todo convert this to a function.
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */
foreach ($tables as $table) {
	switch ($table) {
		case "users":
			createDatabaseTables($connection, "model/users.sql");
			$output[$table]="Table $table created";
			break;
		case "verifyusers":
			createDatabaseTables($connection, "model/verifyusers.sql");
			$output[$table]="Table $table created";
			break;
		default:
			$output[$table]="No such table $table";
	}
}

?>
