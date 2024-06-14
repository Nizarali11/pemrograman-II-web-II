<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    DeleteMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a1a1a, #333333);
        }

        .container {
            background: linear-gradient(135deg, #444, #888);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 800px; /* Lebar maksimum container */
            color: #fff;
        }

        .container table {
            border-collapse: collapse;
            width: 100%; /* Lebar tabel mengikuti lebar container */
        }

        .container td, .container th {
            border: solid 1px black; /* Batasan antara sel */
            padding: 10px;
        }

        .container th {
            background: linear-gradient(135deg, #444, #888); /* Latar belakang gradien */
        }

        .container a {
            text-decoration: none;
            color: inherit;
        }

        .container button {
            border: none;
            cursor: pointer;
            background: linear-gradient(135deg, #444, #888); /* Latar belakang gradien */
            color: #fff;
            border-radius: 5px;
            padding: 8px 16px;
            transition: background 0.3s ease;
        }

        .container button:hover {
            background: linear-gradient(135deg, #888, #444); /* Gradien saat dihover */
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="FormMember.php"><button>Tambah Data</button></a>
        <a href="index.php"><button>Kembali Ke Index</button></a>
        <br><br>
        <table>
            <tr>
                <th>Id Member</th>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Bayar</th>
                <th>Aksi</th>
            </tr>
            <?= GetAllData("member") ?>
        </table>
    </div>
</body>
</html>
