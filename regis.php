<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #2c7be5;
            color: white;
            border: none;
            cursor: pointer;
        }

        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9f5ff;
            border: 1px solid #9acdf5;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form method="POST">
        <label>First Name:</label>
        <input type="text" name="firstName" required>

        <label>Middle Name:</label>
        <input type="text" name="middleName" required>

        <label>Last Name:</label>
        <input type="text" name="lastName" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label>Course:</label>
        <input type="text" name="course" required>

        <label>Year Level:</label>
        <input type="number" name="yearLevel" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <input type="submit" name="submit" value="Submit" class="btn">
    </form>

    <?php
    if (isset($_POST['submit'])) {

        // Convert user entries into variables
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $yearLevel = $_POST['yearLevel'];
        $email = $_POST['email'];

        // String formatting
        $fullName = strtoupper($lastName) . ", " . ucfirst(strtolower($firstName)) . " " . ucfirst(strtolower($middleName));
        $courseFormatted = strtoupper($course);
        $emailFormatted = strtolower($email);

        echo "<div class='output'>";
        echo "<h3>Student Information</h3>";
        echo "Full Name: " . $fullName . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Course: " . $courseFormatted . "<br>";
        echo "Year Level: " . $yearLevel . "<br>";
        echo "Email: " . $emailFormatted . "<br>";

        if ($age >= 18) {
            echo "Status: Adult Student<br>";
        } else {
            echo "Status: Minor Student<br>";
        }

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
