<?php
// Initialize the session
session_start();

$authentication = true;

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $authentication = false;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Gaming Portal</title>
</head>

<body>
  <header>
      <!-- Not optimized gemäss Lehrperson -->
    <?php if(!$authentication) {echo '<a href="./src/login.php">Login</a>';} else {echo '<a href="./src/logout.php">Logout</a>';} ?>
    <h1>Welcome <?php if($authentication) {echo ucfirst(htmlspecialchars($_SESSION["username"])); } else {echo "not logged person";} ?>!</h1>
    <h2>to Gaming Portal</h2>
  </header>
  <div class="content">
    <img src="./media/searchIcon.png" alt="search icon">
    <input type="text" name="search" id="search">
    <div class="add">
      <img src="./media/plusIcon.png" alt="add icon">
      <p></p>
    </div>
    <div class="card-container">
    </div>
  </div>
</body>

</html>