<?php

require_once "../config/config.php";

$id = $_GET['id'];

$sql = "DELETE FROM game WHERE id=?";

$stmt = mysqli_prepare($link, $sql);
$stmt->bind_param("s", $id);
$stmt->execute();

header("location: ../public/index.php");

?>