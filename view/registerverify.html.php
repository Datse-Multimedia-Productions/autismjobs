<?php 
/**
 * View for results of verifying of registering a user 
 *
 * This will display the results of verifying of registering a user.  
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * 
 * @todo Have better handling if this gets called with no `$output` DONE?
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */

$title="Autism Jobs - Verify Register User";
$pageHead="Autism Jobs - Verify Register User Results";

require_once("includes/header.html.php");
?>

<h2>Register Verify User Results</h2>

<p>These are the results of the user registration verification that you just did:</p>

<?php 
echo "<ul>";

foreach($output as $table => $result) {
	echo "<dl><dt>$table</dt>";
	echo "<dd>";

	foreach ($result as $name => $message) {
		echo "<dt>$name</dt>";
		echo "<dd>$message</dd>";
	}

	echo "</dd></dl>";
}

echo "</ul>";

?>

<?php
require_once("includes/actions.html.include.php");
?>

<?php require_once("includes/footer.html.php"); ?>
