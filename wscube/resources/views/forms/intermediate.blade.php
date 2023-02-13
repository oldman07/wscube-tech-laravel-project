<h1>i am form page</h1>

<p>Form for Data scientist</p>

<form action="intermediate/show_data" method = 'post'>
@csrf
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email"  value='{{old("email")}}'>
    <span> 
    @error('email')
    {{$message}}
    @enderror
    </span>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" value='{{old("psw")}}'>
    <span> 
    @error('psw')
    {{$message}}
    @enderror
    </span>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat"  value='{{old("psw-repeat")}}'>
    <span> 
    @error('psw-repeat')
    {{$message}}
    @enderror
    </span>
    <hr>
    <input type="submit" value="Submit">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>