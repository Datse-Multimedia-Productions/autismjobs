<?php 

// Configuration File Name
$configFileName="config.yaml";

// Load yaml file into variable
$configYAML=file_get_contents($configFileName);

$config=yaml_parse($configYAML);

// print_r($config); // this is for diagnostic purposes...  Should be removed.

?>
