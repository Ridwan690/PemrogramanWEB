<?php
    $mysqli = mysqli_connect('localhost', 'username', 'password', 'database');
    $result = $mysqli->query("SELECT * FROM mahasiswa");
    $row = $result->fetch_assoc();
?>