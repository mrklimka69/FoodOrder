<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/main_style.css" />
  <title>Food order</title>
</head>

<body>
  <h1>Order food</h1>
  <form method="POST">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />
    

    <label for="address">Delivery address:</label>
    <input type="text" id="address" name="address" required />

    <label for="phone">Phone number:</label>
    <input type="text" id="phone" name="phone" required />

    <label for="food">Choose a dish:</label>
    <select id="food" name="food">
      <option value="pizza">Pizza</option>
      <option value="burger">Burger</option>
      <option value="sushi">Sushi</option>
      <option value="tea">Tea</option>
      <option value="coffee">Coffee</option>
      <option value="potato_free">Potato free</option>
    </select>

    <label for="quantity">Amount:</label>
    <input type="number" id="quantity" name="quantity" min="1" max="100" required />

    <input type="submit" name="formSubmit" value="Order" />
    </div>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nameform = $_POST['name'];
    $addressform = $_POST['address'];
    $phoneform = $_POST['phone'];
    $foodform = $_POST['food'];
    $quantityform = $_POST['quantity'];
    $mysqli = new mysqli("localhost", "klimoff0606", "kliZ0DataBase01", "klimoff0606");

    $sql = "INSERT INTO orders VALUES ('' ,'$nameform', '$addressform', '$phoneform', '$foodform', '$quantityform')";

    if ($mysqli->query($sql) == TRUE) {
      echo "ADDED!";
    } else {
      echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
  }

  ?>

  <p class="Basket_text">Orders can be viewed in <a href="/basket.php">basket</a></p>
</body>

</html>