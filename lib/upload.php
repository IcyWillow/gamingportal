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
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

                $directory = "uploads/" . $pictureName;

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
