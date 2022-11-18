<?php

    $content = explode(",", file_get_contents("log.txt"));
    
    echo "Posledne prichody: <br>";
    foreach ($content as $content) {
        // $time = gmdate("H:i:s", $content);
        echo $content . "<br>";
    }

?>