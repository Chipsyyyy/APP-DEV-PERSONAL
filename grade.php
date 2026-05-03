<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking</title>
    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 50px;
        }

        .box {
            background: #1e293b;
            padding: 30px;
            width: 350px;
            margin: auto;
            border-radius: 10px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background: #22c55e;
            color: white;
            border: none;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            background: #020617;
            padding: 15px;
        }

        img {
            width: 120px;
            margin-top: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Grade Ranking</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="number" name="grade" placeholder="Enter Grade" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <div class="result">
    <?php
    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $rank = "";

        if($grade >= 93 && $grade <= 100) $rank = "A";
        elseif($grade >= 90) $rank = "A-";
        elseif($grade >= 87) $rank = "B+";
        elseif($grade >= 83) $rank = "B";
        elseif($grade >= 80) $rank = "B-";
        elseif($grade >= 77) $rank = "C+";
        elseif($grade >= 73) $rank = "C";
        elseif($grade >= 70) $rank = "C-";
        elseif($grade >= 67) $rank = "D+";
        elseif($grade >= 63) $rank = "D";
        elseif($grade >= 60) $rank = "D-";
        else $rank = "F";

        echo "<h3>Name: $name</h3>";
        echo "<h3>Rank: $rank</h3>";
        echo "<h3>Grade: $grade</h3>";

        // sample picture (you can replace)
        echo "<img src='https://via.placeholder.com/120' alt='Student'>";
    }
    ?>
    </div>
</div>

</body>
</html>
