
<?php
    $crtTime = date("d.m.Y") . " - " . date("H:i:s"); 
    $timeOnly = date("H:i:s");
    $txtToPrnt = "";

    // include("../views/main.php");

    date_default_timezone_set('Europe/Berlin');
    function printOut($content) {
        echo $content;
    };
    function OpenSaveToFile($file, $content) {
        file_put_contents($file, $content . ",", FILE_APPEND);
    };
    function checkIfLate($file) {
        $sekundyOdPolnoci = time() - strtotime("today");

        if(72000 < $sekundyOdPolnoci) {
            if(82800 > $sekundyOdPolnoci) {
                echo "Impossible";
                die;
            }
        }

        if($sekundyOdPolnoci > 28800) { //Uz funguje
            // echo "Late! - " . date("H:i:s");
            global $txtToPrnt;
            $txtToPrnt = "Late! - " . date("H:i:s");
            OpenSaveToFile("log.txt", date("H:i:s"));
        } else {
            // echo "On time! - " . date("H:i:s");
            global $txtToPrnt;
            $txtToPrnt = "On time! - " . date("H:i:s");
            OpenSaveToFile("log.txt", date("H:i:s"));
        };
    };
    
    checkIfLate("log.txt");
    // printOut("<br>");
    // printOut("Ahoj!");
    // printOut("<br>");
    // printOut($crtTime);
    // openSaveToFile("log.txt", $timeOnly, "1");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./public/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="padding: 0;">
<div class="wrapper">
        <div class="content" style="padding-bottom: 5px;">
           <h1 style="padding-bottom: 5px;"><?=$txtToPrnt?></h1>
           <a href="/"><button style="margin-top: 5px;" class="btn btn-warning">Go Back</button></a>
        </div>
    </div>
</body>
</html>