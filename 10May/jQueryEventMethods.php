<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <p>If you click on me, I will disappear.</p>
    <script>
        $("p").click(function() {
            $(this).hide();
        })
    </script>
</body>
</html>