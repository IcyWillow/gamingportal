<?php
// Initialize the session
session_start();

include_once '../view/navbar.php';

$authentication = true;

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $authentication = false;
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Gaming Portal</title>
  <link rel="stylesheet" href="../public/css/home.css" />
  <link rel="stylesheet" href="../public/css/navigation.css" />

</head>

<body>
  <header>
    <div class="bgImage"></div>
    <div class="headerContent">
      <!-- Not optimized gemäss Lehrperson -->
      <h1>Welcome <?php if($authentication) {echo  ucfirst(htmlspecialchars($_SESSION["username"])); } ?>!</h1>
      <img src="./images/logo.png">
    </div>
  </header>
  <div class="content">
      <form class="search" method="get">
          <input type="text" name="search" id="search" />
          <input type="image" src="./images/searchIcon.png" value="search" />
      </form>
      <a class="gameCard add" href="../view/create.php">
      <img src="./images/plusIcon.png" alt="add icon">
      <p id="createText">Create New</p>
    </a>
    <div class="card-container">
        <?php
        require_once '../controller/GameController.php';
 

      if (!empty($_REQUEST['search'])) {
  

          $search = new Game(null, null, null, null, null);
          $search->getGameByName($_REQUEST['search']);


      } else {

          $allGames = new Game(null, null, null, null, null);
          $allGames->listAllGames();
       
      }

        ?>
    </div>
  </div>
</body>

</html>