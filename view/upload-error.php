<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/error.css">
  <link rel="stylesheet" href="../public/css/navigation.css">
  <title>Gaming Portal</title>
</head>

<body>
<?php
  require_once "../lib/verifySession.php";
  include_once '../view/navbar.php';
?>
<div class="wrapper">
<h1>Error</h1>
  <p>There is an error occured, reasons for this could be:</p>
  <ul>
    <li>The file is not an image</li>
    <li>This file already exists</li>
    <li>The filename is too long</li>
  </ul>
  <a class="back" href="../view/create.php">Back to create</a>
</div>
</body>

</html>