<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<?php include 'connect.php' ?>
<section id="reg">
    <div class="container">
        <h2>Registration</h2>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          //`fname`, `lname`, `address`, `city`, `state`, `email`, `password`, `zip`)
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $address = $_POST["inputAddress"];
          $city = $_POST["inputCity"];
          $state = $_POST["inputState"];
          $email = $_POST["inputEmail"];
          $password = $_POST["inputCPassword"];
          $zip = $_POST["inputZip"];
          $inputCPassword = $_POST["inputCPassword"];
          if($password != $inputCPassword){
            die("password didn't match". mysqli_connect_error());
          }
          $sql = "INSERT INTO users (fname, lname, address, city, state, email, password, zip)
        VALUES ('$fname', '$lname', '$address', '$city', '$state', '$email', '$password', '$zip')";
        
        if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        
        }
        
        ?>
        <form method="POST" action="" class="row g-3">
            <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text"  Name="fname" class="form-control" id="fname" required>
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" Name="lname" class="form-control" id="lname" required>
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" Name="inputAddress" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" Name="inputCity" class="form-control" id="inputCity" required>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <input type="text" Name="inputState" class="form-control" id="inputState" required>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" Name="inputZip" class="form-control" id="inputZip" required>
          </div>
          <div class="col-md-4">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" Name="inputEmail" class="form-control" id="inputEmail" required>
          </div>
          <div class="col-md-4">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" Name="inputCPassword" class="form-control" id="inputPassword" required>
          </div>
          <div class="col-md-4">
            <label for="inputCPassword" class="form-label">Confirm Password</label>
            <input type="password" Name="inputCPassword" class="form-control" id="inputCPassword" required>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
              <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
              </label>
              <div id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-success">Register Me</button>
          </div>
        </form>
    </div>      
</section>
        
<?php include 'footer.php' ?>
 