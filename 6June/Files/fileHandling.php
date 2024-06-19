<?php
// // Path to your CSV file
// $csvFile = 'uploads/demo.csv';

// // // Open the file in read mode
// if (($handle = fopen($csvFile, "r")) !== FALSE) {
//     // Loop through each line in the file
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         // Process each row here
//         // $data is an array of the CSV columns
//         echo    "<pre>";
//         print_r($data);
//     }
//     // Close the file handle
//     fclose($handle);
// } else {
//     echo "Error opening the file.";
// }

// if (isset($_FILES['csv_file'])) {
//     $file = $_FILES['csv_file']['tmp_name'];
    
// //     // Open the file in read mode
//     if (($handle = fopen($file, "r")) !== FALSE) {
//         // Skip the first line if it contains headers
//         fgetcsv($handle, 1000, ",");
        
//         // Prepare an SQL statement for inserting data
//         $stmt = $conn->prepare("INSERT INTO user (id,name, age, hobbies) VALUES (?, ?, ?,?)");
//         $stmt->bind_param("isis", $id , $name, $age, $email);

// //         // Loop through each line in the file
//         while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//             // Get data from CSV
//             $id =  (int)$data[0];
//             $name = $data[1];
//             $age = (int)$data[2];
//             $email = $data[3];
//             print_r ($data);
//             // Execute the prepared statement
//             $stmt->execute();
//         }

//         // Close the file handle
//         fclose($handle);
        
//         // Close the statement
//         $stmt->close();

//         echo "Data successfully imported into the database.";
//     } else {
//         echo "Error opening the file.";
//     }
// } else {
//     echo "No file uploaded.";
// }

// // Close the connection
// $conn->close();


session_start();
require 'db.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                $id = $row['0'];
                $name = $row['1'];
                $age = $row['2'];
                $hobbies = $row['3'];

                $studentQuery = "INSERT INTO user (id,name,age,hobbies) VALUES ('$id','$name','$age','$hobbies');";
                $result = mysqli_query($conn, $studentQuery);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: html.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: html.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: html.php');
        exit(0);
    }
}

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["import_file"]["name"]);
// $uploadOk = 1;
// $fileType = pathinfo($target_file,PATHINFO_EXTENSION);

// // Check file size
// if ($_FILES["import_file"]["size"] > 50000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
//   }

// // Allow certain file formats
// if($fileType != "csv" && $fileType != "xls" && $fileType != "xlsx") {
//   echo "Sorry, only xls csv ,xlsx files are allowed.";
//   $uploadOk = 0;
// }


//   // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//   // if everything is ok, try to upload file
//   } else {
//     if (move_uploaded_file($_FILES["import_file"]["tmp_name"], $target_file)) {
//       echo "The file ". htmlspecialchars( basename( $_FILES["import_file"]["name"])). " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
//   }
?>