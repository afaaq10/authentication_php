<?php

include("database.php");

// $sql = "INSERT INTO userinfo (username,password) VALUES ('afaaq', 'sheikh11')";
$sql = "SELECT * FROM userinfo";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo $row['username'];
    }
}
mysqli_close($conn);
