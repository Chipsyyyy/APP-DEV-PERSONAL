<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$sum = 0;
$difference = $numbers[0];
$product = 1;
$quotient = $numbers[0];

foreach ($numbers as $index => $number) {
    $sum += $number;
    $product *= $number;

    if ($index > 0) {
        $difference -= $number;
        $quotient /= $number;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 2 - Array Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Activity 2: Array Numbers</h1>

    <table>
        <tr>
            <th colspan="2">
                Array List:
                <?php echo implode(", ", $numbers); ?>
            </th>
        </tr>

        <tr>
            <td>Addition</td>
            <td><?php echo $sum; ?></td>
        </tr>

        <tr>
            <td>Subtraction</td>
            <td><?php echo $difference; ?></td>
        </tr>

        <tr>
            <td>Multiplication</td>
            <td><?php echo $product; ?></td>
        </tr>

        <tr>
            <td>Division</td>
            <td><?php echo $quotient; ?></td>
        </tr>
    </table>
</div>

</body>
</html>