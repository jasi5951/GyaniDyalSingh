<?php
    session_start();

    if (!isset($_SESSION['admin'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Squadfree Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f8f9fa;
      padding: 20px;
    }

    h1, h2 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      color: #333;
    }

    #uploadForm {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    #uploadForm label {
      font-weight: 500;
    }

    #uploadForm input, #uploadForm select, #uploadForm button {
      margin-top: 10px;
    }

    #uploadForm button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    #uploadForm button:hover {
      background-color: #0056b3;
    }

    #fileList ul {
      list-style-type: none;
      padding: 0;
    }

    #fileList li {
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    video, audio {
      max-width: 300px;
    }

    .btn-danger {
      background-color: #dc3545;
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }
  </style>

  <!-- =======================================================
  * Template Name: Squadfree
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Home</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Recordings</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="video.html">Video</a></li>
              <li><a href="audio.html">Audio</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="learn.html">Learn/Resources</a></li>
          <li><a class="nav-link" href="contact.html">Contact</a></li>
          <li><a class="nav-link" href="https://www.clover.com/pay-widgets/3258774c-c95c-49b7-bcc0-4cd00571580a">Support</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header> <!-- End Header -->

  <main id="main">
    <div class="container">
  <?php
    if ($_GET["login"] == "false"){
  ?>
  <p> Incorrect Username or Password </p>
  <?php    
    }
  ?>
      <form action="verifylogin.php" method="post">
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </main>
</body>

<?php 
    } else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Squadfree Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Home</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Recordings</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="video.html">Video</a></li>
              <li><a href="audio.html">Audio</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="learn.html">Learn/Resources</a></li>
          <li><a class="nav-link" href="contact.html">Contact</a></li>
          <li><a class="nav-link" href="https://www.clover.com/pay-widgets/3258774c-c95c-49b7-bcc0-4cd00571580a">Support</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header> <!-- End Header -->

  <main id="main">
    <div class="container">
      <h1>Admin Panel</h1>

      <!-- Upload Form -->
      <div id="uploadForm">
        <h2>Upload New Recording</h2>
        <form id="uploadForm">
          <div class="form-group">
            <label for="fileType">File Type:</label>
            <select id="fileType" name="fileType" class="form-control" required>
              <option value="video">Video</option>
              <option value="audio">Audio</option>
            </select>
          </div>
          <div class="form-group">
            <label for="file">Select File:</label>
            <input type="file" id="file" name="file" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="title">Shabad Title:</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Enter shabad title" required>
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter a brief description" required></textarea>
          </div>
          <button type="submit">Upload</button>
        </form>
        <p id="status" class="text-muted"></p>
      </div>

      <!-- Manage Existing Recordings -->
      <h2>Manage Existing Recordings</h2>
      <div id="fileList"></div>
    </div>

    <script>
        // Upload New File
        document.getElementById('uploadForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const fileInput = document.getElementById('file');
            const fileType = document.getElementById('fileType').value;
            const name = document.getElementById('name').value;
            const description = document.getElementById('description').value;

            if (!fileInput.files.length) {
                document.getElementById('status').innerText = "No file selected!";
                return;
            }

            const formData = new FormData();
            formData.append('file', fileInput.files[0]);
            formData.append('fileType', fileType);
            formData.append('name', name);
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
            const videoFiles = await fetchFiles('video');
            const audioFiles = await fetchFiles('audio');

            let fileListHTML = `<h3>Videos</h3><ul>`;
            videoFiles.forEach(file => {
                fileListHTML += `
                    <li>
                        <video controls width="300px">
                            <source src="${file}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <button onclick="deleteFile('${file}')">Delete Video</button>
                    </li>
                `;
            });
            fileListHTML += `</ul><h3>Audio</h3><ul>`;
            audioFiles.forEach(file => {
                fileListHTML += `
                    <li>
                        <audio controls>
                            <source src="${file}" type="audio/mp3">
                            Your browser does not support the audio element.
                        </audio>
                        <button onclick="deleteFile('${file}')">Delete Audio</button>
                    </li>
                `;
            });
            fileListHTML += `</ul>`;
            
            document.getElementById('fileList').innerHTML = fileListHTML;
        }

        // Fetch list of files for a given type (video or audio)
        async function fetchFiles(fileType) {
            const response = await fetch(`assets/recordings/${fileType}/`);
            const files = await response.text();
            return files.split('\n').filter(file => file.trim() !== '');
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
    </script>
  </main>
</body>


<?php
    Echo "works";
    }
?>