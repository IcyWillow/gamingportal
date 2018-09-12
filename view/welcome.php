<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ./login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Gaming Portal</title>
    <link rel="stylesheet" href="../public/css/style.css" />

</head>
<body>
    <div class="page-header">
        <h1>
            Hello,
            <b>
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
            </b>. Welcome Gaming Portal.
        </h1>
    </div>
    <p>

        <a href="./logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

    <div class="content">
        <img src="" alt="search icon" />
        <input type="text" name="search" id="search" />
        <div class="add">
            <img src="" alt="add icon" />
            <p></p>
        </div>
        <div class="card-container"></div>
    </div>
</body>


</html>