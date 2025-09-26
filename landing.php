<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CCE - College of Computing Education</title>
  <link rel="stylesheet" href="landing.css"> 
  <link rel="icon" type="image/png" href="assets/cce-logo.png">
</head>
<body>

  <!-- Header -->
  <header>
    <h1>College of Computing Education</h1>
    <nav>
      <a href="landing.php">Home</a>
      <a href="#about">About</a> 
      <a href="#programs">Programs</a> 
      <a href="index.php?form=login">Login</a>
      <a href="index.php?form=register">Register</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <img src="assets/cce-logo.png" alt="CCE Logo">
      <h2>College of Computing Education</h2>
      <p>Empowering future innovators through technology, research, and excellence in computing education.</p>
      <a href="#programs" class="hero-button">Explore Programs</a>
    </div>
  </section>

  <!-- About Section -->
<section id="about" class="about">
  <h3>About the College</h3>
  <p>
    The College of Computing Education is recognized as one of the region’s top computer schools, 
    with PACUCOA Level IV accredited programs and CHED’s Center of Development status for Computer Science and IT.
    Backed by highly qualified faculty, the college partners with industry leaders like Apple, Google, Microsoft,
    and IBM, and holds accreditation from PICAB under the Philippine Computer Society.
  </p>
</section>

<!-- Programs Section -->
<section id="programs" class="programs">
  <h3>Programs Offered</h3>
  <div class="program-grid">
    <div class="program-card">
      <h4>BS Computer Science (BSCS)</h4>
      <p>Focuses on algorithms, artificial intelligence, and software development.</p>
    </div>
    <div class="program-card">
      <h4>BS Information Technology (BSIT)</h4>
      <p>Specializes in networking, cybersecurity, and IT management.</p>
    </div>
    <div class="program-card">
      <h4>BS Information Systems (BSIS)</h4>
      <p>Prepares students for careers in systems analysis and business technology integration.</p>
    </div>
    <div class="program-card">
      <h4>BS Entertainment & Multimedia Computing (BSEMC)</h4>
      <p>Major in Game Development and Digital Animation Technology, blending creativity and tech.</p>
    </div>
    <div class="program-card">
      <h4>Bachelor of Multimedia Arts (BMMA)</h4>
      <p>Covers graphic design, interactive media, and digital content creation.</p>
    </div>
    <div class="program-card">
      <h4>Bachelor of Library & Information Science (BLIS)</h4>
      <p>Focuses on organizing, managing, and curating knowledge in the digital age.</p>
    </div>
  </div>
</section>

  <!-- Features Section -->
  <section class="features">
    <h3>Why Choose CCE?</h3>
    <div class="feature-grid">
      <div class="feature">
        <h4>Quality Education</h4>
        <p>Learn from experienced faculty with strong academic and industry backgrounds.</p>
      </div>
      <div class="feature">
        <h4>Modern Facilities</h4>
        <p>Access state-of-the-art computer laboratories and learning resources.</p>
      </div>
      <div class="feature">
        <h4>Research & Innovation</h4>
        <p>Be part of projects that push the boundaries of computing and technology.</p>
      </div>
      <div class="feature">
        <h4>Student Development</h4>
        <p>Grow through academic support, internships, and student-led organizations.</p>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery">
    <h3>College Gallery</h3>
    <div class="carousel">
      <button class="carousel-btn prev">&#10094;</button>
      <div class="carousel-track">
        <img src="assets/pic1.jpg" alt="Gallery Image 1">
        <img src="assets/pic2.jpg" alt="Gallery Image 2">
        <img src="assets/pic3.jpg" alt="Gallery Image 3">
        <img src="assets/pic4.jpg" alt="Gallery Image 4">
        <img src="assets/pic5.jpg" alt="Gallery Image 5">
        <img src="assets/pic6.jpg" alt="Gallery Image 6">
        <img src="assets/pic7.jpg" alt="Gallery Image 6">
        <img src="assets/pic8.jpg" alt="Gallery Image 6">
        <img src="assets/pic9.jpg" alt="Gallery Image 6">
      </div>
      <button class="carousel-btn next">&#10095;</button>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 College of Computing Education. All Rights Reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
