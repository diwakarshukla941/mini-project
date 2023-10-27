<?php
// INCLUDING DATABASE FILE
include "db.php";

function isVideoPathExistsInDB($conn, $video_path) {
    $check_sql = "SELECT * FROM videos WHERE videopath = '$video_path'";
    $result = mysqli_query($conn, $check_sql);

    return (mysqli_num_rows($result) > 0);
}

if (isset($_FILES['video'])) {
    $target_directory = 'videos/';
    $video = $_FILES['video']['name'];
    $type = $_POST['type'];
    $video_path = $target_directory . $video;

    if (move_uploaded_file($_FILES['video']['tmp_name'], $video_path)) {
        // Video uploaded successfully

        // Check if the video with the same name already exists in the database
        if (isVideoPathExistsInDB($conn, $video_path)) {
            echo '<script>alert("A video with the same name already exists in the database.");</script>';
        } else {
            // If no video with the same name exists, insert it into the database
            $insert_sql = "INSERT INTO videos (videopath,type) VALUES ('$video_path','$')";
            if (mysqli_query($conn, $insert_sql)) {
                echo '<script>alert("Video uploaded and path saved in the database.");</script>';
            } else {
                echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
            }
        }

        // Prevent the form submission to "upload.php"
        echo '<script>document.getElementById("upload-form").onsubmit = function(event) { event.preventDefault(); }</script>';
    } else {
        echo '<script>alert("Error uploading video.");</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Video Upload and Preview</title>
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
    <div class="container">
        <h1>Video Upload and Preview</h1>

        <!-- Add a Back button -->
        <a href="javascript:history.back()" class="back">Back</a>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
