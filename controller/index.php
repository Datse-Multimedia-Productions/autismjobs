<?php 

require_once("model/servervars.php");

switch ($action) {
	case "index":
		require_once("view/index.html.php");
		break;
	default:
		require_once("view/index.html.php");
}

?>
