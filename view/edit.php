<?php
require_once "../lib/verifySession.php";
require_once "../config/config.php";

$query= $link->query("SELECT name FROM game");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Game Portal</title>
</head>
<body>
    <div class="wrapper w-blue">
        <h1>Edit</h1>
        <form action="../lib/upload.php" method="post" class="edit-form" enctype="multipart/form-data">
            <section class="form-group">
                <label for="game-title">Title:</label>
                <input class="form-control f-blue" type="text" name="game-title" id="game-title" required />
                <label for="game-publisher">Publisher:</label>
                <input class="form-control f-blue" type="text" name="game-publisher" id="game-publisher" required />
                <label for="game-description">Description:</label>
                <input class="form-control f-blue" type="text" name="game-description" id="game-description" required />
                <label for="fileToUpload">Picture:</label>
                <input class="form-control f-blue" type="file" name="fileToUpload" id="fileToUpload" required />
            </section>
            <div class="form-group">
                <a class="blue-cancel-button button-link" href="../public/index.php" type="reset">Cancel</a>
                <button class="blue-submit-button" type="submit">Submit</button>
            </div>
        </form>
        </div>
</body>
</html>