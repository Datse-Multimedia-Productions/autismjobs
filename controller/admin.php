<?php 

require_once("model/servervars.php");
require_once("model/database.php");

switch ($action) {
	case "index":
		require_once("view/admin/index.html.php");
		break;
	case "create":
		require_once("view/admin/create.html.php");
		break;
	default:
		require_once("view/admin/index.html.php");
}

?>
