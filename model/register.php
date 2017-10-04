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
 * Send Email to user  
 *
 * This sends email to user.
 *
 * @param string $hash hash stored in database
 * @param string $userid userid stored in database
 * @param string $type What we are verifying
 * @param string $email Email of person sending verification to
 * 
 * @copyright 2016-2017 Datse Multimedia Productions
 * @license GPL
 * @license https://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
 * @author Jigme Datse Yli-Rasku <jigme.datse@datemultimedia.com>
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * 
 * @todo Figure out how we are going to handle these values.
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */
function sendVerificationEmail($hash, $userid, $type, $email) {
	// Remove ' from $hash
	$hash = trim($hash, "'");
	
	// hash userid
	$mailid=md5($userid);

	// compose email body
	$messageBody[] = "Hello,";
	$messageBody[] = "Your email address has been registered at autismjobs.ca and needs to be verified before continuing on the autismjobs site.";
	$messageBody[] = "To verify your email address click (or copy and paste if that does not work) on the following link:";
	$messageBody[] = "http://autismjobs.ca/index.php?action=register_verify&email=$email&user=$mailid&hash=$hash";
	$messageBody[] = "If you did not register please ignore this message, or respond to it, to inform our administrators that you did not register";
	$messageBody[] = "Thank you,";
	$messageBody[] = "Autism Jobs Administrators";
	
	// Set Destination email address
	$messageTo = $email;

	// Set Message Subject
	$messageSubject = "Email Verification message for autismjobs.ca";

	// Set Email Headers
	$messageHeaders[] = "From: info@autismjobs.ca";
	$messageHeaders[] = "Reply-to: jigme.datse@autismjobs.ca";
	$messageHeaders[] = "Bcc: jigme.datse@autismjobs.ca";
	$messageHeaders[] = "X-Mailer: PHP/" . phpversion();
	$messageHeaders[] = "Content-Type: text/plain; charset=\"utf-8\"";
	$messageHeaders[] = "MIME-Version: 1.0";
	$messageHeaders[] = "Content-Description: Mail message body";


	// Format Message Body
	$sentBody = implode("\r\n \r\n", $messageBody);
	$sentBody = wordwrap($sentBody, 70, "\r\n");

	// Format Headers
	$sentHeaders = implode("\r\n", $messageHeaders);

	// Format To -- There may be some cleanup we want here.
	$sentTo = $messageTo;

	// Format Subject -- There may be some cleanup to do here too.
	$sentSubject = $messageSubject;


	// send message
	$result = mail($sentTo, $sentSubject, $sentBody, $sentHeaders);

	// return result
	if (!$result) {
		$output["error"][] = "An Error occured sending your message";
		$output["error"][] = error_get_last()["type"];
		$output["error"][] = error_get_last()["message"];
		$output["error"][] = error_get_last()["file"];
		$output["error"][] = error_get_last()["line"];
	} else {
		$output["status"]["email"] = "Mail sent successfully";
	}
	return $output;
	echo "<br />hash: $hash";
	echo "<br />userid: $userid";
	echo "<br />type: $type";
	echo "<br />email: $email";
	echo "<br />we need to do something with these values";
}

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
 * @todo Check data is sufficiently valid DONE?
 * @todo Insert user into database DONE?
 * @todo Get verification data entered correctly DONE?
 * @todo Send Verification email (this will need to be a different function).
 * @todo Process Verification attempt 
 *       (This probably needs a different funtion too)
 *
 * @since 0.0.0 
 * @version 0.0.0 
 */
function registerUser($connection, $username, $email, $password, $passwordConfirm) {
	$output[][]="";
	if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordConfirm) && $password===$passwordConfirm) {
		$output["status"]["verify"]="Input verified";
		
		// Insert User Entry
		$rows=array("username", "email", "password");
		$escapedUsername = pg_escape_literal($username);
		$escapedEmail = pg_escape_literal($email);
		$escapedPassword = pg_escape_literal($password);
		$values=array($escapedUsername, $escapedEmail, "crypt($escapedPassword, gen_salt('bf', 8))");
		$output=$output + insertRecord($connection, "users", $rows, $values);
		$output["status"]["insert user"]="user record created";

		// Fetch User ID
		// I need to find a way to report errors here...  
		$column[1]=pg_escape_identifier("userid");
		$column[2]="users";
		$column[3]=pg_escape_identifier("email");
		$result=pg_query_params($connection, "SELECT $column[1] FROM $column[2] WHERE $column[3] = $1", array($email));
		$userid=pg_fetch_all($result);
		$theUserid=pg_escape_literal($userid[0]["userid"]);
		$output["status"]["get userID"]="User ID fetched.";

		// Insert Verify Entry 
		for ($i=1; $i<=10; $i++) { 
			$randomnumbers[$i]=rand(0,1000); 
		}
		$hashthis="$randomnumbers[1] $username $randomnumbers[2] $email $randomnumbers[3] $password $randomnumbers[4] $passwordConfirm $randomnumbers[5] ";
		$hashthis = $hashthis . implode(", ", $rows) . " $randomnumbers[6] ";
		$hashthis = $hashthis . implode(", ", $values) . " $randomnumbers[7]";
		$hash=pg_escape_literal(md5($hashthis));
		$rows=array("userid", "checkhash", "verifytype", "verifystring");
		$values=array($theUserid, $hash, "'email'", $escapedEmail);
		$output=$output + insertRecord($connection, "verifyusers", $rows, $values);
		$output["status"]["verify user"]="Verification code created";
		
		// Send Verification Email
		$output = $output + sendVerificationEmail($hash, $theUserid, "email", $email);
		$output["status"]["verifcation email"]="Verification email sent";
		echo "sent verification email";
	} else { // data verification failed
		$output["error"][]="an error occured";
		$output["error"][]="Things not verified";
		$output["error"][]="username: $username";
		$output["error"][]="email: $email";
		$output["error"][]="password: $password";
		$output["error"][]="password confirm: $passwordConfirm";
		echo "Sending Failed";
	}
	return $output;
}

$output=registerUser($connection, $username, $email, $password, $passwordConfirm);

?>
