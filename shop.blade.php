<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ShopX - Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .product-card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .product-img {
      height: 250px;
      object-fit: cover;
    }
    .filter-bar {
      background: white;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 20px;
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
        <li class="nav-item"><a class="nav-link active" href="shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="admin">Admin Page</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ Main Content -->
<div class="container py-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Shop All Products</h2>
    <p class="text-muted">Browse through our latest collection</p>
  </div>

  <!-- Filter Bar -->
  <div class="row filter-bar align-items-center">
    <div class="col-md-3 mb-2">
      <select id="categoryFilter" class="form-select">
        <option value="all">All Categories</option>
        <option value="watch">Watches</option>
        <option value="headphones">Headphones</option>
        <option value="speaker">Speakers</option>
      </select>
    </div>
    <div class="col-md-3 mb-2">
      <select id="priceSort" class="form-select">
        <option value="default">Sort by Price</option>
        <option value="low">Low to High</option>
        <option value="high">High to Low</option>
      </select>
    </div>
    <div class="col-md-6 mb-2">
      <input type="text" id="searchInput" class="form-control" placeholder="Search products...">
    </div>
  </div>

  <!-- Product Grid -->
  <div class="row" id="productList">
    <!-- Products will be inserted here dynamically -->
  </div>
</div>

<!-- ✅ JavaScript Logic -->
<script>
  const products = [
    {
      name: "Smart Watch",
      price: 99,
      category: "watch",
      image: "https://images.unsplash.com/photo-1517336714731-489689fd1ca8"
    },
    {
      name: "Wireless Headphones",
      price: 59,
      category: "headphones",
      image: "https://www.avatrade.com.au/wp-content/uploads/2022/10/Copy-Trading-1.png.webp"
    },
    {
      name: "Bluetooth Speaker",
      price: 39,
      category: "speaker",
      image: "https://alhamdtech.pk/cdn/shop/files/jbl-go-4-bluetooth-portable-speaker-black-619102.jpg?v=1725710232"
    },
    {
      name: "Luxury Watch",
      price: 149,
      category: "watch",
      image: "https://globalboutique.com/wp-content/uploads/2023/05/featured-gold-watches-800x600.jpg"
    },
    {
      name: "Noise Cancelling Headphones",
      price: 89,
      category: "headphones",
      image: "https://m1.com.pk/wp-content/uploads/2024/07/Sony-WH-1000XM4-1.jpg"
    },
    {
      name: "Portable Speaker",
      price: 29,
      category: "speaker",
      image: "https://myshop.pk/pub/media/catalog/product/cache/26f8091d81cea4b38d820a1d1a4f62be/_/a/_anker_-myshop-pk-1_13.jpg"
    }
  ];

  function displayProducts(list) {
    const productList = document.getElementById('productList');
    productList.innerHTML = '';
    list.forEach(p => {
      productList.innerHTML += `
        <div class="col-md-4 mb-4">
          <div class="card product-card">
            <img src="${p.image}" class="card-img-top product-img" alt="${p.name}">
            <div class="card-body text-center">
              <h5 class="card-title">${p.name}</h5>
              <p class="text-muted">$${p.price.toFixed(2)}</p>
              <a href="#" class="btn btn-outline-primary btn-sm">Add to Cart</a>
            </div>
          </div>
        </div>
      `;
    });
  }

  function applyFilters() {
    let filtered = [...products];

    const category = document.getElementById('categoryFilter').value;
    const priceSort = document.getElementById('priceSort').value;
    const search = document.getElementById('searchInput').value.toLowerCase();

    if (category !== 'all') {
      filtered = filtered.filter(p => p.category === category);
    }

    if (search) {
      filtered = filtered.filter(p => p.name.toLowerCase().includes(search));
    }

    if (priceSort === 'low') {
      filtered.sort((a, b) => a.price - b.price);
    } else if (priceSort === 'high') {
      filtered.sort((a, b) => b.price - a.price);
    }

    displayProducts(filtered);
  }

  document.getElementById('categoryFilter').addEventListener('change', applyFilters);
  document.getElementById('priceSort').addEventListener('change', applyFilters);
  document.getElementById('searchInput').addEventListener('input', applyFilters);

  displayProducts(products); // Initial load
</script>

<!-- ✅ Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
