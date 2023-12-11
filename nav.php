<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><h3><span class="highlight">Birthday</span> Card Generator</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="index.php#About">About</a>
        <a class="nav-link" href="index.php#offer">Offer</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="reg.php">Register</a>
        <?php
        if(isset($_SESSION['user_id'])){
          ?>
         
        <a class="nav-link" href="home.php">Home</a>
        <a class="nav-link" href="logout.php">Logout</a>
       
        <?php
      }
        ?>
      </div>
    </div>
  </div>
</nav>