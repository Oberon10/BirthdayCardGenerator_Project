<?php
session_start();
include 'connect.php';
$user_check = $_SESSION['user'];
$sql = "SELECT * FROM users where user_id = '$user_check' ";
          $result = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['user_id'];

          } else {
            header("Location: login.php");
          }