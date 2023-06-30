<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>bad-words</title>
</head>
<body style="background-color:lightgray">
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-6 offset-3 card py-3 text-center" style='background-color:RGBA(195,134,245,0.81);  box-shadow: 0 0 20px 2px black'>
                <h1 class="fw-bolder text-white">Bad Words</h1>
                <form action="server.php" method="POST">
                    <div class="my-5">
                        <input type="text" class="form-control"  name="censored" placeholder="scegli la parola da censurare">
                    </div>
                    <div >

                        <textarea class="w-100 pt-2 ps-2" name="textarea" id="" placeholder="forniscici un testo" ></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" style='background-color:RGBA(103,146,255,0.9);  box-shadow: 0 0 5px black; color:white;' class="mt-4 btn btn-outline-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div></div>
    
</body>
</html>