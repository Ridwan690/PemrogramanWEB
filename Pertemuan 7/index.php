<?php
session_start();
if(isset($_COOKIE['nama']) && isset($_COOKIE['jeniskelamin']) && isset($_COOKIE['tempatlahir']) && isset($_COOKIE['tanggallahir']) && isset($_COOKIE['agama']) && isset($_COOKIE['alamatlengkap'])) {
    $cookie_data = array(
        'nama' => $_COOKIE['nama'],
        'jeniskelamin' => $_COOKIE['jeniskelamin'],
        'tempatlahir' => $_COOKIE['tempatlahir'],
        'tanggallahir' => $_COOKIE['tanggallahir'],
        'agama' => $_COOKIE['agama'],
        'alamatlengkap' => $_COOKIE['alamatlengkap']
    );
} else {
    $cookie_data = array();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['biodata'] = $_POST;
    $cookie_data = $_POST;
    setcookie('cookie_biodata', json_encode($cookie_data), time() + (86400 * 30), "/");
    header('Location: hasil.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        .container {
        width: 600px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 20px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        }

        h1 {
        margin: 0 auto;
        margin-top: 0;
        padding-left: 30px;
        font-size: 50px;
        }

        p {
            padding-left: 30px;
        }

        form {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: left;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        }

        label {
        padding: 5px;
        min-width: 120px;
        margin-right: 10px;
        margin-bottom: 0;
        font-weight: bold;
        }

        input[type="text"],
        textarea {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        }

        input[type="date"] {
        width: 200px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        color: #333;
        font-size: 16px;
        }

        select {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        }

        button[type="submit"] {
        width: 100px;
        position: relative;
        left: 420px;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        }

        button[type="submit"]:hover {
        background-color: #0062cc;
        }


    </style>
</head>
<body>
    <div class="container">
    <h1>ADD BIODATA</h1>
    <p>Silahkan Masukan Data diri anda di bawah ini </p>
    <form id="biodata-form" method="post" action="submit.php" onsubmit="submitForm(); return false;">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Nama Lengkap"><br>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih jenis kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required placeholder="Tempat Lahir"><br>

        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

        <label>Agama:</label>
        <select name="agama" required>
            <option value="">Pilih Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select><br>


        <label for="alamat">Alamat Lengkap</label>
        <textarea id="alamat" name="alamat" rows="4" required placeholder="Alamat Lengkap"></textarea><br>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
function submitForm() {
    if (confirm("Anda Akan Menambahkan Data Biodata Baru", "Tambah Biodata")) {
        window.location.href = "hasil.php";
    }
}
</script>

</body>
</html>
