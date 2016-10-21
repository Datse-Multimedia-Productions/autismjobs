<?php
/**
 * This provides the functionality to parse the apache logs
 * 
 * We are writing this so that we can view the apache logs in a manner which
 * ends up being more meaningful than the current way that the logs end up 
 * getting displayed.  It will aggregate data in a way which makes more sense,
 * at least once we get there.
 * 
 * @author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * 
 * @copyright 2016 Datse Multimedia Productions
 * @license GNU General Public License, version 3
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License, version 3
 * 
 * @since 0.0.0 Intoduced beofre first release
 * @version 0.0.0 This should be updated to current version as changes are made in the current version
 * 
 */

/**
 * This needs to be defined
 *
 * Not sure (yet) what will go here
 * 
 * @param string $logFile The filename of the log file.
 * @param string $parser Regular Expression (regex) to get the output.
 * @param string[] $fields The names of the fields to return.
 * 
 * @return string[][] Associative array of results
 */
function parseLog($logFile, $parser, $fields){
}


