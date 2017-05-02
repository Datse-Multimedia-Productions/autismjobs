<?php 

// This should check the configuration.

// Load yaml file into variable
$configYAML=file_get_contents($configFileName);

$config=yaml_parse($configYAML);

function checkAll($configArray) {
	// checking configuration.
	// checking database.
	if (testKeyExists("database", "Database Section Exists", $configArray)) {
		// Checking Database
		checkDatabase($configArray["database"]);
		// Database Checked
	}
	// other checks should becalled from here.
}

function testKeyExists($key, $successMessage, $array) {
	if (array_key_exists($key, $array)) { 
		return (trigger_error($successMessage));
	} else {
		return (trigger_error("Key: \"$key\" does not exist", E_USER_WARNING));
	}
}

function testKeyValue($key, $values, $valueMessageList, $array) {
	// testing array for value of $key
	if (array_key_exists($key, $array)) {
		if (in_array($array[$key], $values)) {
			return (trigger_error($valueMessageList[$array[$key]]));
		} else {
			return (trigger_error("For key: \"$key\" value: \"$array[$key]\" is not supported", E_USER_WARNING));
		}
	} else {
		return (trigger_error("Key $key, is not set in array", E_USER_WARNING));
	}
}

function checkDatabase ($configArray) {
	// checking database configuration
	if (!(testKeyValue("type", array("psql"), array("psql"=>"Postgresql Database Configuration"), $configArray))) {
		return(1);
	}
	if (!(testKeyExists("host", "host is defined", $configArray))) {
		return(1);
	} 
	if (!(testKeyExists("port", "port defined", $configArray))) {
		return(1);
	} 
	if (!(testKeyExists("dbname", "database name defined", $configArray))) {
		return(1);
	} 
	if (!(testKeyExists("user", "database user defined", $configArray))) {
		return(1);
	} 
	if (!(testkeyExists("password", "database password defined", $configArray))) {
		return(1);
	}
	return(0);
	
}


checkAll($config);
