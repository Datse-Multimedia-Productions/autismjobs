<?php 
/**
 * Verify Email Address for a user
 *
 * This verifies that the user's email address is valid.
 * 
 * The verification code is sent by email, and would be very difficult
 * to reproduce without access to the database, or some information 
 * leakage from the website (this is currently possible).
 * 
 * There will need to be some fixing of some things in the upcoming 
 * pre-release versions, including some updates to the registration 
 * process.  I have seen the creation of multiple verification entries
 * in the database.  
 *
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * 
 * @todo Verify the email address
 * @todo Update verification database entry
 * @todo Handle login verification
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */

//http://autismjobs.ca/index.php?
// action=register_verify
// email=$email
// user=$mailid
// hash=$hash

//These are the values I am working with.  

$action=cleanGet("action");
$email=cleanGet("email");
$user=cleanGet("user");
$hash=cleanGet("hash");

/**
* Handle the email verification
*
* This is the long description for the Class
*
* @param string $action Action from the form
* @param string $email Email address we are verifying
* @param string $user MD5 hashed value of userid
* @param string $hash Hash value which we are using for verification
* @return	mixed	Output results 
* @see		??
* @copyright	2017 Datse Multimedia Productions
* @license	GPL
* @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
* @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
* @author Datse Multimedia Productions <info@datsemultimedia.com>
* 
* @todo See where these values are coming from
* @todo Look at how we are handling data connections
* @todo Look at updating database
* 
* @since 0.0.0
* @version 0.0.0
*/
function verifyEmail($action, $email, $user, $hash) {
	if ($action=="register_verify" && !empty($email) && !empty($user) && !empty($hash) {
		$output["status"]["data verification"]="Data verifies (we can use it)";

	} else {
		$output["status"]["data verification"]="Data Verification Failed";
	}
}
?>
