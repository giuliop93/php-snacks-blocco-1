Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere
lo stesso numero più di una volta

<?php

$maxNumbers = 15;
$numbersList = [];

for ($i = i; $i <= 15; $i++) {
    $randomNumber = rand(1, 100);

    if(!in_array($randomNumber, $numbersList)){
        $numbersList[] = randomNumbers;
    } else {
        $i--;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    for($i = 1; $i < count($numbersList){

    }
    ?>
    </p>

</body>
</html>