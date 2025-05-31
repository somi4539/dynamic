<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Copy Machine Detail View</title>
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
      box-shadow: 0 0 20px rgba(0,255,255,0.2);
      width: 100%;
    }

    .product-image {
      flex: 1 1 400px;
    }

    .product-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-right: 2px solid #00ffff;
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
      color: #00ffff;
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
      color: #00ffff;
      margin-bottom: 20px;
    }

    .buy-btn {
      padding: 12px 30px;
      background-color: #00ffff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      color: #000;
      cursor: pointer;
      transition: 0.3s;
      width: fit-content;
    }

    .buy-btn:hover {
      background-color: #0ad2d2;
      color: #fff;
    }

    @media (max-width: 768px) {
      .product-box {
        flex-direction: column;
      }

      .product-image img {
        border-right: none;
        border-bottom: 2px solid #00ffff;
      }
    }
  </style>
</head>
<body>

  <div class="detail-container">
    <div class="product-box">
      <div class="product-image">
        <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/regionalbooks/u/r/z/rough-copy-original-imagu95pvctghyaq.jpeg?q=90&crop=false" alt="Copy Machine Image" />
      </div>
      <div class="product-info">
        <h1>Canon ImageRUNNER 2425</h1>
        <p>Reliable and high-speed multifunction copy machine ideal for offices and print shops.</p>
        <ul class="specs">
          <li><strong>Copy Speed:</strong> Up to 25 pages/minute</li>
          <li><strong>Functions:</strong> Print, Copy, Scan</li>
          <li><strong>Resolution:</strong> 600x600 dpi</li>
          <li><strong>Paper Sizes:</strong> A4, A3, Legal, Letter</li>
          <li><strong>Connectivity:</strong> USB 2.0, Network</li>
          <li><strong>Monthly Duty:</strong> 50,000 pages</li>
          <li><strong>Display:</strong> 5-inch LCD Touchscreen</li>
        </ul>
        <div class="price">Rs. 98,500</div>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </div>

</body>
</html>
