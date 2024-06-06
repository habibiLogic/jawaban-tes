<?php
    include 'urutArray.php';
    include '../navbar/nav.php';

    $arr = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];
    $urutArr = urut($arr);

    function formatArrayForOutput($array) {
        return implode(', ', $array);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Jawaban no 1</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Urut Array</h1>

    <b>Input :</b>
    <p><?php echo implode(', ', $arr); ?></p>
    <b>Output :</b>
    <p><?php echo formatArrayForOutput($urutArr); ?></p>
    <?php include 'penjelasan.php' ?>


    
</body>
</html>
