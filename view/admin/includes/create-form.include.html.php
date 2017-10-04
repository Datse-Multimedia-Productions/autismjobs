<form action="/admin.php?action=createsubmit" method="post">
    <input type="checkbox" name="tables[]" id="users" value="users">
    <label for="users" class="checkboxLabel">User Database</label><br />
    <input type="checkbox" name="tables[]" id="verifyusers" value="verifyusers">
    <label for="verifyusers" class="checkboxLabel">Verify User Database</label><br />
    <input type="submit" value="Submit">
</form>
