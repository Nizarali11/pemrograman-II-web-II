<?php
session_start();

$jumlah = "";
$jumlahErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["jumlah"])) {
      $jumlahErr = "* Jumlah item harus diisi";
    } else {
      $jumlah = test_input($_POST["jumlah"]);
      if ($jumlah  >= 7){
          $jumlahErr = "* Jumlah yang diinput melebihi maksimal item";
      }
    }

    if (empty($jumlahErr)) {
        $_SESSION['albums'] = $jumlah;
        header("Location: add_item.php"); 
        exit;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
    <link rel="stylesheet" href="create.css">
</head>

<body >
    
<div class="container">
<div class="box form-box">
    <header>Mixer</header>
    <form action="" method="POST">
        <div class="field input">
        Jumlah Mixer: <input type="number" name="jumlah"></br>
        <span class="error"><?php echo $jumlahErr;?></span>
        </div>
        <div class="field input">
        <input type="submit" class="button" name="submit" value="Tambah">
        </div>

    </form>
</div>
</div>
</body>
</html>