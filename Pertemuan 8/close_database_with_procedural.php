<?php
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    echo "Connection successfully";
    mysqli_close($conn);

    try {
        $conn = new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
    } catch (PDOException $exception) {
        die("Error Koneksi ke database $dbname : " . $exception->getMessage());
    } 
?>