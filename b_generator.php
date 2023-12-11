<?php include 'session.php' ?>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>

        <section id="About">
            <div class="container" style="padding-top: 2%;">
                <center><h2>Welcome to Birthday Card Generator!</h2></center>
            
           <?php
           if($_SERVER["REQUEST_METHOD"] == "POST"){
            //`fname`, `lname`, `address`, `city`, `state`, `email`, `password`, `zip`)
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            
            
          if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
          mysqli_close($conn);
          
          }
           ?>
            <div id="card">

            </div>
  <a href="logout.php" class="btn btn-success">logout</a>
            </div>
        </section>
        
<?php include 'footer.php' ?>
 