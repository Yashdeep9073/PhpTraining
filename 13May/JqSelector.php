<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(
            function(){
                $("button").click(function(){
                    $("p").hide();
                })
            }
        )

    </script>

</head>
<body>
    <p>This is paragraph</p>
    <button>Click here</button>
</body>
</html>