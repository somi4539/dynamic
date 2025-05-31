<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Detail View</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #121212;
      color: #ffffff;
    }

    .detail-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 50px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .product-box {
      background-color: #1e1e1e;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0,255,100,0.2);
      width: 100%;
    }

    .product-image {
      flex: 1 1 400px;
    }

    .product-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-right: 2px solid #2ecc71;
    }

    .product-info {
      flex: 1 1 500px;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .product-info h1 {
      font-size: 32px;
      margin-bottom: 15px;
      color: #2ecc71;
    }

    .product-info p {
      font-size: 16px;
      margin-bottom: 20px;
      color: #ccc;
    }

    .specs {
      list-style: none;
      margin-bottom: 20px;
    }

    .specs li {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .price {
      font-size: 22px;
      font-weight: bold;
      color: #2ecc71;
      margin-bottom: 20px;
    }

    .buy-btn {
      padding: 12px 30px;
      background-color: #2ecc71;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      color: #000;
      cursor: pointer;
      transition: 0.3s;
      width: fit-content;
    }

    .buy-btn:hover {
      background-color: #27ae60;
      color: #fff;
    }

    @media (max-width: 768px) {
      .product-box {
        flex-direction: column;
      }

      .product-image img {
        border-right: none;
        border-bottom: 2px solid #2ecc71;
      }
    }
  </style>
</head>
<body>

  <div class="detail-container">
    <div class="product-box">
      <div class="product-image">
        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8" alt="Laptop Image" />
      </div>
      <div class="product-info">
        <h1>Dell Inspiron 15 5000</h1>
        <p>High-performance laptop with latest Intel technology and stunning display — perfect for work and entertainment.</p>
        <ul class="specs">
          <li><strong>Processor:</strong> Intel Core i7 12th Gen</li>
          <li><strong>RAM:</strong> 16GB DDR4</li>
          <li><strong>Storage:</strong> 512GB SSD</li>
          <li><strong>Display:</strong> 15.6" Full HD (1920x1080)</li>
          <li><strong>Graphics:</strong> Intel Iris Xe</li>
          <li><strong>Battery:</strong> Up to 8 hours</li>
          <li><strong>OS:</strong> Windows 11 Home</li>
        </ul>
        <div class="price">Rs. 145,000</div>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </div>

</body>
</html>
