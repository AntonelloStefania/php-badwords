<?php
$censored = $_POST['censored'];
$text_area= $_POST['textarea'];
$lower_censored = strtolower($censored);
$text_lower= strtolower($text_area);
$censored_mutliple = explode(" ",$censored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Censored</title>
</head>
<body style="background-color: lightgray">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 my-5">
                <div class="card p-2 my-5" style='background-color:RGBA(124,255,167,0.8); box-shadow: 0 0 20px 2px black'>
                    <h2 class="text-center fw-bolder">il tuo testo:</h2>
                    <p class="card py-3 ps-2 mx-3"><span class="p-3"><?php echo $text_lower ?></span></p>
                    <div class="d-flex">
                        <span class="ms-2 me-4 fw-bold">lunghezza del tuo testo:</span>
                        <span><?php echo strlen($text_area)?></span>
                    </div>
                </div>
                <div class="card my-5 p-2" style='background-color:RGBA(124,238,255,0.8);  box-shadow: 0 0 20px 2px black'>
                    <h2 class="text-center fw-bolder">il tuo testo censurato:</h2>
                    <div class="card py-3 ps-2 mx-3 mb-3"><span class="p-3"><?php echo str_replace($censored_mutliple,"<span style='background-color:black; color:red;' class='ms-2 w-25 fw-lighter px-1'>CENSORED</span>",$text_lower); ?></span></div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>