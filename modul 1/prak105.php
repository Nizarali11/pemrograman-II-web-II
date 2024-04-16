<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000; 
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: red; 
            color: black; 
        }
    </style>
</head>
<body>

<table>
  <tr>
    <th>Daftar Smartphone Samsung</th> 
  </tr>

<?php
$dataArray = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover5");

foreach ($dataArray as $data) {
    echo "<tr><td>$data</td></tr>";
}
?>

</table>

</body>
</html>
