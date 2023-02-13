<h1>i am form page</h1>

<p>Choose your favorite Web language:</p>

<form action="{{url('/')}}/show_us" method = 'post'>
@csrf
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label>
  <input type="submit" value="Submit">
</form>