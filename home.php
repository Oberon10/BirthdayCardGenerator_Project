<?php include 'session.php' ?>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>
        <section id="showcase">
            <div class="text-white">
                <h1>Create Personalized Birthday Cards</h1>
                <p>Welcome to our online platform where you can easily craft and customize beautiful birthday cards. Express your creativity by choosing from a variety of templates, adding heartfelt messages, and including images to make each card unique. Celebrate special moments with our user-friendly birthday card generator!
                </p>
            </div>
        </section>
        <section id="About">
            <div class="container" style="padding-top: 2%;">
                <center><h2>Welcome to Birthday Card Generator!</h2></center>
            <form style="margin-left: 20%; margin-right: 20%; height: 300px;" method="POST" action="b_generator.php">
            <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Celebrant</label>
                <div class="col-sm-10">
                <input type="text" Name="inputName" class="form-control" id="inputName" required>
                </div>
            </div>
            <div class="row mb-3">
                <?php
                $res = mysqli_query($conn, "SELECT * FROM greetings");
                // output data of each row
                while ( $result = mysqli_fetch_assoc($res)) {      
                ?>
             <input type="checkbox" id="wishes" name="wishes" value="<?php echo $result['id'];?>" class="form-check-input">
            <label for="wishes" class="form-check-label"><?php echo $result['greetings'];?> </label>
<?php
}
?>
            </div>
 
  <button type="submit" class="btn btn-primary">Generate</button>
  <a href="logout.php" class="btn btn-success">logout</a>
</form>
            </div>
        </section>
        
<?php include 'footer.php' ?>
 