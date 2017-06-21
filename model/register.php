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

$username=pg_escape_literal(cleanPost("username"));
$email=pg_escape_literal(cleanPost("email"));
$password=pg_escape_literal(cleanPost("password"));
$passwordConfirm=pg_escape_literal(cleanPost("passwordConfirm"));

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
function registerUser($connection, $username, $email, $password, $passwordConfirm) {
	$output[]="";
	if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordConfirm) && $password===$passwordConfirm) {
		$output["verify"]="Input verified";
		$column[1]=pg_escape_identifier("username");
		$column[2]=pg_escape_identifier("email");
		$column[3]=pg_escape_identifier("password");
		$rows="$column[1], $column[2], $column[3]";
		$values="$username, $email, $password";
		insertRecord($connection, "users", $rows, $values);
		$output["insert user"]="user record created";
		$column[1]=pg_escape_identifier("userid");
		$column[2]="users";
		$column[3]=pg_escape_identifier("email");
		$result=pg_query_params($connection, "SELECT $column[1] FROM $column[2] WHERE $column[3] = $1", array($email));
		$userid=pg_fetch_all($result);
		echo "This should print the result userid";
		var_dump($userid);
		echo "Did we get anything?";
		for ($i=1; $i<=10; $i++) { 
			$randomnumbers[$i]=rand(0,1000); 
		}
		$hashthis="$randomnumbers[1] $username $randomnumbers[2] $email $randomnumbers[3] $password $randomnumbers[4] $passwordConfirm $randomnumbers[5] $rows $randomnumbers[6] $values $randomnumbers[7]";
		$hash=pg_escape_literal(md5($hashthis));
		$column[1]=pg_escape_identifier("userid");
		$column[2]=pg_escape_identifier("checkhash");
		$rows="$column[1], $column[2]";
		$values="$userid, $hash";
		insertRecord($connection, "verifyusers", $rows, $values);
		$output["verify user"]="Verification code created";
	} else {
		$output["error"]="an error occured";
	}
	return $output;
}

//require_once("model/database.php");
$output=registerUser($connection, $username, $email, $password, $passwordConfirm);

?>
