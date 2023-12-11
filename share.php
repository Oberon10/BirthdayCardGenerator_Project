<?php 
include 'header.php';
include 'connect.php';
?>
<section id="About">
            <div class="container" style="padding-top: 2%;">
           <?php
           if(isset($_GET["celebrant_id"])){
           $celebrant_id = $_GET["celebrant_id"];
            $re = mysqli_query($conn, "SELECT * FROM celebrant where celebrant_id = '$celebrant_id' ");
            //celebrant_id`, `celebrant`, `sender`, `greeting`,
              $result3 = mysqli_fetch_assoc($re);
            $celebrant = $result3['celebrant'];
            $greeting = $result3['greeting'];
            $sender = $result3['sender'];
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
              <?php 
              $sql = mysqli_query($conn, "SELECT * FROM users where user_id = '$sender' ");
              $row = mysqli_fetch_assoc($sql);
              echo $row['fname'].' '.$row['lname']; 
              ?></p>
            </div>
            </div>
            <?php        
          mysqli_close($conn);
          
          }
           ?>
           <p>
            Copy the address and share
           <input type="" name="" class="form-control" value="<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    echo $url;  
  ?>">
          </p>
            </div>
        </section>