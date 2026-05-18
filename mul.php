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
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1 - Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Activity 1: Student Information</h1>

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
</div>

</body>
</html>