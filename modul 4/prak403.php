<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
        <style>
        table, tr, td, th{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <tr style = "background-color:#A8A8A8"; >
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
            $all =[
                ["nomor" => 1, 
                "nama" => "Ridho", 
                "mata_kuliah" => [
                    ["nama_mk" =>"Pemrograman I", "sks" => 2], 
                    ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
                    ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
                    ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
                ]
                ],
        
                ["nomor" => 2, 
                "nama" => "Ratna", 
                "mata_kuliah" => [
                    ["nama_mk" =>"Basis Data I", "sks" => 2], 
                    ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
                    ["nama_mk" => "Kalkulus", "sks" => 3]
                ]
                ],
        
                ["nomor" => 3, 
                "nama" => "Tono", 
                "mata_kuliah" => [
                    ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], 
                    ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
                    ["nama_mk" => "Komputasi Awan", "sks" => 3], 
                    ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
                ]
                ]
            ];

            for ($i=0; $i < count($all); $i++) {
                $jmlSks = 0;
                for ($j=0; $j < count($all[$i]["mata_kuliah"]); $j++) { 
                    $jmlSks += $all[$i]["mata_kuliah"][$j]["sks"];
                }
                $all[$i]["jmlSks"] = $jmlSks;
                if ($all[$i]["jmlSks"] < 7) {
                    $all[$i]["keterangan"] = "<div style='background-color:#FF0000; '>Revisi KRS</div>";
                } else {
                    $all[$i]["keterangan"] = "<div style='background-color:#ACD1AF;'>Tidak Revisi</div>";
                }
            }

            for ($i=0; $i < count($all); $i++) {
                for ($j=0; $j < count($all[$i]["mata_kuliah"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$all[$i]["nomor"]."</td>";
                        echo "<td>".$all[$i]["nama"]."</td>";
                        echo "<td>".$all[$i]["mata_kuliah"][$j]["nama_mk"]."</td>";
                        echo "<td>".$all[$i]["mata_kuliah"][$j]["sks"]."</td>";
                        echo "<td>".$all[$i]["jmlSks"]."</td>";
                        echo "<td>".$all[$i]["keterangan"]."</td>";
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$all[$i]["mata_kuliah"][$j]["nama_mk"]."</td>";
                        echo "<td>".$all[$i]["mata_kuliah"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>