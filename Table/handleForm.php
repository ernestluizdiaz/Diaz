<?php
session_start();

$prices = [
  "burger" => 50,
  "fries" => 75,
  "steak" => 150
];

// Get the selected food and quantity from the form
$selected_food = isset($_GET['foods']) ? $_GET['foods'] : null;
$quantity = isset($_GET['quantity']) ? (int) $_GET['quantity'] : 0;
$cash = isset($_GET['cash']) ? (float) $_GET['cash'] : 0;

// Calculate total price
$total_price = isset($prices[$selected_food]) ? $prices[$selected_food] * $quantity : 0;

// Calculate change
$change = $cash - $total_price;

// Get current date and time
$date_time = date("Y-m-d H:i:s");

// Start HTML output
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
    }

    .receipt {
      border: 2px dotted black;
      padding: 50px;
      width: 500px;
      text-align: center;
      font-size: 2rem;
    }
  </style>
</head>

<body>
  <div class="receipt">
    <h2>RECEIPT</h2>
    <p>Total Price: ₱<?php echo number_format($total_price, 2); ?></p>
    <p>You Paid: ₱<?php echo number_format($cash, 2); ?></p>
    <p>Change: ₱<?php echo number_format($change, 2); ?></p>
    <p><?php echo $date_time; ?></p>
    <a href="index.php">Return to Menu</a>
  </div>
</body>

</html>