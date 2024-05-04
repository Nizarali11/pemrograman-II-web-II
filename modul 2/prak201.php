<!DOCTYPE html>
<html>
<head>
    <title>Urutkan Nama</title>
</head>
<body>
    <form method="post" action="PRAK201.php">
        <label for="nama1">Nama 1:</label>
        <input type="text" id="nama1" name="nama1"><br>
        <label for="nama2">Nama 2:</label>
        <input type="text" id="nama2" name="nama2"><br>
        <label for="nama3">Nama 3:</label>
        <input type="text" id="nama3" name="nama3"><br>
        <input type="submit" value="Urutkan Nama">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    $nama = array($nama1, $nama2, $nama3);

    sort($nama, SORT_STRING | SORT_FLAG_CASE);

    echo "Output: <br>";
    for ($i = 0; $i < count($nama); $i++) {
        echo $nama[$i] . "<br>";
    }
}
?>
</body>
</html>