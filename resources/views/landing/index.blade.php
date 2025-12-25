<!-- resources/views/landing/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Elegant Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info text-white">

  <!-- Header -->
  <nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Logo</a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-5">
    <h1 class="fw-bold">Elegant Landing Page</h1>
    <h3>With Bootstrap</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#" class="btn btn-primary">Get Started</a>
  </section>

  <!-- Services -->
  <section class="container text-center py-5">
    <div class="row">
      <div class="col-md-4">
        <i class="bi bi-gear fs-1"></i>
        <h4>Service One</h4>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="col-md-4">
        <i class="bi bi-heart fs-1"></i>
        <h4>Service Two</h4>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="col-md-4">
        <i class="bi bi-bar-chart fs-1"></i>
        <h4>Service Three</h4>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-center py-3">
    © 2024 Your Company. All rights reserved.
  </footer>

</body>
</html>