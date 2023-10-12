<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $old_pass = $_POST["old_pass"];
    $new_pass = $_POST["new_pass"];
    $c_pass = $_POST["c_pass"];

    // Perform any necessary validation or data processing

    // Update user profile (this is just a placeholder)
    // You would typically connect to a database and update the user's record
    // For demonstration purposes, let's just echo the updated values
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    // ... Other fields

    // Handle file upload (this is just a placeholder)
    if ($_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Profile picture updated: $target_file <br>";
        } else {
            echo "Error uploading file. <br>";
        }
    }
}
?>
