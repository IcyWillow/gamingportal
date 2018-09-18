<?php
require_once "../lib/verifySession.php";
require_once "../config/config.php";

$name = $_GET['name'];
$publisher = $_GET['publisher'];
$imgSrc = $_GET['image-src'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/forms.css">
    <link rel="stylesheet" href="../public/css/navigation.css">
    <title>Game Portal</title>
</head>
<body>
<?php
  include_once '../view/navbar.php';
?>
    <div class="wrapper w-blue">
        <h1>Edit</h1>
        <form action="../lib/change.php?oldName=<?php echo $name ?>" method="post" class="edit-form" enctype="multipart/form-data">
            <section class="form-group">
                <label for="game-title">Title:</label>
                <input class="form-control f-blue" type="text" name="game-title" id="game-title" value="<?php echo $name ?>" required />
                <label for="game-publisher">Publisher:</label>
                <input class="form-control f-blue" type="text" name="game-publisher" id="game-publisher" value="<?php echo $publisher ?>" required />
            </section>
            <div class="form-group">
                <a class="blue-cancel-button button-link" href="../public/index.php">Cancel</a>
                <button class="blue-submit-button" type="submit">Submit</button>
            </div>
        </form>
        </div>
</body>
</html>