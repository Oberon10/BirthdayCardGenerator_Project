<?php session_start(); ?>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<?php include 'connect.php' ?>
<section id="login">
      <div class="container">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $email = $_POST["inputEmail3"];
          $password = $_POST["inputPassword3"];
          $sql = "SELECT * FROM users where email = '$email' AND password = '$password' ";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $row['user_id'];
            header("Location: home.php");

          } else {
            echo "Incorrect password and email";
          }
          
          mysqli_close($conn);

        }

        ?>
        <form style="margin-left: 20%; margin-right: 20%; height: 300px;" method="POST" action="">
            <h3>Login</h3>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" Name="inputEmail3" class="form-control" id="inputEmail3" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" Name="inputPassword3" class="form-control" id="inputPassword3" required>
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
         
</section>        
        
<?php include 'footer.php' ?>
 