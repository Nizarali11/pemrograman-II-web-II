
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    img {
        width : 16px;
        height : 16px;
    }
</style>
</head>
<body>
    <form method="POST">
        <label>Batas Bawah</label>
        <input type = "text" name = "bb">
        <br>
        <label>Batas Atas</label>
        <input type = "text" name = "ba">
        <br>
        <input type = "submit" name = "cetak" value = "Cetak">
    </form>

<?php
    $batasatas = NULL;
    $batasbawah = NULL;
    $starImg = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['bb'])){
            $batasbawah = htmlspecialchars($_POST['bb']);
        }
        if (isset($_POST['ba'])){
            $batasatas = htmlspecialchars($_POST['ba']);
        }
        do{
            if(($batasbawah+7) % 5 == 0){
                echo "<img src='$starImg'>";
            }
            else{
                echo $batasbawah;
            }
            echo " ";
            $batasbawah++;
        }while($batasbawah<=$batasatas);
    }
?>
</body>
</html>
