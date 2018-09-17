<?php

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
  <div class="wrapper">
    <form action="../lib/change.php" method="post" class="edit-form" enctype="multipart/form-data">
        <h1>Edit</h1>
        <label>Game auswählen:</label>
        <select name="selected_game">

            <?php 

            while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {
                $value= $rows['name'];
            ?>
                 <option value="<?= $value?>"><?= $value?></option>
                <?php } ?>

             </select>
        <label for="game-title">Title:</label>
        <input type="text" name="game-title" id="game-title" required />
        <label for="game-publisher">Publisher:</label>
        <input type="text" name="game-publisher" id="game-publisher" required />
        <label for="game-description">Description:</label>
        <input type="text" name="game-description" id="game-description" required />
        <label for="fileToUpload">Picture:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required/>

        <div class="button-container">
            <button class="cancel-button" type="reset">Cancel</button>
            <button class="submit-button" type="submit">Submit</button>
        </div>
    </form>
  </div>
</body>

</html>