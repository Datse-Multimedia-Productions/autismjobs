<?php

$dsn=$config["database"]["type"].
":host=".$config["database"]["host"].
";port=".$config["database"]["port"].
";dbname=".$config["database"]["dbname"].
";user=".$config["database"]["user"].
";password=".$config["database"]["password"];

echo $dsn;

//$dbh=new PDO($dsn);

//$dbh=new PDO("mysql:host=localhost;port=5432;dbname=pleaseset;user=setuser;password=setpassword");

$connection=pg_connect("host=localhost dbname=pleaseset user=setuser password=setpassword");

?>

