<?php

$dsn=$config["database"]["type"].":host=".$config["database"]["host"].";port=".$config["database"]["port"].";dbname="$config["database"]["dbname"].";user=".$config["database"]["user"].";password=".$config["database"]["password"];

$dbh=new PDO($dsn);

?>

