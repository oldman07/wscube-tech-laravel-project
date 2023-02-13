<h1>i am form page</h1>

<p>Form for Data scientist</p>

<form action="intermediate/show_data" method = 'post'>
@csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="first_name"><br><br>
  <label for="fname">Last name:</label><br>
  <input type="text" id="lname" name="last_name"><br><br>
  <label for="fname">Specilization:</label><br>
  <input type="text" id="specilization" name="specliation"><br><br>
  <input type="submit" value="Submit">
</form>