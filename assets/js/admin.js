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
    } else {
        document.getElementById('status').innerText = "Uploading Please Wait!";
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
        console.log(videos);
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
                        <source src="${video.filePath}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <h4 class="title"><a href="#">${video.title}</a></h4>
                    <p class="description">${video.description}</p>
                    <button onclick="deleteFile('${video.filePath}')">Delete Video</button>
                </div>
            </div>
        `;
        rowDiv.innerHTML += videoHTML;
        });
    })
    .catch(error => console.error('Error loading videos:', error));



    fetch('assets/recordings/audio/audios.json')
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
                <source src="${audio.filePath}" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
                <h4 class="title"><a href="#">${audio.title}</a></h4>
                <p class="description">${audio.description}</p>
                <button onclick="deleteFile('${audio.filePath}')">Delete Video</button>
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


const alumniJsonPath = 'assets/alumni/alumni.json';

    // Add Alumnus Form Submission
    document.getElementById('addAlumnusForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      fetch('alumni_upload.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          alert('Alumnus added successfully!');
          loadAlumniDeleteList();
          this.reset();
        } else {
          alert(data.message || 'Error adding alumnus.');
        }
      });
    });

    // Load Alumni Delete List
    function loadAlumniDeleteList() {
      fetch(alumniJsonPath)
        .then(response => response.json())
        .then(data => {
          const list = document.getElementById('alumniDeleteList');
          list.innerHTML = '';
          data.forEach(alumnus => {
            const item = document.createElement('div');
            item.className = 'list-group-item d-flex justify-content-between align-items-center';
            item.innerHTML = `
              <span>
                <img src="${alumnus.picture}" alt="${alumnus.name}" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                ${alumnus.name} - ${alumnus.description}
              </span>
              <button class="btn btn-danger btn-sm" onclick="deleteAlumnus('${alumnus.picture}')">Delete</button>
            `;
            list.appendChild(item);
          });
        });
    }

    // Delete Alumnus Function
    function deleteAlumnus(picturePath) {
      if (confirm('Are you sure you want to delete this alumnus?')) {
        const formData = new FormData();
        formData.append('deleteAlumnus', picturePath);
        fetch('alumni_upload.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            alert('Alumnus deleted successfully!');
            loadAlumniDeleteList();
          } else {
            alert(data.message || 'Error deleting alumnus.');
          }
        });
      }
    }

    // Initial Load
    loadAlumniDeleteList();