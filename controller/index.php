<?php 

require_once("controller/configure.php");
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
	case "register_verify":
		echo "Register Verification";
		require_once("model/registerverify.php");
		echo "Code Run";
		require_once("view/registerverify.html.php");
		echo "Page Displayed";
		break;
	default:
		require_once("view/index.html.php");
}

?>
