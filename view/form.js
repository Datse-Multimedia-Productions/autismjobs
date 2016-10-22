/**
 * forms.js - form related Javascript
 *
 * This holds the functions which are used to modify forms.
 *
 * @version 0.0.0
 * @since 0.0.0
 * 
 * @author Jigme Datse Yli-Rasku <jigme.datse@datsemultimed.com>
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * @copyright 2016 Datse MultimediaProductions
 * @license GPL-3
 * 
 */


/**
 * hideUnselected - Hides based checkboxes.
 *
 * This will hide files based on checkboxes.
 * 
 * @param {string} hiddenClass The Class name for what this unhides.
 * @param {string} checkboxID The ID of the checkbox which is used
 * 
 * @version 0.0.0
 * @since 0.0.0
 * 
 * @author Jigme Datse Yli-Rasku <jigme.datse@datsemultimed.com>
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * @copyright 2016 Datse MultimediaProductions
 * @license GPL-3
 * 
 */
function hideUnselected(hiddenClass, checkboxID) {

	// gets array of the elements which should be hidden (or unhidden)
	var hidableElements = document.getElementsByClassName(hiddenClass), i;
	// gets the checkbox 
	var checkbox = document.getElementById(checkboxID);

	if (checkbox.checked) {

		// goes through list of elements to handle and displays them
		for (var i = 0; i < hidableElements.length; i ++) {
    			hidableElements[i].style.visibility = 'visible';
    			hidableElements[i].style.display = 'block';
		}

	} else { // checkbox is not checked

		// goes through list of elements and hides them
		for (var i = 0; i < hidableElements.length; i ++) {
			hidableElements[i].style.visibility = 'hidden';
    			hidableElements[i].style.display = 'none';
		}

	}
} 
