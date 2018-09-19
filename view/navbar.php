<?php
echo '
 <div class="topnav">';

 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     echo '<a class="login" href="../view/login.php">Login</a>';
 } else {
     echo '<a class="login" href="../view/logout.php">Logout</a>';
 }

 echo '<a href="../public/index.php">Home</a>
</div> ';
?>