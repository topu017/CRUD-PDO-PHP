<?php
//including the database connection file
include("config.php");

//getting id from url
$id = $_GET['id'];


$sql = "DELETE FROM users WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

//redirecting to 'index.php'
header("Location:index.php");
?>