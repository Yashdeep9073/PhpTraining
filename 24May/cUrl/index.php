<?php
    include("ImgApi.php");
    // require "ImgApi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <?php
        foreach ($data as $key => $value) {
            $name = htmlspecialchars($value['author']);
            $image = htmlspecialchars($value['download_url']);
            $clickHere = htmlspecialchars($value['url']);

            echo "
            <div class='col-md-4 mb-4'>
                <div class='card' style='width: 100%;'>
                    <img class='card-img-top' src='$image' alt=''>
                    <div class='card-body'>
                        <h5 class='card-title'>$name</h5>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href='$clickHere' class='btn btn-primary'>Click Here</a>
                    </div>
                </div>
            </div>
            ";
            break;
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF/TgWqnSTDF9P2CgXpO2OGT8Awz4THPsU7iBlLY/5E" crossorigin="anonymous"></script>
</body>
</html>
