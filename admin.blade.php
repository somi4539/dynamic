<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Update Hero & Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Full height and remove margin */
    html, body {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f0f2f5;
    }

    /* Container flex box to hold two forms side by side */
    .container {
      display: flex;
      height: 100vh;
      width: 100vw;
    }

    /* Each form takes 50% width and full height */
    .form-section {
      width: 50%;
      padding: 40px;
      overflow-y: auto;
      box-sizing: border-box;
      background: white;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    /* Left form styling */
    #hero-form-section {
      border-right: 1px solid #ddd;
    }

    /* Form inputs style */
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 8px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 18px;
      cursor: pointer;
      border-radius: 5px;
      width: 100%;
    }

    a.back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      color: #007bff;
    }

    /* Responsive: stack forms vertically on small screens */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
      .form-section {
        width: 100%;
        height: auto;
        border-right: none !important;
        box-shadow: none;
        padding: 20px 15px;
      }
      button {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Hero Content Update Form -->
  <section class="form-section" id="hero-form-section">
    <h2 class="mb-4">Update Hero Content</h2>
    <form id="update-form">
      <label for="heading">Heading (h1):</label>
      <input type="text" id="heading" name="heading" required />

      <label for="description">Description (p):</label>
      <textarea id="description" name="description" rows="4" required></textarea>

      <button type="submit">Update Hero Content</button>
    </form>
    <a href="hero.html" class="back-link">Back to Hero Page</a>
  </section>

  <!-- Product Info Update Form -->
  <section class="form-section" id="product-form-section">
    <h2 class="mb-4">Update Featured Products</h2>
    <form id="product-form">
      <!-- Product 1 -->
      <h5>Product 1</h5>
      <input type="text" id="product1Name" placeholder="Product Name" required>
      <input type="text" id="product1Price" placeholder="Price" required>

      <!-- Product 2 -->
      <h5>Product 2</h5>
      <input type="text" id="product2Name" placeholder="Product Name" required>
      <input type="text" id="product2Price" placeholder="Price" required>

      <!-- Product 3 -->
      <h5>Product 3</h5>
      <input type="text" id="product3Name" placeholder="Product Name" required>
      <input type="text" id="product3Price" placeholder="Price" required>

      <button type="submit" class="btn btn-success">Save Updates</button>
      <a href="products.html" class="back-link">Back to Products</a>
    </form>
  </section>
</div>

<script>
  // Hero form elements
  const headingInput = document.getElementById('heading');
  const descriptionInput = document.getElementById('description');

  // Load saved hero data
  headingInput.value = localStorage.getItem('heroHeading') || 'Welcome to ShopX';
  descriptionInput.value = localStorage.getItem('heroDescription') || 'Find the best products at unbeatable prices';

  // Handle hero form submit
  document.getElementById('update-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const newHeading = headingInput.value.trim();
    const newDescription = descriptionInput.value.trim();
    if (newHeading && newDescription) {
      localStorage.setItem('heroHeading', newHeading);
      localStorage.setItem('heroDescription', newDescription);
      alert('Hero content updated!');
      // Optionally redirect or update live content
    }
  });

  // Product form fields
  const fields = [
    { nameId: 'product1Name', priceId: 'product1Price', nameKey: 'product1Name', priceKey: 'product1Price' },
    { nameId: 'product2Name', priceId: 'product2Price', nameKey: 'product2Name', priceKey: 'product2Price' },
    { nameId: 'product3Name', priceId: 'product3Price', nameKey: 'product3Name', priceKey: 'product3Price' },
  ];

  // Load saved product data
  fields.forEach(f => {
    document.getElementById(f.nameId).value = localStorage.getItem(f.nameKey) || '';
    document.getElementById(f.priceId).value = localStorage.getItem(f.priceKey) || '';
  });

  // Handle product form submit
  document.getElementById('product-form').addEventListener('submit', function(e) {
    e.preventDefault();
    fields.forEach(f => {
      const name = document.getElementById(f.nameId).value.trim();
      const price = document.getElementById(f.priceId).value.trim();
      localStorage.setItem(f.nameKey, name);
      localStorage.setItem(f.priceKey, price);
    });
    alert('Product info updated!');
  });
</script>

</body>
</html>
