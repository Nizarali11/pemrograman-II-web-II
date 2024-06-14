<?php require('./Model.php');
if (isset($_GET['id_member'])) {
    EditMember();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormMember</title>
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
        textarea,
        input[type="datetime-local"],
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
        <label for="nama_member">Nama</label><br>
        <input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required><br>

        <label for="nomor_member">Nomor Member</label><br>
        <input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required><br>
 
        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" cols="30" rows="10" required><?php echo (isset($_GET['id_member'])) ?  $result[0]["alamat"]  : ""; ?></textarea><br>
  
        <label for="tgl_daftar">Tanggal Mendaftar</label><br>
        <input type="datetime-local" name="tgl_daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "" : "value = '' "; ?> required><br>

        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label><br>
        <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br>

        <?php
        if (isset($_GET['id_member'])) {
            echo "<button type=\"submit\" name=\"update\">Update</button>";
        } else {
            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
        }
        ?>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar, "Y-m-d H:i:s");
        AddMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        UpdateMember($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    ?>
</body>
</html>
