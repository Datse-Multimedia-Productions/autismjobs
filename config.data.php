<?php 

// Configuration File Name
$configFileName="config.yaml";

// Load yaml file into variable
$configYAML=file_get_contents($configFileName);

$config=yaml_parse($configYAML);

//$config = array (
//	"database" => array (
//		"type" => "psql",
//		"host" => "localhost",
//		"port" => "5432",
//		"dbname" => "pleaseset",
//		"user" => "setuser",
//		"password" => "setpassword"
//	),
//	"configured" => TRUE
//);

// print_r($config); // this is for diagnostic purposes...  Should be removed.

?>
