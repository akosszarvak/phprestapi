<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    </head>
    <body>
      
    <header>
    
      <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark text-light">

      <div class="container">

  <!-- TOGGLER -->
  <button class="navbar-toggler btn-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- NAVBAR ICONS -->
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-light" href="dashboard.php">Dashboard</a>
      <a class="nav-item nav-link text-light" href="#">Portfolio</a>
      <a class="nav-item nav-link text-light" href="#">About me</a>
      <!-- FORM CONTROL -->
      <form class="form-inline ml-auto text-light" action="../includes/login.inc.php" method="post">
    <input class="form-control mr-sm-2 " type="text" placeholder="Username" aria-label="Username" name="uname">
    <input class="form-control mr-sm-2 " type="password" placeholder="Password" aria-label="Password" name="pwd">
    <button class="btn btn-outline-light" type="submit" name="login-submit">Login</button>
  </form>
  <a class="nav-item nav-link text-light" href="signup.php">Sign Up
  </a>
  <form class="form-inline" action="../includes/logout.inc.php" method="post">
  <button class="btn btn-outline-light" type="submit" name="login-submit">Logout</button>
  </form>
    </div>
    </div>
  </div>

</nav>

      </header>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>