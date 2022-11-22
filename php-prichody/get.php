<?php

    $content = explode(",", file_get_contents("log.txt"));
    
    // echo "Posledne prichody: <br>";
    // foreach ($content as $content) {
    //     echo $content . "<br>";
    // }

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
        <div class="content" style="padding-bottom: 8px;">
           <h1>
            <?php
                foreach ($content as $content) {
                    echo $content . "<br>";
                }
            ?>
        </h1>
           <a href="/"><button style="margin-top: 5px;" class="btn btn-warning">Go Back</button></a>
        </div>
    </div>
</body>
</html>