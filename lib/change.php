<?php

require_once "../config/config.php";

$oldName = $_GET['oldName'];
$name = $_POST['game-title'];
$publisher = $_POST['game-publisher'];

// update functions for the games
$sql = "UPDATE game SET name=?, publisher=? WHERE name=?";

$stmt = mysqli_prepare($link, $sql);
$stmt->bind_param("sss", $name, $publisher, $oldName);
$stmt->execute();

header("location: ../public/index.php");

?>