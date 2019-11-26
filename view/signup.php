<?php
require "header.php";
?>
<main class="bg-light" > 
<div class="container bg-light">
<form action="../api/auth/signup-inc.php" method="post">

<div class="form-row">
<div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>

  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password2">Repeat Password</label>
    <input type="password" class="form-control" id="password2" placeholder="Repeat Password">  </div>


  <button type="submit" name="signup-submit" class="btn btn-primary ">Sign Up</button>
</form>

</div>




</main>
<?php
require "footer.php";
?>