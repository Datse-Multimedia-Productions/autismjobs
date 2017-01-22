<?php 

if (!file_exists("config.data.php")) {
	echo "This is not configured";
	echo "please configure this.";
} else {
	echo "configured, this should call the controller";
	echo "load configuration";
	echo "call controller";
}

?>
