<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .form-container {
      background: #fff;
      padding: 20px 25px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      width: 350px;
    }
    .form-container h2 {
      margin-bottom: 15px;
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
    }
    input, select, button {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background: #007bff;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      border: none;
    }
    button:hover {
      background: #0056b3;
    }
    .footer {
      margin-top: 15px;
      text-align: center;
      font-size: 12px;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Checkout</h2>
    <form action="payment.php" method="post">
      
      <div class="form-group">
        <label for="name">Full Name</label>
        <input id="name" type="text" name="name" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input id="phone" type="tel" name="phone" required>
      </div>

      <div class="form-group">
        <label for="country">Country</label>
        <select id="country" name="country" required>
          <option value="Malaysia">Malaysia</option>
          <option value="Singapore">Singapore</option>
          <option value="Indonesia">Indonesia</option>
        </select>
      </div>

      <div class="form-group">
        <label for="amount">Amount (RM)</label>
        <input id="amount" type="number" name="amount" value="2" required>
      </div>

      <button type="submit">Pay Now</button>
    </form>
    <div class="footer">
      &copy; 2023 - Developed by <a href="https://www.megatirfan.com" target="_blank">Megat Irfan</a>
    </div>
  </div>
</body>
</html>
