<!DOCTYPE html>
<html>
<head>
    <title>Ejaan Bilangan</title>
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        .input-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post" class="form-container">
        <div class="input-container">
            <label for="bilangan">Masukkan Bilangan:</label>
            <input type="number" id="bilangan" name="bilangan" min="0" max="999">
        </div>
        <input type="submit" value="Konversi">
    </form>

    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST["bilangan"];
        echo ejaanBilangan($bilangan);
    }

    function ejaanBilangan($bilangan) {
        if ($bilangan >= 632) {
            return "Ratusan";
        } elseif ($bilangan >= 100) {
            return "Anda Menginput Melebihi Limit Bilangan";
        } elseif ($bilangan >= 20) {
            return "Puluhan";
        } elseif ($bilangan >= 10) {
            return "Belasan";
        } elseif ($bilangan > 1) {
            return "Satuan";
        } elseif ($bilangan > 0) {
            return "Nol";
        } else {
            return "Nol";
        }
    }
    ?>
    </div>
</body>
</html>
