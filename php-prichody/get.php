<?php

    $content = file_get_contents("../log.txt");
    $time = gmdate("H:i:s", $content);
    echo "Posledný príchod bol o: " . $time;

?>