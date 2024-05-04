<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="kata">
        <input type="submit" name="submit" value="submit"><br>
    </form>
    <?php
    $kata = 0;
    $panjangkata = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['kata'])){
                $kata = htmlspecialchars($_POST['kata']);
            }
            $panjangkata = strlen($kata);
            $i = 0;

            echo "<h2>Input</h2>";
            echo "$kata";
            echo "<br>";
            echo "<h2>Output</h2>";

            while($i < $panjangkata){
                $j = $panjangkata;

                while($j > 0){
                    if ($j == $panjangkata){
                        echo strtoupper($kata[$i]);
                    } else echo strtolower($kata[$i]);
                    $j--;
                }

                $i++;
            }
        }
    ?>
</body>
</html>