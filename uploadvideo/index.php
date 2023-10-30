<?php
// INCLUDING DATABASE FILE
include "db.php";

function isVideoPathExistsInDB($conn, $video_path) {
    $check_sql = "SELECT * FROM videos WHERE video_path = '$video_path'";
    $result = mysqli_query($conn, $check_sql);

    if ($result !== false) {
        return (mysqli_num_rows($result) > 0);
    } else {
        // Handle the query error here
        echo '<script>alert("Error in the database query: ' . mysqli_error($conn) . '");</script>';
        return false; // Return false to indicate an error.
    }
    
}

if (isset($_FILES['video'])) {
    $target_directory = 'videos/';
    $video = $_FILES['video']['name'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $video_path = $target_directory . $video;

    if (move_uploaded_file($_FILES['video']['tmp_name'], $video_path)) {
        // Video uploaded successfully

        // Check if the video with the same name already exists in the database
        if (isVideoPathExistsInDB($conn, $video_path)) {
            echo '<script>alert("A video with the same name already exists in the database.");</script>';
        } else {
            // If no video with the same name exists, insert it into the database
            $insert_sql = "INSERT INTO videos (video_path,type,title) VALUES ('$video_path','$type','$title')";
            if (mysqli_query($conn, $insert_sql)) {
                echo $type;
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
        <form method="post" enctype="multipart/form-data">
        <div class="upload-container">
            <label for="video" class="upload-label">
                <span>Select a Video</span>
                <br>
                <input type="file" name="video" id="video" accept="video/*" onchange="showVideoPreview(this)" required>  
            </label>
            <br>
            <label for="title" class="upload-label">
                <span>Enter Title</span>
                <input type="text" name="title" id="title" required>  
            </label>

            <!-- Add a dropdown here -->
            <label for="type">Type:</label>
            <select name="type" id="type" class="type" required>
                <option value="html">html</option>
                <option value="css">css</option>
                <option value="js">js</option>
                <option value="bootstrap">bootstrap</option>
                <option value="jquery">jquery</option>
                <option value="sass">sass</option>
                <option value="php">php</option>
                <option value="mysql">mysql</option>
                <option value="react"selected>react</option>
            </select>

            <button id="upload-video">Upload Video</button>
        </div>
    </div>
    </form>
    <div id="video-preview" style="display: none;">
            <video id="preview" controls width="320" height="240">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
