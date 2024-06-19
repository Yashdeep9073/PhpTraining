

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <title>Document</title>
</head>

<body class="w-full">
    <section class=" w-full h-15 gap-10 grid grid-cols-4 rounded-md border bg-purple-400 absolute p-6 mt-10">
        <div class=" grid-cols-1">
            <h1 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Sign In Here !!</h1>
        </div>
        <div class=" grid-cols-3">
        <form id="form" method="POST" action="">
            <div class=" p-4">
                <label                 
                for="">Email Address</label>
                <input id="email" class=" rounded-md border w-full" name = "email" type="text" placeholder="Email">                
            </div>

            <div class=" p-4">
                <label for="">Password</label>
                <input id="password" class=" rounded-md border w-full" type="text" name = "password" placeholder="Password">
            </div>

            <div>
                <button class="bg-slate-600 w-full rounded-xl border">Submit</button>
            </div>

        </form>

        <script>
        $(document).ready(function (){
            $("#form").submit(function (e) {
                e.preventDefault();

                var formData  = {
                    "email": $("#email").val(),
                    "password": $("#password").val()
                }

                $.ajax({
                    url:'submit.php',
                    type: 'post',
                    data:formData,
                    success:function(res){
                        $('#response').html(res);
                        alert('form subbmitted ')
                    }
                })
            })
    });
        </script>

        </div>

    </section>





</body>



</html>