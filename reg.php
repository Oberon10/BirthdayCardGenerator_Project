<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<section id="reg">
    <div class="container">
        <h2>Registration</h2>
        <form class="row g-3">
            <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" required>
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" required>
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity" required>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <input type="text" class="form-control" id="inputState" required>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip" required>
          </div>
          <div class="col-md-4">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" required>
          </div>
          <div class="col-md-4">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" required>
          </div>
          <div class="col-md-4">
            <label for="inputCPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="inputCPassword" required>
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
 