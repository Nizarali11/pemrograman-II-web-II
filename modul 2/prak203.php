<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>

    <style>
        .form-control {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        <div class="form-control">
            <label for="nilai">Nilai:</label>
            <input type="text" id="nilai" name="nilai" required>
        </div>
        <label>Dari:</label><br>
        <div class="form-control">
            <input type="radio" id="C" name="dari_suhu" value="C">
            <label for="C">Celcius</label>
        </div>
        <div class="form-control">
            <input type="radio" id="F" name="dari_suhu" value="F">
            <label for="F">Fahrenheit</label>
        </div>
        <div class="form-control">
            <input type="radio" id="Re" name="dari_suhu" value="Re">
            <label for="Re">Reamur</label>
        </div>
        <div class="form-control">
            <input type="radio" id="K" name="dari_suhu" value="K">
            <label for="K">Kelvin</label>
        </div>
        <label>Ke:</label><br>
        <div class="form-control">
            <input type="radio" id="C2" name="ke_suhu" value="C">
            <label for="C2">Celcius</label>
        </div>
        <div class="form-control">
            <input type="radio" id="F2" name="ke_suhu" value="F">
            <label for="F2">Fahrenheit</label>
        </div>
        <div class="form-control">
            <input type="radio" id="Re2" name="ke_suhu" value="Re">
            <label for="Re2">Reamur</label>
        </div>
        <div class="form-control">
            <input type="radio" id="K2" name="ke_suhu" value="K">
            <label for="K2">Kelvin</label>
        </div>
        <input type="submit" value="Konversi">
    </form>

<?php
function konversi_suhu($nilai, $dari_suhu, $ke_suhu) {
    switch ($dari_suhu) {
        case "C":
            if ($ke_suhu == "F") {
                return ($nilai * 9/5) + 32;
            } elseif ($ke_suhu == "Re") {
                return $nilai * 4/5;
            } elseif ($ke_suhu == "K") {
                return $nilai + 273.15;
            }
            break;
        case "F":
            if ($ke_suhu == "C") {
                return ($nilai - 32) * 5/9;
            } elseif ($ke_suhu == "Re") {
                return ($nilai - 32) * 4/9;
            } elseif ($ke_suhu == "K") {
                return ($nilai - 32) * 5/9 + 273.15;
            }
            break;
        case "Re":
            if ($ke_suhu == "C") {
                return $nilai * 5/4;
            } elseif ($ke_suhu == "F") {
                return $nilai * 9/4 + 32;
            } elseif ($ke_suhu == "K") {
                return $nilai * 5/4 + 273.15;
            }
            break;
        case "K":
            if ($ke_suhu == "C") {
                return $nilai - 273.15;
            } elseif ($ke_suhu == "F") {
                return ($nilai - 273.15) * 9/5 + 32;
            } elseif ($ke_suhu == "Re") {
                return ($nilai - 273.15) * 4/5;
            }
            break;
    }
    return "Konversi tidak valid";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];
    $dari_suhu = $_POST['dari_suhu'];
    $ke_suhu = $_POST['ke_suhu'];

    $hasil_konversi = konversi_suhu($nilai, $dari_suhu, $ke_suhu);
    echo "Hasil Konversi: " . $hasil_konversi . " °F";
}
?>
</body>
</html>