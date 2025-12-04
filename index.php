<?php

$user = "Jeanne";
$pagbati = "Hello, " . $user . "!";
$offer = [
    "Caramel Macchiato",
    2,
    120,
    95
];

$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $reg_price - $offer_price;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kopi shop</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php require "header.php"; ?>
        <div class="container">
            <h1><?= $pagbati ?></h1>
            <p>
                Buy <?= $offer[1] ?> <?= $offer[0] ?> and enjoy big savings!
            </p>
            <p>
                Discounted price: P<?= $offer_price ?>
                Regular price: P<?= $reg_price ?>
            </p>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>
