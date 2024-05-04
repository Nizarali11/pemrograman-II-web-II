<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    #red {
        color : #FF0000;
    }
    #green {
        color : #008000;
    }
</style>
</head>
<body>
    <form method="POST">
        <label>Jumlah Peserta : </label>
        <input type="text" name="peserta"><br>
        <input type="submit" name="cetak" value="Cetak"><br>
    </form>
    <?php
        $jumlahpeserta = 0;
        $i = 1;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['peserta'])){
                $jumlahpeserta = htmlspecialchars($_POST['peserta']);
                while ($i <= $jumlahpeserta){
                    if($i % 2 == 0){
                        echo "<h1 id='green'>Peserta ke-$i<br></h1>";
                    } else {
                        echo "<h1 id='red'>Peserta ke-$i<br></h1>";
                    }
                    $i ++;
                }
            }
        }
    ?>
</body>
</html>