<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Total and Average Example</title>
</head>
<body>
  <h1>Total and Average Example</h1>
  <p>This example totals an array of 10 integers and calculates the average.</p>

  <?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $total = 0;

    foreach ($numbers as $value) {
      $total += $value;
      echo "Added $value, running total is $total<br>";
    }

    $average = $total / count($numbers);

    echo "<p>Total: $total</p>";
    echo "<p>Average: $average</p>";
  ?>

  <p><a href="index.php">← Back to Site 11</a></p>
</body>
</html>
