<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    img {
        width : 64px;
        height : 64px;
    }
        <?php
        if(isset($_POST['submit']) || $_POST['bintang'] > 1){
            echo "#main { display : none ;}";
        }
    ?>
    </style>
</head>
<body>
    
<form id="main" method="POST" >
        <label>Jumlah bintang</label>
        <input type="text" name="bintang"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
    <?php
        $bintang = 0;
        $bintangImg = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['bintang'])){
                $bintang = $_POST['bintang'];
            }
            if(isset($_POST['tambah'])){
                $bintang = $_POST['bintang'];
                $bintang ++;
            }
            if(isset($_POST['kurang'])){
                $bintang = $_POST['bintang'];
                $bintang --;
            }

            
            $i = 0;
            if($bintang > 0){
                echo "Jumlah bintang $bintang <br>";
                while ($i < $bintang){
                    echo "<img src='$bintangImg'>  ";
                    $i ++;
                }
    ?>
            <form method="POST">
                <input type="submit" name="tambah" value="Tambah">
                <input type="submit" name="kurang" value="Kurang"><br>
                <input type="text" name="bintang" value="<?php echo $bintang ?>" hidden>
            </form>
    <?php
            }
        }
    ?>
</body>
</html>