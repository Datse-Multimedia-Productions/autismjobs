<?php

$action=cleanGet("action");

function cleanGet($index) {
	return htmlentities($_GET[$index]);
}

?>
