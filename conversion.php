<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Measure Conversion Chart - Lengths (UK)</title>

<style>
    body {
        font-family: Arial;
        background: #f5f5f5;
    }

    .container {
        width: 800px;
        margin: 30px auto;
        background: white;
        padding: 20px;
        border: 2px solid black;
    }

    h2 {
        text-align: center;
        color: #4a6fa5;
        margin-bottom: 20px;
    }

    form {
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        padding: 8px;
        width: 150px;
    }

    button {
        padding: 8px 15px;
        background: #333;
        color: white;
        border: none;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
    }

    td {
        border: 1px solid gray;
        padding: 8px;
        text-align: center;
    }

    .header {
        background: yellow;
        font-weight: bold;
    }
</style>

</head>
<body>

<div class="container">
    <h2>MEASURE CONVERSION CHART – LENGTHS (UK)</h2>

    <form method="POST">
        <input type="number" name="value" placeholder="Enter value in meters" required step="any">
        <button type="submit" name="convert">Generate</button>
    </form>

<?php
if(isset($_POST['convert'])) {

    $m = $_POST['value'];

    // METRIC
    $cm = $m * 100;
    $mm = $m * 1000;
    $km = $m / 1000;

    // IMPERIAL
    $inch = $m * 39.3701;
    $ft = $m * 3.28084;
    $yd = $m * 1.09361;
    $mile = $m * 0.000621371;

    echo "<table>
        <tr class='header'><td colspan='4'>METRIC CONVERSIONS</td></tr>
        <tr>
            <td>1 centimetre</td><td>= 10 millimetres</td>
            <td>1 cm</td><td>= 10 mm</td>
        </tr>
        <tr>
            <td>1 decimetre</td><td>= 10 centimetres</td>
            <td>1 dm</td><td>= 10 cm</td>
        </tr>
        <tr>
            <td>1 metre</td><td>= 100 centimetres</td>
            <td>1 m</td><td>= 100 cm</td>
        </tr>
        <tr>
            <td>1 kilometre</td><td>= 1000 metres</td>
            <td>1 km</td><td>= 1000 m</td>
        </tr>
    </table>";

    echo "<table>
        <tr class='header'><td colspan='4'>IMPERIAL CONVERSIONS</td></tr>
        <tr>
            <td>1 foot</td><td>= 12 inches</td>
            <td>1 ft</td><td>= 12 in</td>
        </tr>
        <tr>
            <td>1 yard</td><td>= 3 feet</td>
            <td>1 yd</td><td>= 3 ft</td>
        </tr>
        <tr>
            <td>1 mile</td><td>= 1760 yards</td>
            <td>1 mi</td><td>= 1760 yd</td>
        </tr>
    </table>";

    echo "<table>
        <tr class='header'><td colspan='4'>METRIC -> IMPERIAL CONVERSIONS</td></tr>
        <tr>
            <td>$m m</td><td>= " . number_format($inch,5) . " inches</td>
            <td>$m m</td><td>= " . number_format($inch,5) . " in</td>
        </tr>
        <tr>
            <td>$m m</td><td>= " . number_format($yd,5) . " yards</td>
            <td>$m m</td><td>= " . number_format($yd,5) . " yd</td>
        </tr>
        <tr>
            <td>$m m</td><td>= " . number_format($mile,6) . " miles</td>
            <td>$m m</td><td>= " . number_format($mile,6) . " mi</td>
        </tr>
    </table>";

    echo "<table>
        <tr class='header'><td colspan='4'>IMPERIAL -> METRIC CONVERSIONS</td></tr>
        <tr>
            <td>1 inch</td><td>= 2.54 centimetres</td>
            <td>1 in</td><td>= 2.54 cm</td>
        </tr>
        <tr>
            <td>1 foot</td><td>= 30.48 centimetres</td>
            <td>1 ft</td><td>= 30.48 cm</td>
        </tr>
        <tr>
            <td>1 yard</td><td>= 91.44 centimetres</td>
            <td>1 yd</td><td>= 91.44 cm</td>
        </tr>
        <tr>
            <td>1 mile</td><td>= 1.60934 kilometres</td>
            <td>1 mi</td><td>= 1.60934 km</td>
        </tr>
    </table>";
}
?>

</div>
</body>
</html>
