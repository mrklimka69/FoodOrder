<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/style.css">

  <title>Basket</title>

  <?php
  require_once "functions/function.php";

  $food = getFood();

  ?>

</head>

<body>
  <?php

  for ($i = 0; $i < count($food); $i++) {
    echo "<div class=\"Order_box\">
    <div>
      <label for=\"id\" class=\"Order_label\">Order number:</label>

       {$food[$i]['id']}
    </div>

    <div>
      <label for=\"name\" class=\"Order_label\">Customer name:</label>

      {$food[$i]['name']}
    </div>

    <div>
      <label for=\"address\" class=\"Order_label\">Address:</label>

      {$food[$i]['adress']}
    </div>

    <div>
      <label for=\"phone\" class=\"Order_label\">Phone number:</label>

      {$food[$i]['phone']}
    </div>

    <div>
      <label for=\"order\" class=\"Order_label\">Order:</label>

      {$food[$i]['dish']}
    </div>

    <div>
      <label for=\"amount\" class=\"Order_label\">Amount:</label>

      {$food[$i]['quantity']}
    </div>
    <hr>
  </div>";
  }

  ?>

</body>

</html>