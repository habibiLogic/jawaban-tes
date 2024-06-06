<?php
include '../navbar/nav.php';
include "fungsi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Jawaban no 3</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body{
            background-color:lightgrey;
        }
    </style>
</head>
<body>
    
    <h2>Input: "Hello World"</h2>
    <p>Output: <?php print_r(countAndSortLetters("Hello World")); ?></p>

    <h2>Input: "Bismillah"</h2>
    <p>Output: <?php print_r(countAndSortLetters("Bismillah")); ?></p>

    <h2>Input: "MasyaAllah"</h2>
    <p>Output: <?php print_r(countAndSortLetters("MasyaAllah")); ?></p>
</body>
</html>
