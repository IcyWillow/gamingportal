
<style>
    .topnav {
        background-color: #2BBBE9;
        overflow: hidden;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        float: right;
    }

        .topnav a:hover {
            background-color: #dd8a2b;
            color: white;
        }

</style>

<?php


echo '
 <div class="topnav">';

 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     echo '<a href="/view/login.php">Login</a>';
 } else {
     echo '<a href="/view/logout.php">Logout</a>';
 }


 echo '<a href="/public/index.php">Home</a>
</div> ';

?>