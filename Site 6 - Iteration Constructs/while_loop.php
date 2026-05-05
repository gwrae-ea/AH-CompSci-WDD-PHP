<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The while Loop</title>
</head>
<body>
  <h1>The while Loop</h1>
  <p>A while loop keeps running as long as its condition stays true.</p>

  <?php
    $count = 1;

    echo "<h2>Counting from 1 to 5</h2>";
    while ($count <= 5) {
      echo "Count: $count<br>";
      $count++;
    }

    $total = 0;
    $number = 1;

    echo "<h2>Adding numbers 1 to 5</h2>";
    while ($number <= 5) {
      $total += $number;
      echo "Added $number, total is now $total<br>";
      $number++;
    }
  ?>

  <p><a href="index.php">← Back to Site 6</a></p>
</body>
</html>