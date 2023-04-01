<?php
include("../php/psignup.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | My Website</title>
    <link rel="stylesheet" href="../css/signup.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
   
  </head>

  <body>
  <?php include('header.php'); ?>


    <main>
      <form id="signup-form" method="POST" action="psignup.php">
        <?php include('../php/errors.php')?>
        <h2>Create An Account</h2>

       <label for="name">Name</label>
       <input type="text" id="username" name="username" placeholder="Your name" value="<?php echo $username; ?>" required />
       
       <label for="email">Email address</label>
       <input type="email" id="email" name="email" placeholder="Email address" value="<?php echo $email; ?>" required />
       
       <label for="password">Password</label>
       <input type="password" id="password" name="password" placeholder="Password" minlength="6" required />
       

        <p>
          By clicking Sign Up, you agree to our 
          <a href="#">Terms of Use</a> and 
          <a href="#">Privacy Policy</a>
        </p>

        <button type="submit" id="signup-btn">Sign Up</button>

        <p>Already have an account? <a href="../html/login.php">Log in</a></p>

        <div class="sustainability-message">
          <span>♻️</span> 
          We believe in sustainability! Your privacy and data are important to us, 
          so we don't sell them to third parties.
        </div>
      </form>
    </main>

    <script src="../js/signup.js"></script>
  </body>
</html>






