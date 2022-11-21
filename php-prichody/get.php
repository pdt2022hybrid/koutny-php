<?php

    $content = explode(",", file_get_contents("log.txt"));
    
    echo "Posledne prichody: <br>";
    foreach ($content as $content) {
        echo $content . "<br>";
    }

?>