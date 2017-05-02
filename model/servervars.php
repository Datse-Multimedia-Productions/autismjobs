<?php

$action=cleanGet("action");

function cleanGet($index) {
	if (array_key_exists($index, $_GET)) {
		return htmlentities($_GET[$index]);
	} else {
		return null;
	}
}

?>
