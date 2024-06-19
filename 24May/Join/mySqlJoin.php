
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>ProductID</th>
            </tr>

            
            <?php
                    include("Db.php");
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $name = $row["name"] ;
                            $productID = $row["product_id"] ;
                            echo "<tr>
                            <td>$name</td>
                            <td>$productID</td>
                            </tr>";
                            // break;
                        }
                    }
                
            ?>
            
        </table>
    </div>
</body>
</html>


