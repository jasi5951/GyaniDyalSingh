// Upload New File
document.getElementById('uploadForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const fileInput = document.getElementById('file');
    const fileType = document.getElementById('fileType').value;
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;

    if (!fileInput.files.length) {
        document.getElementById('status').innerText = "No file selected!";
        return;
    }

    const formData = new FormData();
    formData.append('file', fileInput.files[0]);
    formData.append('fileType', fileType);
    formData.append('title', title);
    formData.append('description', description);

    try {
        const response = await fetch('uploads.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        document.getElementById('status').innerText = result.message;

        if (result.status === 'success') {
            console.log('File uploaded:', result.filePath);
            loadFileList();
        }
    } catch (error) {
        document.getElementById('status').innerText = "Error uploading file.";
        console.error('Upload error:', error);
    }
});

// Load file list
async function loadFileList() {
    fetch('assets/recordings/video/videos.json')
    .then(response => response.json())
    .then(videos => {
        const videoContainer = document.querySelector('#video-recordings');
        videoContainer.innerHTML = ''; // Clear existing content

        let rowDiv = null;

        videos.forEach((video, index) => {
        // Start a new row for every 3rd video
        if (index % 3 === 0) {
            rowDiv = document.createElement('div');
            rowDiv.className = 'row';
            videoContainer.appendChild(rowDiv);
        }

        // Add video content to the current row
        const videoHTML = `
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
                <video controls width="300px">
                <source src="${video.src}" type="video/mp4">
                Your browser does not support the video tag.
                </video>
                <h4 class="title"><a href="#">${video.title}</a></h4>
                <p class="description">${video.description}</p>
                <button onclick="deleteFile('${video.src}')">Delete Video</button>
            </div>
            </div>
        `;
        rowDiv.innerHTML += videoHTML;
        });
    })
    .catch(error => console.error('Error loading videos:', error));



    fetch('assets/recordings/audio/audio.json')
    .then(response => response.json())
    .then(audios => {
        const audioContainer = document.querySelector('#audio-recordings');
        audioContainer.innerHTML = ''; // Clear existing content

        let rowDiv = null;

        audios.forEach((audio, index) => {
        // Start a new row for every 3rd audio
        if (index % 3 === 0) {
            rowDiv = document.createElement('div');
            rowDiv.className = 'row';
            audioContainer.appendChild(rowDiv);
        }

        // Add audio content to the current row
        const audioHTML = `
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
                <audio controls>
                <source src="${audio.src}" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
                <h4 class="title"><a href="#">${audio.title}</a></h4>
                <p class="description">${audio.description}</p>
                <button onclick="deleteFile('${audio.src}')">Delete Video</button>
            </div>
            </div>
        `;
        rowDiv.innerHTML += audioHTML;
        });
    })
    .catch(error => console.error('Error loading audio recordings:', error));
}

// Delete File
async function deleteFile(file) {
    const confirmation = confirm('Are you sure you want to delete this file?');
    if (!confirmation) return;

    const formData = new FormData();
    formData.append('deleteFile', file);

    try {
        const response = await fetch('uploads.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        alert(result.message);
        loadFileList();
    } catch (error) {
        alert('Error deleting file');
        console.error('Delete error:', error);
    }
}

// Initial file list load
loadFileList();