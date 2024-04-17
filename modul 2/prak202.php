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
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <?php
    $error_nim = $error_nama = $error_kelamin = '';
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        if(empty($_POST['nama'])){
            $error_nama = "nama tidak boleh kosong";
        }
        
        if(empty($_POST['nim'])){
            $error_nim = "nim tidak boleh kosong";
        }

        if(empty($_POST['jenis_kelamin'])){
            $error_kelamin = "jenis kelamin tidak boleh kosong";
        }
}

    ?>
    <div class="container">
        <form method="post" action="">
            <div class="input-container">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama">
                <span class="required">*</span>
                <span class="error" id="nama-error"></span>
            </div>
            <div class="input-container">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim">
                <span class="required">*</span>
                <span class="error" id="nim-error"></span>
            </div>
            <label>Jenis Kelamin:<span class="required">*</span><span class="error" id="jenis-kelamin-error"></span></label><br>
            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
            <label for="laki-laki">Laki-laki</label><br>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        if(isset($_POST['jenis_kelamin'])){
            $jenis_kelamin = $_POST['jenis_kelamin'];
        }

        $error = false;
        if (empty($nama)) {
            $error = true;
            $namaError = "Nama tidak boleh kosong!";
        }
        if (empty($nim)) {
            $error = true;
            $nimError = "NIM tidak boleh kosong!";
        }
        if (empty($jenis_kelamin)) {
            $error = true;
            $jenisKelaminError = "Jenis kelamin tidak boleh kosong!";
        }

        if ($error) {
            if(!empty($namaError)){
                echo "<script>document.getElementById('nama-error').innerHTML = '" . $namaError . "';</script>";
            }
            if (!empty($nimError)) {
                echo "<script>document.getElementById('nim-error').innerHTML = '" . $nimError . "';</script>";
            }
            if (!empty($jenisKelaminError)) {
                echo "<script>document.getElementById('jenis-kelamin-error').innerHTML = '" . $jenisKelaminError . "';</script>";
            }
        } else {
            echo "Nama: " . $nama . "<br>";
            echo "NIM: " . $nim . "<br>";
            echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
        }
    }
    ?>
</body>
</html>