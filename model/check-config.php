<?php 

echo "This should check the configuration<br />";

function checkAll() {
	echo "checking configuration<br />";
	echo "checking database<br />";
	checkDatabase();
}

function checkDatabase () {
	echo "checking database configuration<br />";
	if (array_key_exists("database", $config)) {
		echo "database configuration exists<br />";
	} else {
		echo "database configuration does not exist<br />";
	}
}

checkAll(); // Call to check all elements in configuration

