<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div id="container" class="form-group" >
        <h1>Select image to upload</h1>
        <form method="POST" class="form-group" enctype="multipart/form-data" action="upload.php">
            <!-- File input for selecting the image -->
            <input required class="form-control-file" type="file" name="fileToUpload" id="fileToUpload" required>
            <!-- Submit button to upload the image -->
            <input type="submit" class="btn btn-primary mt-3" value="Upload Image" name="submit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqMEG16T5gD7VNS0WIOfo2a8mEhYtXl4n1h5X1rA1Vf9lb2jfz" crossorigin="anonymous"></script>
</body>
</html>
