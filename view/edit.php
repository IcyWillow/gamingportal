<?php
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./edit.css">
  <title>Game Portal</title>
</head>

<body>
    <form action="../lib/upload.php" method="post" class="edit-form" enctype="multipart/form-data">
        <h1>Create / Edit</h1>
        <label for="game-title">Title:</label>
        <input type="text" name="game-title" id="game-title" required />
        <label for="game-publisher">Publisher:</label>
        <input type="text" name="game-publisher" id="game-publisher" required />
        <label for="game-description">Description:</label>
        <input type="text" name="game-description" id="game-description" required />
        <label for="game-image">Picture:</label>
        <input type="file" name="fileToUpload" id="fileToUpload"    alt="game-image" required/>

        <div class="button-container">
            <button class="cancel-button" type="reset">Cancel</button>
            <button class="submit-button" type="submit">Submit</button>
        </div>
    </form>
</body>

</html>