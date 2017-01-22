<?php 

if (!file_exists("config.data.php")) {
	echo "This is not configured";
	echo "please configure this.";
} else {
	echo "configured, this should call the controller<br />";
	echo "load configuration<br />";
	require_once ("config.data.php");
	echo "call controller<br />";
	require_once ("controller/index.php");
}

?>
