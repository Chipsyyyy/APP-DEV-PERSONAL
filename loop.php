<!DOCTYPE html>
<html>
<head>
    <title>Two Digit Combination</title>
    <style>
        body {
            font-family: Arial;
            background: #111827;
            color: white;
            padding: 30px;
        }

        .box {
            background: #1f2937;
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        .output {
            margin-top: 20px;
            line-height: 1.8;
            word-wrap: break-word;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Two-Digit Combinations</h2>

    <div class="output">
        <?php
        for($i = 0; $i <= 99; $i++) {

            // format to 2 digits (00, 01, etc.)
            if($i < 10) {
                echo "0$i, ";
            } else {
                echo "$i, ";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
