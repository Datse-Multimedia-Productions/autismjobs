<?php 

echo "This should check the configuration<br />";

function checkAll($configArray) {
	echo "checking configuration<br />";
	echo "checking database<br />";
	checkDatabase($configArray);
}

function checkDatabase ($configArray) {
	echo "checking database configuration<br />";
	if (array_key_exists("database", $configArray)) {
		echo "database configuration exists<br />";
	} else {
		echo "database configuration does not exist<br />";
	}
}

checkAll($config); // Call to check all elements in configuration

