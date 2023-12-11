<?php include 'session.php' ?>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>

        <section id="About">
            <div class="container" style="padding-top: 2%;">
           <?php
           if($_SERVER["REQUEST_METHOD"] == "POST"){
            //`fname`, `lname`, `address`, `city`, `state`, `email`, `password`, `zip`)
            $celebrant = $_POST["inputName"];
            $greeting = $_POST["wishes"];
            $sender = $_SESSION['user_id'];
            $celebrant_id = mt_rand(111111111,999999999);;
            $sql2 = "INSERT INTO celebrant (celebrant_id, celebrant, greeting, sender)
        VALUES ('$celebrant_id','$celebrant', '$greeting', '$sender')";
          if (mysqli_query($conn, $sql2)) {
            echo "<h2>Birthday Card Generated!</h2>";

            ?>
            <div style="background: url('frame/Celebrationv2.jpg'); background-repeat: no-repeat; background-size: cover; padding-bottom: 5%; padding-top: 20%; width: 70%;">
              <div style="padding-top: 10%; padding-left: 40%; padding-right: 10%; padding-bottom: 40%; font-size: 30px; font-weight: bold;">
             Happy Birthday <?php echo $celebrant; ?>
              <?php
              $res = mysqli_query($conn, "SELECT * FROM greetings where id = '$greeting' ");
              $result = mysqli_fetch_assoc($res);
                 echo $result['greetings'];        
              ?>
              <br><br>
              <p align="right">From
              <br> 
              <?php echo $row['fname'].' '.$row['lname']; ?></p>
            </div>
            </div>
            <?php
            
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
          mysqli_close($conn);
          
          }
           ?>
           <p align="right">
           <a href="share.php?celebrant_id=<?php echo $celebrant_id; ?>" class="btn btn-info">Share the Card</a>
            </div>
          </p>
        </section>
        
<?php include 'footer.php' ?>
 