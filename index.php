<?php 

if (!file_exists("config.data.php")) {
	echo "This is not configured";
	echo "please configure this.";
} else {
	// configured, this should call the controller
	// load configuration
	require_once ("config.data.php");
	print_r($config);
	echo "configuration loaded...  Check validity.<br />";
	require_once ("model/check-config.php"); // This may not work quite right putting this here.
	echo "call controller<br />";
	require_once ("controller/index.php");
}

?>
