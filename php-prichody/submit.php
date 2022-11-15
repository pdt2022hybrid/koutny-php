<?php
    $crtTime = date("d.m.Y") . " - " . date("H:i:s"); 
    $timeOnly = date("H:i:s");

    readfile("../views/index.html");

    date_default_timezone_set('Europe/Berlin');

    function printOut($content) {
        echo $content;
    };
    function OpenSaveToFile($file, $content) {
        $file = fopen($file, "r+");
        fwrite($file, $content . " " . "\n");
    };
    function checkIfLate($file) {
        // $content = file_get_contents($file);

        // $contentB = substr($content, 0, 5);

        $sekundyOdPolnoci = time() - strtotime("today");

        // $contentC = substr($content, 1, 1);

        if(72000 < $sekundyOdPolnoci) {
            if(82800 > $sekundyOdPolnoci) {
                echo "Impossible";
                die;
            }
        }

        if($sekundyOdPolnoci > 28800) { //Uz funguje
            echo "Late! - " . date("H:i:s");
            OpenSaveToFile("../log.txt", $sekundyOdPolnoci);
        } else {
            echo "On time! - " . date("H:i:s");
            OpenSaveToFile("../log.txt", $sekundyOdPolnoci);
        };
    };
    
    checkIfLate("../log.txt");
    printOut("<br>");
    // printOut("Ahoj!");
    printOut("<br>");
    // printOut($crtTime);
    // openSaveToFile("log.txt", $timeOnly, "1");


?>