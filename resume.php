<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Nieves Resume</title>

<?php
$name = "Sam Kenneth P. Nieves";
$title = "2nd Year BS in Information Technology Web and Mobile Application at FEU Tech";
$email = "samnieves1206@email.com";
$phone = "09513506316";
$location = "Mandaluyong City, Philippines";

$about = "I am Sam Nieves, a second-year Bachelor of Science in Information Technology student at FEU Institute of Technology. I have a strong interest in software development and front-end design, with skills in C++, Python, HTML, CSS, and JavaScript. I enjoy building practical systems such as navigation apps and reservation systems, focusing on functionality and user experience.
I am a motivated and detail-oriented individual with strengths in problem-solving, communication, and critical thinking. I am eager to learn new technologies and continuously improve my skills to become a competent and reliable IT professional.";

$skills = ["HTML", "CSS", "JavaScript", "PHP", "MySQL","C++", "Java" ];

$education = [
"BS Information Technology - FEU Institute of Technology (2024 - Present)",
"Balungao National High School TVL ICT (2022 - 2024)"
];

$projects = [
   [
       "title" => "SMapa - Mall Navigation App",
       "desc" => "Developed a front-end navigation system designed to help users locate stores inside a mall. Focused on user-friendly interface design and smooth navigation flow using HTML, CSS, and JavaScript."
   ],
   [
       "title" => "Movie Seat Reservation System (C++)",
       "desc" => "Built a console-based system with features such as seat reservation, cancellation, search, and waiting list. Implemented data structures like linked lists, stack, and queue, with file handling for saving and loading data."
   ],
   [
       "title" => "Inventory Management System (C++)",
       "desc" => "Created a system that manages product records, including add, update, delete, and sales tracking features. Ensured proper data validation and organized file storage."
   ],
   [
       "title" => "TAMbayan -  Student Community Platform (Front-End)",
       "desc" => "Designed and developed a multi-page interactive website inspired by social platforms. Implemented features like posting, group creation, and simulated chat using HTML, CSS, and JavaScript."
   ]
];

?>

<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: #f4f6f9;
    }

.container {
    max-width: 800px;
    margin: 40px auto;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    overflow: hidden;
}

.header {
    background: linear-gradient(135deg, #000000, #000000);
    color: white;
    padding: 30px;
    text-align: center;
}

.header h1 {
    margin: 0;
}

.content {
    padding: 25px;
}

.section {
    margin-bottom: 20px;
}

.section h2 {
    border-left: 4px solid #000000;
    padding-left: 10px;
}

.tag {
    display: inline-block;
    background: #e0f7ff;
    color: #000000;
    padding: 6px 10px;
    margin: 5px;
    border-radius: 20px;
    font-size: 14px;
}

.project {
   margin-bottom: 15px;
}
.project h3 {
   margin: 0;
   font-size: 16px;
   color: #333;
}
.project p {
   margin: 5px 0 0;
   font-size: 14px;
   text-align: justify;
   line-height: 1.5;
}


</style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1><?= $name ?></h1>
        <p><?= $title ?></p>
        <p><?= $email ?> | <?= $phone ?></p>
        <p><?= $location ?></p>
    </div>

    <div class="content">

        <div class="section">
            <h2>About Me</h2>
            <p><?= $about ?></p>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <?php foreach ($skills as $skill): ?>
                <span class="tag"><?= $skill ?></span>
            <?php endforeach; ?>
        </div>

        <div class="section">
            <h2>Education</h2>
            <ul>
                <?php foreach ($education as $edu): ?>
                    <li><?= $edu ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="section">
            <h2>Experience</h2>
            
            <p><strong>Academic Projects</strong><br>
            FEU Institute of Technology | 2024 – Present</p>

            <?php foreach ($projects as $proj): ?>
                <div class="project">
                    <h3>• <?= $proj['title'] ?></h3>
                    <p><?= $proj['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
 



    </div>

</div>

</body>
</html>