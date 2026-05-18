<?php
$students = array(
    array("name" => "Julia Santos", "image" => "images/person10.png", "age" => 19, "birthday" => "May 18, 2007", "contact" => "09123456780"),
    array("name" => "Ana Reyes", "image" => "images/person1.png", "age" => 18, "birthday" => "January 12, 2008", "contact" => "09123456781"),
    array("name" => "Ivan Cruz", "image" => "images/person9.png", "age" => 20, "birthday" => "March 04, 2006", "contact" => "09123456782"),
    array("name" => "Ben Garcia", "image" => "images/person2.png", "age" => 19, "birthday" => "July 25, 2007", "contact" => "09123456783"),
    array("name" => "Grace Lopez", "image" => "images/person7.png", "age" => 18, "birthday" => "September 08, 2008", "contact" => "09123456784"),
    array("name" => "Daniel Flores", "image" => "images/person4.png", "age" => 21, "birthday" => "November 15, 2005", "contact" => "09123456785"),
    array("name" => "Ella Mendoza", "image" => "images/person5.png", "age" => 20, "birthday" => "April 20, 2006", "contact" => "09123456786"),
    array("name" => "Carla Dela Cruz", "image" => "images/person3.png", "age" => 19, "birthday" => "June 30, 2007", "contact" => "09123456787"),
    array("name" => "Hannah Bautista", "image" => "images/person8.png", "age" => 18, "birthday" => "October 11, 2008", "contact" => "09123456788"),
    array("name" => "Francis Ramos", "image" => "images/person6.png", "age" => 21, "birthday" => "December 02, 2005", "contact" => "09123456789")
);

usort($students, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});

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
    <title>M3 FA PHP Arrays and Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>PHP Arrays and Functions Activity</h1>

    <h2>Activity 1: Student Information</h2>

    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>

        <?php
        $count = 1;

        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $count . "</td>";
            echo "<td>" . $student["name"] . "</td>";
            echo "<td><img class='profile-img' src='" . $student["image"] . "'></td>";
            echo "<td>" . $student["age"] . "</td>";
            echo "<td>" . $student["birthday"] . "</td>";
            echo "<td>" . $student["contact"] . "</td>";
            echo "</tr>";

            $count++;
        }
        ?>
    </table>

    <h2>Activity 2: Array Numbers</h2>

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

    <h2>Activity 3: User Defined Function</h2>

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

    <h2>Question and Answer</h2>

    <div class="answer-box">

        <p>
            <b>1. For your understanding, what is an array?</b><br>
            An array is a special variable that can store many values in one name.
        </p>

        <p>
            <b>2. Differences between simple variable and a variable array?</b><br>
            A simple variable stores only one value, while an array can store many values.
        </p>

        <p>
            <b>3. Give an instance where you can use or apply an array.</b><br>
            I can use an array when storing a list of student names, ages, birthdays, and contact numbers.
        </p>

        <p>
            <b>4. What are the different array sorting? Describe each.</b><br>
            sort() sorts an array in ascending order. rsort() sorts an array in descending order.
            asort() sorts an associative array by value in ascending order. ksort() sorts an associative array by key in ascending order.
            arsort() sorts by value in descending order. krsort() sorts by key in descending order.
        </p>

        <p>
            <b>5. What is Function?</b><br>
            A function is a block of code that can be used again and again when it is called.
        </p>

        <p>
            <b>6. Give the different usage of functions.</b><br>
            Functions can make code shorter, reusable, organized, and easier to understand.
            They can also receive values through parameters and return answers.
        </p>

    </div>

</div>

</body>
</html>