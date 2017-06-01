<?php

$action=cleanGet("action");

function cleanGet($index) {
	if (array_key_exists($index, $_GET)) {
		return htmlentities($_GET[$index]);
	} else {
		return null;
	}
}

function cleanPost($index) {
	if (array_key_exists($index, $_POST)) {
		return htmlentities($_POST[$index]);
	} else {
		return null;
	}
}

?>
