<?php
// Path to your CSV file
$csvFile = 'uploads/demo.csv';

// Open the file in read mode
if (($handle = fopen($csvFile, "r")) !== FALSE) {
    // Loop through each line in the file
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // Process each row here
        // $data is an array of the CSV columns
        print_r($data);
    }
    // Close the file handle
    fclose($handle);
} else {
    echo "Error opening the file.";
}
?>
