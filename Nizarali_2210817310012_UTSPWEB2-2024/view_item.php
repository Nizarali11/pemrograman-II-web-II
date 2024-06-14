<?php
session_start();
$items = $_SESSION['items'];

if (isset($_POST['back'])){
    session_unset();
    session_destroy();
    header('Location: create_item.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
<div class="nav">
    <div class="log">
        <?php if (isset($_SESSION['items'])): ?>
            <form method="post" action="">
                <input type="submit" class="button" name="back" value="Kembali">
            </form>
        <?php endif; ?>
    </div>
</div>
<div class="wrapper">
    <div class="container">     
    <?php
    for ($i = 0; $i < count($items['names']); $i++) {
        $data = [
            'nama' => htmlspecialchars($items['names'][$i]),
            'harga' => htmlspecialchars($items['prices'][$i]),
            'gambar' => htmlspecialchars($items['images'][$i])
            ];
        ?>
        <div class="box">
            <img src=" <?php echo $data['gambar']?>" alt="<?php echo $data['nama']?>">
            <h3><?php echo $data['nama']?></h3>
            <h4><?php echo $data['harga']?></h4>
        </div>
        
    <?php
    }
    ?>
    </div>
</div>
</body>
</html>
