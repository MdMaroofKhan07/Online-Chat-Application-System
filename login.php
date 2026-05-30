<?php 
  session_start(); // Start session
  if(isset($_SESSION['unique_id'])){ // If user is already logged in, redirect to users page
    header("location: users.php");
  }
?>

<!-- Insert the contents of header.php file here, but only once. -->
<?php include_once "header.php"; ?>

<body>
  <link rel="stylesheet" href="css/index.css">
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <!-- Form starts here:
       action="#" → submit to same page
       method="POST" → send data securely
       enctype="multipart/form-data" → required for file upload (image)
       autocomplete="off" → disables browser autofill -->
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
