<?php 

$title="Autism Jobs - Admin - Create Database Results";
$pageHead="Autism Jobs Admin Page - Create Database Results";

require_once("includes/header.html.php");
?>
<p>This is the admin section of the website.  I think we need to do a few different things here</p>

<h2>Create Database Results</h2>

<p>These are the results of the database creation that you just did:</p>

<?php 
echo "<dl>";

foreach($output as $table => $result) {
	echo "<dt>$table</dt>";
	echo "<dd>$result</dd>";
}

echo "</dl>";

?>

<?php
require_once("includes/actions.html.include.php");
?>

<?php require_once("includes/footer.html.php"); ?>
