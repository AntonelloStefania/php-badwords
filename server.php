<?php
$censored = $_POST['censored'];
$text_area= $_POST['textarea'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Censored</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 my-5">
                <div class="card p-2 my-5" style='background-color:RGBA(124,255,167,0.8)'>
                    <h3 class="text-center">il tuo testo:</h3>
                    <p class="card py-3 ps-2"><?php echo $text_area ?></p>
                    <div class="d-flex">
                        <span class="ms-2 me-4">lunghezza del tuo testo:</span>
                        <span><?php echo strlen($text_area)?></span>
                    </div>
                </div>
                <div class="card my-5 p-2" style='background-color:RGBA(124,238,255,0.8)'>
                    <h3 class="text-center">il tuo testo censurato:</h3>
                    <p class="card py-3 ps-2"><?php echo str_replace($censored,"***",$text_area) ?></p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>