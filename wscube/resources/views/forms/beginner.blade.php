<h1>i am form page</h1>

<p>Choose your favorite Web language:</p>
{{ session()->get('user_name')}}
<form action="{{url('/')}}/show_us" method = 'post'>
@csrf

  <x-output name='hello'/>

</form>
<?php



