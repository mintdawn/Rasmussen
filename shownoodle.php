<?php
include_once 'dbconnect.php';
    $query = "SELECT * FROM noodles";
    mysqli_query($conn, $query) or die('Error querying database.');

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
     echo $row['id'] . ' ' . $row['name'] . ': ' . $row['type'] . ' - ' . $row['description'] .'<br />';
     echo '<br />';
    }
    mysqli_close($conn);
    ?>