document.getElementById('upload-video').addEventListener('click', function () {
    const videoInput = document.getElementById('video');

    if (videoInput.files.length > 0) {
        const videoFile = videoInput.files[0];
        const formData = new FormData();
        formData.append('video', videoFile);

        fetch('upload.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Video uploaded successfully!');
            } else {
                alert('Error uploading video.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    } else {
        alert('Please select a video before uploading.');
    }
});

function showVideoPreview() {
    const videoInput = document.getElementById('video');
    const videoPreview = document.getElementById('video-preview');
    const video = document.getElementById('preview');

    if (videoInput.files.length > 0) {
        // Display the video preview container
        videoPreview.style.display = 'block';

        // Set the source of the video element to the selected video
        video.src = URL.createObjectURL(videoInput.files[0]);
    } else {
        // Hide the video preview container if no video is selected
        videoPreview.style.display = 'none';
    }
}
