<?php
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Game Portal</title>
</head>

<body>
  <div class="wrapper w-orange">
    <form action="../lib/upload.php" method="post" class="edit-form" enctype="multipart/form-data">
      <h1>Create / Edit</h1>
      <section class="form-group">
        <label for="game-title">Title:</label>
        <input class="form-control f-orange" type="text" name="game-title" id="game-title" required />
        <label for="game-publisher">Publisher:</label>
        <input class="form-control f-orange" type="text" name="game-publisher" id="game-publisher" required />
        <label for="game-description">Description:</label>
        <input class="form-control f-orange" type="text" name="game-description" id="game-description" required />
        <label for="fileToUpload">Picture:</label>
        <input class="form-control f-orange" type="file" name="fileToUpload" id="fileToUpload" required />
      </section>


      <div class="form-group">
        <button class="cancel-button" type="reset">Cancel</button>
        <button class="b-orange h-orange" type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>