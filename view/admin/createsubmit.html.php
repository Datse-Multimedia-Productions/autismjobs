<?php 
/**
 * View for results of creating database
 *
 * Database table creation.  Each table will be handled separately.
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * 
 * @todo Have better handling if this gets called with no `$output`
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */

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
