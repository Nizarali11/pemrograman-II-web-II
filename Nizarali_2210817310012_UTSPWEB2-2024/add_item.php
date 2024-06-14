<?php
session_start();
$albums = intval($_SESSION['albums']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemNames = $_POST['itemName'];
    $itemPrices = $_POST['itemPrice'];
    $itemImages = $_FILES['itemImage'];

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    for ($i = 0; $i < $albums; $i++) {
        if (empty($itemNames[$i]) || empty($itemPrices[$i]) || empty($itemImages['name'][$i])) {
            $error = "Semua data album harus di isi";
        } else {
            $imageFileType = strtolower(pathinfo($itemImages['name'][$i], PATHINFO_EXTENSION));
            $validExtensions = array("jpg", "jpeg", "png", "gif");

            if (!in_array($imageFileType, $validExtensions)) {
                $error = "Hanya tipe file JPG, JPEG, PNG, ";
            }
        }
    }

    if (empty($error)) {
        for ($i = 0; $i < $albums; $i++) {
            $imageName = basename($itemImages['name'][$i]);
            $targetFile = $uploadDir . $imageName;

            if (move_uploaded_file($itemImages['tmp_name'][$i], $targetFile)) {
            } else {
                $error = "Gagal meng-upload gambar " . ($i + 1);
            }
        }
        if (empty($error)) {
            $_SESSION['items'] = [
                'names' => $itemNames,
                'prices' => $itemPrices,
                'images' => array_map(function($name) use ($uploadDir) { return $uploadDir . basename($name); }, $itemImages['name'])
            ];
            header("Location: view_item.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<div class="container">
<div class="box form-box">
    <header>Detail mixer</header>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                for ($i = 1; $i <= $albums; $i++) {
                    echo '
                    <div class="field input">
                        <label>Nama Mixer ' . $i . ':</label>
                        <input type="text" name="itemName[]"</br>
                    </div>
                    <div class="field input">
                        <label>Harga Mixer' . $i . ':</label>
                        <input type="number" name="itemPrice[]">
                    </div>
                    <div class="field input">
                        <label>Gambar Mixer ' . $i . ':</label>
                        <input type="file" name="itemImage[]" accept="image/*">
                    </div>';
                }
            ?>
            <div class="field input">
            <input type="submit" class="button" name="submit" value="Submit">
            </div>
        </form>
        <?php
            if (!empty($error)) {
                echo '<div class="error"><p>' . $error . '</p></div>';
            }
        ?>
    </div>
</body>
</html>