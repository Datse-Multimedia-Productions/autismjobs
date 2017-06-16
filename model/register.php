<?php
/**
 * Provides functionality for registration 
 *
 * This provides the functionality for registration.  
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * 
 * @todo look at validation of form data
 * @todo Ensure email is properly stored
 * @todo Deal with email validation
 * @todo Test registration
 * @todo Handle the possibility of issues with getting data through the post variables.
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */

$username=cleanPost("username");
$email=cleanPost("email");
$password=cleanPost("password");
$passwordConfirm=cleanPost("passwordConfirm");

/**
 * Register User 
 *
 * This registers the user, it takes the arguments of username, email,
 * password, and passwordConfrim.
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * 
 * @todo Check data is sufficiently valid
 * @todo Insert user into database
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */
function registerUser($username, $email, $password, $passwordConfirm) {
	$output[]="";
	if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordConfirm) && $password===$passwordConfirm) {
		$output["verify"]="Input verified";
		$rows=pg_escape_identifier("username, email, password");
		$values=pg_escape_literal("$username, $email, $password");
		insertRecord($connection, "users", $rows, $values);
		$output["insert user"]="user record created";
		$result=pg_query_params($connection, "SELECT userid FROM users WHERE email = $1", array($email));
		$userid=pg_fetch_all($result);
		print_r($userid);
		for ($i=1; $i<=10; $i++) { 
			$randnumbers[$i]=rand(0,1000); 
		}
		$hashthis="$randomnumbers[1] $username $randomnumbers[2] $email $randomnumbers[3] $password $randomnumbers[4] $passwordConfirm $randomnumbers[5] $rows $randmonumbers[6] $values $randomnumbers[7]";
		$hash=md5($hashthis);
		$rows=pg_escape_identifier("userid, checkhash");
		$values=pg_escape_literal("$userid, $hash");
		insertRecord($connection, "verifyusers", $rows, $values);
		$output["verify user"]="Verification code created";
	} else {
		$output["error"]="an error occured";
	}
	return $output;
}

require_once("model/database.php");
$output=registerUser($username, $email, $password, $passwordConfirm);

?>
