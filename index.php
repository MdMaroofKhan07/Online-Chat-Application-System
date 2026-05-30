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
    <section class="form signup">
      <header>Realtime Chat App</header>
       <!-- Form starts here:
       action="#" → submit to same page
       method="POST" → send data securely
       enctype="multipart/form-data" → required for file upload (image)
       autocomplete="off" → disables browser autofill -->
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
