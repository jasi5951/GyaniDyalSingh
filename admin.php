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
          <li><a class="nav-link" href="alumni.html">Alumni</a></li>
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


    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
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
      <h2>Upload New Recording</h2>
      <div id="uploadForm" class="d-flex justify-content-center">
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
      <h3>Videos</h3>
      <div id="video-recordings"></div>
      <h3>Audios</h3>
      <div id="audio-recordings"></div>
    </div>


    <div class="container mt-5">
    <h2 class="text-center">Manage Alumni</h2>

    <!-- Add Alumni Form -->
    <h3>Add New Alumnus</h3>
    <form id="addAlumnusForm" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="alumnusName" class="form-label">Name</label>
        <input type="text" id="alumnusName" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="alumnusDescription" class="form-label">Description</label>
        <textarea id="alumnusDescription" name="description" class="form-control" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="alumnusPicture" class="form-label">Picture</label>
        <input type="file" id="alumnusPicture" name="picture" class="form-control" accept="image/*" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Alumnus</button>
    </form>

    <hr>

    <!-- Delete Alumni Entries -->
    <h3>Delete Alumni</h3>
    <div id="alumniDeleteList" class="list-group">
      <!-- Alumni entries to delete will be populated here -->
    </div>
  </div>

  <script>
    const alumniJsonPath = 'alumni.json';

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
  </script>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script src="assets/js/admin.js"></script>
</body>


<?php
    }
?>