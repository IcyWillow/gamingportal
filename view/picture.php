<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Gaming Portal</title>
</head>

<body>

    <form action="../lib/upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <input type="submit" value="Upload Image" name="submit" />
    </form>

 
</body>

</html>