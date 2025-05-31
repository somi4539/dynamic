<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ShopX - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
    }

    /* Navbar */
    .navbar-brand {
      font-weight: bold;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('https://images.unsplash.com/photo-1606813909227-65821f17ecb2') center/cover no-repeat;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    .hero-content {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 40px;
      border-radius: 15px;
    }

    .hero-content h1 {
      font-size: 2.5rem;
    }

    .hero-content p {
      font-size: 1.2rem;
    }

    .btn-hero {
      margin-top: 20px;
      padding: 12px 30px;
      font-size: 1rem;
      border-radius: 30px;
      background-color: #28a745;
      border: none;
    }

    .btn-hero:hover {
      background-color: #218838;
    }

    /* Product Cards */
    .product-card img {
      height: 250px;
      object-fit: cover;
    }

    .product-card .card-body {
      transition: transform 0.3s ease-in-out;
    }

    .product-card:hover .card-body {
      transform: scale(1.05);
    }

    /* Footer */
    footer {
      background-color: #000;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2rem;
      }
      .hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
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
          <li class="nav-item"><a class="nav-link active" href="home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="shop">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="admin">Admin Page</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-content text-white">
      <h1 id="hero-heading">Welcome to ShopX</h1>
      <p id="hero-description">Find the best products at unbeatable prices</p>
      <a href="shop" class="btn btn-hero">Shop Now</a>
    </div>
  </section>

  <!-- Featured Products -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Featured Products</h2>
      <div class="row">
        <!-- Product 1 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm product-card">
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" class="card-img-top" alt="Product 1">
            <div class="card-body text-center">
              <h5 class="card-title" id="product1-name">Smart Watch</h5>
              <p class="card-text text-muted" id="product1-price">$99.00</p>
              <a href="laptop" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        </div>
        <!-- Product 2 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm product-card">
            <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/regionalbooks/u/r/z/rough-copy-original-imagu95pvctghyaq.jpeg?q=90&crop=false" class="card-img-top" alt="Product 2">
            <div class="card-body text-center">
              <h5 class="card-title" id="product2-name">Wireless Headphones</h5>
              <p class="card-text text-muted" id="product2-price">$59.00</p>
              <a href="copy" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm product-card">
            <img src="https://m.media-amazon.com/images/S/aplus-media/kdp/9190944b-470d-4e71-a817-c2b371a4a54a.__CR0,56,3600,2227_PT0_SX970_V1___.jpg" class="card-img-top" alt="Product 3">
            <div class="card-body text-center">
              <h5 class="card-title" id="product3-name">Bluetooth Speaker</h5>
              <p class="card-text text-muted" id="product3-price">$39.00</p>
              <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Update Button -->
      <div class="text-center mt-4">
        <a href="form.html" class="btn btn-primary">Update Products</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p class="mb-0">© 2025 ShopX. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap & Custom JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Hero dynamic content
    document.getElementById('hero-heading').textContent =
      localStorage.getItem('heroHeading') || 'Welcome to ShopX';
    document.getElementById('hero-description').textContent =
      localStorage.getItem('heroDescription') || 'Find the best products at unbeatable prices';

    // Products dynamic content
    const products = [
      { nameId: 'product1-name', priceId: 'product1-price', nameKey: 'product1Name', priceKey: 'product1Price' },
      { nameId: 'product2-name', priceId: 'product2-price', nameKey: 'product2Name', priceKey: 'product2Price' },
      { nameId: 'product3-name', priceId: 'product3-price', nameKey: 'product3Name', priceKey: 'product3Price' },
    ];
    products.forEach(p => {
      const name = localStorage.getItem(p.nameKey);
      const price = localStorage.getItem(p.priceKey);
      if (name) document.getElementById(p.nameId).textContent = name;
      if (price) document.getElementById(p.priceId).textContent = price;
    });
  </script>
</body>
</html>
