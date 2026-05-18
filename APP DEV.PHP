<?php
function calculateValues($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $difference = $num1 - $num2 - $num3;
    $product = $num1 * $num2 * $num3;
    $quotient = $num1 / $num2 / $num3;

    return array($sum, $difference, $product, $quotient);
}

$param1 = 25;
$param2 = 13;
$param3 = 6;

$answers = calculateValues($param1, $param2, $param3);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 3 - User Defined Function</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Activity 3: User Defined Function</h1>

    <table>
        <tr>
            <th colspan="2">
                My Parameter Values:
                <?php echo $param1 . ", " . $param2 . ", " . $param3; ?>
            </th>
        </tr>

        <tr>
            <td>Addition</td>
            <td><?php echo $answers[0]; ?></td>
        </tr>

        <tr>
            <td>Subtraction</td>
            <td><?php echo $answers[1]; ?></td>
        </tr>

        <tr>
            <td>Multiplication</td>
            <td><?php echo $answers[2]; ?></td>
        </tr>

        <tr>
            <td>Division</td>
            <td><?php echo $answers[3]; ?></td>
        </tr>
    </table>
</div>

</body>
</html>