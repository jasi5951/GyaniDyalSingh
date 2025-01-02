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
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #4CAF50;
        }
        form {
            margin-bottom: 20px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .file-list ul {
            list-style-type: none;
            padding: 0;
        }
        .file-list li {
            background-color: #f9f9f9;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .file-list button {
            background-color: #f44336;
        }
        .file-list button:hover {
            background-color: #d32f2f;
        }
        .file-list audio, .file-list video {
            max-width: 300px;
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
    <header>
      <h1>Admin - Upload and Manage Recordings</h1>
    </header>

    <div class="container">
        <!-- Upload Form -->
        <h2>Upload New Recording</h2>
        <form id="uploadForm">
            <label for="fileType">File Type:</label>
            <select id="fileType" name="fileType" required>
                <option value="video">Video</option>
                <option value="audio">Audio</option>
            </select><br><br>

            <label for="name">Shabad Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter Shabad Name"><br><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required placeholder="Enter Description"></textarea><br><br>

            <label for="file">Select File:</label>
            <input type="file" id="file" name="file" required><br><br>

            <button type="submit">Upload</button>
        </form>

        <p id="status"></p>

        <h2>Manage Existing Recordings</h2>
        <div id="fileList" class="file-list"></div>
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