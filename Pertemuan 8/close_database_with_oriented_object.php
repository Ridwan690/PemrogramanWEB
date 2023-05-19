<?php
    $conn = new mysqli($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . $conn->connect->error);
    }

    echo "Connection successfully";
    $conn->close();
?>