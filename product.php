<?php

$user = "Jeanne";
$greet = "Hello!!";

if ($user) {
    $greet = "Hello, " . $user . "!!";
}

$product = "Caramel Macchiato";
$cost = 215;
$totals = [];

for ($i = 1; $i <= 2; $i++) {
    $subtotal = $cost * $i;
    $discount = ($cost / 100) * ($i * 4);
    $totals[$i] = $subtotal - $discount;
}
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
            <h1><?= $greet ?></h1>
            <h2><?= $product ?> - Discount Table (1-2 orders only)</h2>

            <table border="1" cellpadding="10" class="prod-table">
                <tr>
                    <th>Quantity</th>
                    <th>Price after Discount</th>
                </tr>

                <?php foreach($totals as $quantity => $price): ?>
                <tr> 
                    <td>
                        <?= $quantity ?> pack <?= ($quantity == 1) ? "" : "s" ?>
                    </td>
                    <td>P<?= number_format($price, 2) ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>