<?php
session_start();
if(isset($_SESSION['biodata'])) {
    $biodata = $_SESSION['biodata'];
} else {
    $biodata = array();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Biodata</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        .container {
        width: 600px;
        margin: 0 auto;
        margin-top: 60px;
        padding: 20px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        }

        h1 {
        margin-top: 0;
        padding-left: 30px;
        }

        .hasil {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: left;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        table td,
        table th {
        border: 1px solid #ccc;
        padding: 8px;
        }

        table th {
        background-color: #007bff;
        color: #fff;
        text-align: left;
        }

        table td {
        text-align: center;
        }

        a {
        color: #007bff;
        text-decoration: none;
        }

        a:hover {
        text-decoration: underline;
        }

        button[type="button"] {
        position: relative;
        left: 450px;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        }

        button[type="button"]:hover {
        background-color: #0062cc;
        }


    </style>
</head>
<body>
<div class="container">
  <h1>Hasil Biodata</h1>
  <div class="hasil">
    <p><strong>Nama:</strong> <?php echo $_SESSION['biodata']['nama_lengkap']; ?></p>
    <p><strong>Jenis Kelamin:</strong> <?php echo $_SESSION['biodata']['jenis_kelamin']; ?></p>
    <p><strong>Tempat Lahir:</strong> <?php echo $_SESSION['biodata']['tempat_lahir']; ?></p>
    <p><strong>Tanggal Lahir:</strong> <?php echo $_SESSION['biodata']['tanggal_lahir']; ?></p>
    <p><strong>Agama:</strong> <?php echo $_SESSION['biodata']['agama']; ?></p>
    <p><strong>Alamat:</strong> <?php echo $_SESSION['biodata']['alamat']; ?></p>
  </div>
  <button type="button" onclick="window.location.href='index.php'">Kembali</button>
</div>

</body>
</html>