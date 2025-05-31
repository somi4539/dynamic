<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - ShopX</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .contact-hero {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
      padding: 70px 0;
      text-align: center;
    }
    .contact-box {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .form-control, .btn {
      border-radius: 8px;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .contact-info i {
      color: #007bff;
      font-size: 1.2rem;
      margin-right: 10px;
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
        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="admin">Admin page</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ Hero Section -->
<section class="contact-hero">
  <div class="container">
    <h1 class="display-5 fw-bold">Contact Us</h1>
    <p class="lead">We’d love to hear from you!</p>
  </div>
</section>

<!-- ✅ Contact Form Section -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      
      <!-- Form -->
      <div class="col-md-7">
        <div class="contact-box">
          <h4 class="mb-4">Send Us a Message</h4>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" id="name" class="form-control" placeholder="John Doe" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" id="email" class="form-control" placeholder="you@example.com" required />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea id="message" class="form-control" rows="5" placeholder="Write your message..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary px-4">Submit</button>
          </form>
        </div>
      </div>

      <!-- Info -->
      <div class="col-md-5">
        <div class="contact-box">
          <h4 class="mb-4">Contact Information</h4>
          <p class="contact-info"><i class="bi bi-envelope-fill"></i> support@shopx.com</p>
          <p class="contact-info"><i class="bi bi-phone-fill"></i> +92 300 1234567</p>
          <p class="contact-info"><i class="bi bi-geo-alt-fill"></i> 123 Market Street, Karachi, Pakistan</p>
          <div class="mt-4">
            <iframe style="width: 100%; height: 250px; border: 0; border-radius: 10px;"
              src="https://maps.google.com/maps?q=karachi&t=&z=13&ie=UTF8&iwloc=&output=embed"
              allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ✅ Bootstrap JS (Required for Navbar Toggle) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
