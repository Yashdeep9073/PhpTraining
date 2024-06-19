<?php
// Path to the zip file
$zipFilePath = 'C:/Users/LENOVO INDIA/Downloads/FashionWear.zip';

// Directory where the zip file will be extracted
$extractToPath = 'C:/Users/LENOVO INDIA/Downloads/extracted/';

// Create a new ZipArchive instance
$zip = new ZipArchive;

// Check if the zip file exists
if (file_exists($zipFilePath)) {
    // Create the extraction directory if it doesn't exist
    if (!is_dir($extractToPath)) {
        mkdir($extractToPath, 0777, true);
    }

    // Open the zip file
    if ($zip->open($zipFilePath) === TRUE) {
        // Extract the contents to the specified directory
        $zip->extractTo($extractToPath);
        
        // Close the zip file
        $zip->close();
        
        echo 'Extraction successful!';
    } else {
        echo 'Failed to open the zip file!';
    }
} else {
    echo 'Zip file not found!';
}
?>
