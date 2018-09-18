<?php

/**
 * upload images for games.
 *
 *
 * @version 1.0
 * @author Willow
 *
 */

require_once "../config/config.php";

$target_dir = "../uploads/";
$pictureName = $_FILES["fileToUpload"]["name"];
$target_file = $target_dir . $pictureName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check is filename is too long
if (strlen($pictureName) > 100) {
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("location: ../view/upload-error.php");
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("location: ../public/index.php");

        $directory = $target_dir . $pictureName;

        //Prepare for insert:
        $sql = "INSERT INTO game (name, description, publisher, picture_directory) VALUES (?,?,?,?)";

        $stmt = mysqli_prepare($link, $sql);
        $stmt->bind_param("ssss", $_POST['game-title'], $_POST['game-description'], $_POST['game-publisher'], $directory);
        $stmt->execute();

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>