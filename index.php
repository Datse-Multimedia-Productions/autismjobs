<?php 

$configFileName="config.yaml";

error_reporting(E_ALL & ~E_USER_NOTICE);

if (!file_exists("$configFileName")) {
	echo "This is not configured";
	echo "please configure this.";
} else {
	// load and check configuration. 
	require_once ("model/check-config.php"); // Load config check routines. 
	
	// call controller.
	require_once ("controller/index.php");
}

?>
