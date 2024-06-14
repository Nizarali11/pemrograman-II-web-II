<?php require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    EditPeminjaman();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormPeminjaman</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a1a1a, #333333);
        }

        form {
            background: linear-gradient(135deg, #444, #888);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            color: #fff;
        }

        input[type="text"],
        input[type="date"] {
            width: calc(100% - 22px);
            padding: 8px;
            margin: 6px 0;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: #fff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, #444, #888);
            color: #fff;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }

        button:hover {
            background: linear-gradient(135deg, #888, #444);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="id_member">Id Member</label><br>
        <input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required><br>

        <label for="id_buku">Id Buku</label><br>
        <input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required><br>
 
        <label for="tgl_pinjam">Tanggal Peminjaman</label><br>
        <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required><br>

        <label for="tgl_kembali">Tanggal Kembali</label><br>
        <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required><br>

        <?php
        if (isset($_GET['id_peminjaman'])) {
            echo "<button type=\"submit\" name=\"update\">Update</button>";
        } else {
            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
        }
        ?>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        AddPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        UpdatePeminjaman($_GET['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
</body>
</html>
