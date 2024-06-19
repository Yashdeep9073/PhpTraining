<?php
    require "db.php";
    if (isset($_POST['country'])) {
        $country = $_POST['country'];
        $query = "SELECT id, name FROM states WHERE name = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $country);
        $stmt->execute();
        $result = $stmt->get_result();
    
        echo '<option value="">Select State...</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . htmlspecialchars($row['name']) . '">' . htmlspecialchars($row['name']) . '</option>';
        }
    
        $stmt->close();
    }
?>