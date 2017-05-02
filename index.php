<?php 

$configFileName="config.yaml";

error_reporting(E_ALL & ~E_USER_NOTICE);

if (!file_exists("$configFileName")) {
	echo "This is not configured";
	echo "please configure this.";
} else {
	// configured, this should call the controller
	// load configuration
	// require_once ("config.data.php"); // Load Configuration Data
	// print_r($config); // This is for diagnosis.  Should be in a "if debug".
	// configuration loaded...  Check validity.
	require_once ("model/check-config.php"); // Load config check routines. 
	// checkAll($config); // Call to check all elements in configuration.
	// call controller.
	require_once ("controller/index.php");
}

?>
