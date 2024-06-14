<?php require('./Model.php');
if (isset($_GET['id_buku'])) {
    EditBuku();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormBuku</title>
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

        input[type="text"] {
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
        <label for="judul">Judul Buku</label><br>
        <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required><br>

        <label for="penulis">Nama Penulis</label><br>
        <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required><br>
      
        <label for="penerbit">Penerbit</label><br>
        <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required><br>

        <label for="tahunterbit">Tahun Terbit</label><br>
        <input type="text" name="tahunterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required><br>

        <?php
            if (isset($_GET['id_buku'])) {
                echo "<button type=\"submit\" name=\"edit\">Update</button>";
            } else {
                echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
            }
        ?>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        AddBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunterbit']);
    }
    if (isset($_POST['edit'])) {
        UpdateBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunterbit']);
    }
    ?>
</body>
</html>
