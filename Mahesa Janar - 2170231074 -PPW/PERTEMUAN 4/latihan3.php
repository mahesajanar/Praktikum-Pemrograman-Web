<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Tipe</title>
</head>
<body>
    <?php
    $a = 300.4;
    echo $a;
    echo "<br>";
    echo "Tipe Double : ", doubleval($a), "<br>";
    echo "Tipe Integer : ", intval($a), "<br>";
    echo "Tipe String : ", strval($a), "<br>";
    ?>
</body>
</html>