<?php
include '../navbar/nav.php';
include 'logicA.php';
include 'logicB.php';
include 'logicC.php';
include 'logicD.php';
include 'logicE.php';
include 'logicF.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Jawaban no 2</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body{
            background-color:lightgrey;
        }
    </style>
</head>
<body>

<br>


<ul>
    <li>
        <p>
            A. Input "<?php echo $text; ?>" ,"<?php echo $pattern; ?>" Output : <?php echo $count; ?>.
        </p>
    </li>
    <li>
        <p>
            B. Input "<?php echo $textB; ?>" ,"<?php echo $patternB; ?>" Output : <?php echo $countB; ?>.
        </p>
    </li>
    <li>
        <p>
            C. Input "<?php echo $textC; ?>" ,"<?php echo $patternC; ?>" Output : <?php echo $countC; ?>.
        </p>
    </li>
    <li>
        <p>
            D. Input "<?php echo $textD; ?>" ,"<?php echo $patternD; ?>" Output : <?php echo $countD; ?>.
        </p>
    </li>
    <li>
        <p>
            E. Input "<?php echo $textE; ?>" ,"<?php echo $patternE; ?>" Output : <?php echo $countE; ?>.
        </p>
    </li>
    <li>
        <p>
            F. Input "<?php echo $textF; ?>" ,"<?php echo $patternF; ?>" Output : <?php echo $countF; ?>.
        </p>
    </li>
</ul>
</body>
</html>