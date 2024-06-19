<?php
    include("ImgApi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<?php
    foreach ($data as $key => $value) {
        $name = $value['author'];
        $image = $value['download_url'];
        $clickHere = $value['url'];
        
        echo "
        <div id='container' class='card' style='width:30rem'>
            <img class='card-img-top' src='$image' alt=''>
            <div class='card-body' style='width:20rem'>
                <h5 class='card-title'>$name</h5>
                <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href='$clickHere' class='btn btn-primary'>Click Here</a>
            </div>
        </div>
        ";
        // break;
    }
?>

</body>
</html>