<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename( $_FILES["fileToUpload"]["name"] );

    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    //// Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])){
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    //     if($check !== false){
    //         echo "File is an image -" . $check["mime"] . ".";
    //         echo"<br>";
    //         $uploadOk = 1;
            
    //     }else{
    //         echo "File is not image";
    //         $uploadOk = 0;
    //     }
    // }

    // //check is imaage already exists
    // if(file_exists($target_file)){
    //     echo "File is already exists";
    //     echo"<br>";
    //     $uploadOk = 0;
    // }

    // //check file size
    // if($_FILES["fileToUpload"]["size"] > 500000){
    //     echo "Sorry, file is too large to upload";
    //     $uploadOk = 0;
    // }

    // //allow certain types of files
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
    //     echo "Only Image type is are allowed";
    //     $uploadOk = 0;
    // }

    // //uploading files

    // if($uploadOk == 0){
    //     echo "Sorry,file was not uploaded";
    // }else{
    //     if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
    //         echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) ."";
    //         header("Location: index.php");
    //         exit();
    //     }else{
    //         echo "Something went while uploading to file";
    //     }
    // }

    
?>