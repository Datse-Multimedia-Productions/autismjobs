<form action="/index.php" method="post">
	<label for="jobTitle">Job Title</label>:
	<input type="text" name="jobTitle" id="jobTitle">
	<fieldset>
	<legend>Job Type</legend>
		<input type="checkbox" id="jobTypeForAutistics" name="jobType" value="jobTypeForAutistics"><label class="checkboxLabel" for="jobTypeAutistcs">For Autistics</label><br />
		<input type="checkbox" id="jobTypeHelpingAutistics" name="jobType" value="jobTypeHelpingAutistics"><label class="checkboxLabel" for="jobTypeHelpingAutistics">Helping Autistics</label><br />
		<input type="checkbox" id="jobTypeHelpingAutistics" name="jobType" value="jobTypeOther"><label class="checkboxLabel" for="jobTypeOther">Other</label><br />
			<label for="jobTypeOtherDescription">Other Description</label>:
			<input type="text" name="jobTypeOtherDescription" id="jobTypeOtherDescription">
	</fieldset>
	<fieldset>
	<legend>Job Location</legend>
		<label for="locationStreet">Street Address</label>:
		<input type="text" name="locationStreet" id="locationStreet"><br />
		<label for="locationCity">City</label>:
		<input type="text" name="locationCity" id="locationCity"><br />
		<label for="locationRegion">Region</label>:
		<input type="text" name="locationRegion" id="locationRegion"><br />
		<label for="locationProvince">Province or State</label>:
		<input type="text" name="locationProv" id="locationProvince"><br />
		<label for="locationCountry">Country</label>:
		<input type="text" name="locationCountry" id="locationCountry"><br />
	</fieldset>
	<label for="jobDescription">Job Description</label>:
	<textarea name="jobDescription" id="jobDescription"></textarea><br />
	<label for="jobRequirements">Job Requirements</label>:
	<textarea name="jobRequirements" id="jobRequiremensts"></textarea><br />
	<label for="idealCandidate">Ideal Candidate</label>:
	<textarea name="idealCandidate" id="idealCandidate"></textarea><br />
	<fieldset>
	<legend>How to Apply</legend>
		<fieldset>
			<legend><input type="checkbox" name="applyVia" value="applyViaPostalAddress" id="applyViaPostalAddress" class="hideSelect" onClick="hideUnselected('postalAddress')"><label class="checkboxLabel" for="applyViaPostalAddress">Postal Address</legend></label></legend>
			<div id="postalAddreess" class="hidable">
				<label for="applyViaPostalStreet">Steet Address</label>:
				<input type="text" name="applyViaPostalStreet" id="applyViaPostalStreet"><br />
                		<label for="applyViaPostalCity">City</label>:
				<input type="text" name="applyViaPostalCity" id="applyViaPostalCity"><br />
		                <label for="applyViaPostalRegion">Region</label>:
				<input type="text" name="applyViaPostalRegion" id="applyViaPostalRegion"><br />
        		        <label for="applyViaPostalProvince">Province or State</label>:
				<input type="text" name="applyViaPostalProv" id="applyViaPostalProvince"><br />
	                	<label for="applyViaPostalCountry">Country</label>:
				<input type="text" name="applyViaPostalCountry" id="applyViaPostalCountry"><br />
				<label for="applyViaPostalCode">Postal Code</label>:
				<input type="text" name="applyViaPostalCode" id="applyViaPostalCode"><br />
			</div>
		</fieldset>
		<fieldset>
			<legend><input type="checkbox" name="applyVia" value="applyViaInPerson" id="applyViaInPerson"><label class="checkboxLabel" for="applyViaInPerson">In Person</label></legend>
			<label for="applyViaInPersonStreet">Steet Address</label>:
			<input type="text" name="applyViaInPersonStreet" id="applyViaInPersonStreet"><br />
	                <label for="applyViaInPersonCity">City</label>: 
			<input type="text" name="applyViaInPersonCity" id="applyViaInPersonCity"><br />
        	        <label for="applyViaInPersonRegion">Region</label>:
			<input type="text" name="applyViaInPersonRegion" id="applyViaInPersonRegion"><br />
                	<label for="applyViaInPersonProvince">Province or State</label>:
			<input type="text" name="applyViaInPersonProv" id="applyViaInPersonProvince"><br />
	                <label for="applyViaInPersonCountry">Country</label>: 
			<input type="text" name="applyViaInPersonCountry" id="applyViaInPersonCountry"><br />
		</fieldset>
		<fieldset>
			<legend><input type="checkbox" name="applyVia" value="applyViaEnail" id="applyViaEmail"><label class="checkboxLabel" for="applyViaEmail">Email</label></legend>
			<label for="applyViaEmailAddres">Address</label>: <input type="text" name="applyViaEmailAddress" id="applyViaEmailAddress">
		</fieldset>
		<fieldset>
			<legend><input type="checkbox" name="applyVia" value="applyViaWebsite" id="applyViaWebsite"><label class="checkboxLabel" for="applyViaWebsite">Website</label></legend>
			<label for="applyViaWebsiteAddress">Address</label>: <input type="text" name="applyViaWebsiteAddress" id="applyViaWebsiteAddress">
		</fieldset>
	</fieldset>
	<fieldset>
	<legend>Company</legend>
		<label for="companyName">Name</label>:
		<input type="text" name="companyName" id="companyName"><br />
		<label for="companyWebsite">Website</label>:
		<input type="text" name="companyWebsite" id="companyWebsite">
	</fieldset>
	<input type="submit" value="preview"><input type="reset">
</table>

