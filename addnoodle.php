<?php
ob_start();
include_once 'dbconnect.php';

/* $addname = $_POST['name'];
$addtype = $_POST['type'];
$adddesc = $_POST['desc'];
$sql = "INSERT INTO noodles (name, type, description) VALUES ('$addname', '$addtype', '$adddesc');";
mysqli_query($conn, $sql);
*/
mysqli_close($conn);
echo "closing con";
header('Location: noodle.html');
ob_end_flush();
?>