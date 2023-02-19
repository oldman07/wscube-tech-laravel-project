<h1>i am form page</h1>

<p>Choose your favorite Web language:</p>

<form action="{{url('/')}}/show_us" method = 'post'>
@csrf

  <x-output name='hello'/>

</form>
<?php
p();
