<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
    <style>
        table, td, th {
            border: solid 1px black;
            border-collapse:collapse;
            text-align:left;
            padding: 5px 25px 5px 2px;
        }
        th {
            font-weight: bold;
        }


    </style>
</head>
<body>
    <table>
        <tr style = "background-color: 	#A8A8A8">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        
   

    <?php
        $nilai = [
            ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 90],
            ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
            ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
            ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
        ];



        for ($i=0; $i < count($nilai); $i++) { 
            $nilai[$i]["nilaiakhir"] = ($nilai[$i]["uts"] * 0.4) + ($nilai[$i]["uas"] * 0.6);
            if($nilai[$i]["nilaiakhir"] >= 80){
                $nilai[$i]["huruf"] = "A";
            }elseif($nilai[$i]["nilaiakhir"] >= 70 && $nilai[$i]["nilaiakhir"] <= 79){
                $nilai[$i]["huruf"] = "B";
            }elseif($nilai[$i]["nilaiakhir"] >= 60 && $nilai[$i]["nilaiakhir"] <= 69){
                $nilai[$i]["huruf"] = "C";
            }elseif($nilai[$i]["nilaiakhir"] >= 50 && $nilai[$i]["nilaiakhir"] <= 59){
                $nilai[$i]["huruf"] = "D";
            }elseif($nilai[$i]["nilaiakhir"] <= 49){
                $nilai[$i]["huruf"] = "E";
            }else{
                echo "Data Error";
            }
        }

        for ($i=0; $i < count($nilai); $i++) { 
            echo "<tr>";
            echo "<td>".$nilai[$i]["nama"]."</td>";
            echo "<td>".$nilai[$i]["nim"]."</td>";
            echo "<td>".$nilai[$i]["uts"]."</td>";
            echo "<td>".$nilai[$i]["uas"]."</td>";
            echo "<td>".$nilai[$i]["nilaiakhir"]."</td>";
            echo "<td>".$nilai[$i]["huruf"]."</td>";
            echo "</tr>";
        } 
    ?>
    </table>



</body>
</html>