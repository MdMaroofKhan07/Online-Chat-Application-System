<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<?php include_once "header.php"; ?>

<body>
  <link rel="stylesheet" href="css/index.css">
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          // Get user_id from URL and make it safe to use in database
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          // Execute SQL query to fetch details of the selected user from 'users' table using the unique_id
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          // If user found, store data in $row, otherwise redirect to users page
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <!-- Back button that redirects user to users.php page -->
        <a href="users.php" class="back-icon">
          <i class="fas fa-arrow-left"></i> <!-- Left arrow icon -->
        </a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <!-- Message sending form -->
      <form action="#" class="typing-area">

        <!-- Hidden field to store receiver's user ID -->
        <input type="text" class="incoming_id" name="incoming_id" 
           value="<?php echo $user_id; ?>" hidden>

        <!-- Input field where user types the message -->
        <input type="text" name="message" class="input-field" 
           placeholder="Type a message here..." autocomplete="off">

        <!-- Send button with Telegram icon -->
        <button>
          <i class="fab fa-telegram-plane"></i>
        </button>

      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
