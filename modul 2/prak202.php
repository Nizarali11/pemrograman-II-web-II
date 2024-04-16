<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
    <style>
        .required {
            color: red;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="nama">Nama:<span class="required">*</span></label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="nim">NIM:<span class="required">*</span></label><br>
        <input type="text" id="nim" name="nim" required><br>
        <label>Jenis Kelamin:<span class="required">*</span></label><br>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
        <label for="laki-laki">Laki-laki</label><br>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        if (empty($nama)) {
            echo "<p class='error'>Error: Nama tidak boleh kosong!</p>";
        }
        if (empty($nim)) {
            echo "<p class='error'>Error: NIM tidak boleh kosong!</p>";
        }
        if (empty($jenis_kelamin)) {
            echo "<p class='error'>Error: Jenis kelamin tidak boleh kosong!</p>";
        }
        if (!empty($nama) && !empty($nim) && !empty($jenis_kelamin)) {
            echo "Nama: " . $nama . "<br>";
            echo "NIM: " . $nim . "<br>";
            echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
        }
    }
    ?>
</body>
</html>
