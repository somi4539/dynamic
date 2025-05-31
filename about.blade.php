<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - ShopX</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .about-hero {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
      padding: 80px 0;
      text-align: center;
    }
    .about-content {
      background: white;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .about-img {
      max-width: 100%;
      border-radius: 10px;
    }
    .mission-box {
      background-color: #f1f1f1;
      border-left: 5px solid #007bff;
      padding: 20px;
      border-radius: 10px;
      margin-top: 30px;
    }
  </style>
</head>
<body>

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">ShopX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link active" href="about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="admin">Admin page</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ Hero Section -->
<section class="about-hero">
  <div class="container">
    <h1 class="display-5 fw-bold">About ShopX</h1>
    <p class="lead">Your trusted destination for quality and affordability</p>
  </div>
</section>

<!-- ✅ About Content Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center about-content">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e" alt="About Us" class="about-img" />
      </div>
      <div class="col-md-6">
        <h3>Who We Are</h3>
        <p>ShopX is an innovative online store offering a wide range of modern, high-quality gadgets and lifestyle products at unbeatable prices. Founded with the vision to make smart shopping simple, fast, and reliable, we’ve served thousands of happy customers across the globe.</p>
        <p>Whether you're looking for the latest tech or something stylish and functional for everyday use, ShopX is your one-stop destination.</p>
      </div>
    </div>

    <!-- ✅ Mission Statement -->
    <div class="mission-box mt-5">
      <h4>Our Mission</h4>
      <p>To empower customers with easy access to affordable, premium-quality products while delivering outstanding customer support and fast delivery services.</p>
    </div>
  </div>
</section>

<!-- ✅ Bootstrap JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
