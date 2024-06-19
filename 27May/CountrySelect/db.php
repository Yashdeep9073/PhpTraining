<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Error " . mysqli_connect_error());
}
// Initialize an empty string for the response
$str = "";

// Check if the type is set and fetch data accordingly
if (isset($_POST['type']) && $_POST['type'] == "") {
    // Fetching countries from database
    $sqlCountry = "SELECT * FROM countries";
    $resultCountry = mysqli_query($conn, $sqlCountry);

    while ($row = mysqli_fetch_assoc($resultCountry)) {
        
        $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
} elseif (isset($_POST['type']) && $_POST["type"] == "stateData") {
    // Fetching states from database
    $id = intval($_POST['id']); // Sanitizing input
    $sqlState = "SELECT * FROM states WHERE country_id = $id";
    $resultState = mysqli_query($conn, $sqlState);

    while ($row = mysqli_fetch_assoc($resultState)) {
        $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
    }
}

// Close the database connection
mysqli_close($conn);

// Echo the generated options back to the AJAX request
echo $str;
?>
