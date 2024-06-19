<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script></head>
<body>
    <div class="container">

        <?php
            $country = ["India","Japan","China","Nepal","Canada"];

            $state = [
                    "India"=>[
                    "Andhra Pradesh",
                    "Arunachal Pradesh",
                    "Assam",
                    "Bihar",
                    "Chhattisgarh",
                    "Goa",
                    "Gujarat",
                    "Haryana",
                    "Himachal Pradesh",
                    "Jharkhand",
                    "Karnataka",
                    "Kerala",
                    "Madhya Pradesh",
                    "Maharashtra",
                    "Manipur",
                    "Meghalaya",
                    "Mizoram",
                    "Nagaland",
                    "Odisha",
                    "Punjab",
                    "Rajasthan",
                    "Sikkim",
                    "Tamil Nadu	",
                    "Telangana",
                    "Tripura",
                    "Uttar Pradesh",
                    "Uttarakhand",
                    "West Bengal",
                    ],
                    "Japan"=>[
                    "Aomori",
                    "Chiba",
                    "Gifu",
                    "Hokkaido",
                    "Fukushima",
                    "Chubu",
                    "Hiroshima",
                    "Ibaraki",
                    "Iwate",
                    "Kanto",
                    "Gunma",
                    "Kansai",
                    "Okinawa",
                    "Shikoku",
                    "Kagoshima",
                    "Chugoku"
                    ],
            ];



        ?>
  <form action="">
            <div class="form-group" aria-label="Default select example">
                <select class="form-select form-select-lg mb-3" name="country" id="country">
                    <option value="">Select Country..</option>
                    
                    <?php foreach ($country as $c) : ?>
                        <option value="<?php echo $c; ?>"><?php echo $c; ?></option>
                    <?php endforeach; ?>
                </select>

                <select class="form-select" name="state" id="state" disabled>
                    <option value="">Select State..</option>
                </select>
            </div>
        </form>

    </div>

    <script>
    $(document).ready(function() {

        $('#country').change(function() {

            var country = $(this).val();
            var stateSelect = $('#state');
            stateSelect.prop('disabled', true);
            stateSelect.find('option:not(:first)').remove();
            var states = <?php echo json_encode($state); ?>;
            var countryStates = states[country];

            if (countryStates) {

                $.each(countryStates, function(index, state) {
                    stateSelect.append($('<option>').text(state).val(state));
                });

                stateSelect.prop('disabled', false);
            }

        });
    });
</script>

<!-- <script>
document.getElementById("country").addEventListener('change',function(){
    var country = this.value;
    var stateSelect = document.getElementById("state");
    stateSelect.disabled =true;

    while (stateSelect.options.length > 1) {
        stateSelect.remove(1);
    }

    var states = <?php //echo json_encode($state); ?>

    var countryStates =states[country];

    if (countryStates) {
        countryStates.forEach(function(state){
            var option =document.createElement('option')
            option.text =state;
            option.value = state;
            stateSelect.add(option)

        });
        stateSelect.disabled = false;
    }
});
</script> -->


    </div>
</body>
</html>