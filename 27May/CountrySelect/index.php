<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">

                <label for="country">Select Country</label>
                <select class="form-select form-select-lg mb-3" name="country" id="country">
                    <option value="">Select Country..</option>
                </select>

                <label for="state">Select State</label>
                <select class="form-select form-select-lg mb-3" name="state" id="state" disabled>
                    <option value="">Select State..</option>
                </select>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            function loadData(type, category_id) {
                $.ajax({
                    url: "db.php",
                    type: "POST",
                    data: { type: type, id: category_id },
                    success: function(data) {
                        if (type == "stateData") {
                            $("#state").html(data);
                        } else {
                            $("#country").html('<option value="">Select Country..</option>').append(data);
                        }
                    }
                });
            }

            loadData("");

            $("#country").on("change", function() {
                var country = $("#country").val();
                if (country != "") {
                    $("#state").prop('disabled',false);

                    loadData("stateData", country);
                } else {
                    $("#state").html('<option value="">Select State..</option>');
                    $("#state").prop('disabled',true);
                }
            });
        });
    </script>
</body>
</html>
