
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <style>
        table, td{
            border: solid 1px black;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label>Panjang: </label> 
        <input type = "text" name = "panjang">
        <br>
        <label>Lebar: </label>
        <input type="text" name="lebar">
        <br>
        <label>Nilai: </label>
        <input type="text" name="nilai">
        <br>
        <input type="submit" name="cetak" value="cetak">
        <br>
    </form>

    <?php
    $panjang = NULL;
    $lebar = NULL;
    $nilai = NULL;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['panjang'])){
            $panjang = htmlspecialchars($_POST['panjang']);
        }
        if (isset($_POST['lebar'])){
            $lebar = htmlspecialchars($_POST['lebar']);
        }
        if (isset($_POST['nilai'])){
            $nilai = htmlspecialchars($_POST['nilai']);
        }
        echo "<br>";

        $pemisah = explode(" ", $nilai);
        $panjangpemisah = count($pemisah);
        if($panjang * $lebar == $panjangpemisah){
            $varban = 0;
            for($i = 0; $i<$panjang; $i++){
                for($j=0; $j<$lebar; $j++){
                    $output[$i][$j] = $pemisah[$varban];
                    $varban++;
                }
            }

            echo "<table>";
            
            for($i = 0; $i<$panjang ; $i++){
            echo "<tr>";    
                for ($j = 0; $j < $lebar; $j++){
                    echo "<td>".$output[$i][$j]."</td>";
                }
            echo "</tr>";   
            }
            
            echo "</table>";

        }else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }

       
    }
    ?>
</body>
</html>
