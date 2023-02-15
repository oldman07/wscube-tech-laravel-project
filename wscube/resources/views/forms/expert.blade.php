<form action="/expert" method="post">
    @csrf
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>

  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="email" required>

  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>
