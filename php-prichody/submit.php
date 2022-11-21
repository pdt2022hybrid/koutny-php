<?php
    $crtTime = date("d.m.Y") . " - " . date("H:i:s"); 
    $timeOnly = date("H:i:s");

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
            echo "Late! - " . date("H:i:s");
            OpenSaveToFile("log.txt", date("H:i:s"));
        } else {
            echo "On time! - " . date("H:i:s");
            OpenSaveToFile("log.txt", date("H:i:s"));
        };
    };
    
    checkIfLate("log.txt");
    printOut("<br>");
    // printOut("Ahoj!");
    printOut("<br>");
    // printOut($crtTime);
    // openSaveToFile("log.txt", $timeOnly, "1");


?>