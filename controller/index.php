<?php 

require_once("model/servervars.php");
require_once("model/database.php");

switch ($action) {
	case "index":
		require_once("view/index.html.php");
		break;
	case "addListing":
		require_once("view/addlisting.html.php");
		break;
	case "register":
		require_once("view/register.html.php");
		break;
	case "registersubmit":
		require_once("model/register.php");
		require_once("view/registersubmit.html.php");
		break;
	default:
		require_once("view/index.html.php");
}

?>
