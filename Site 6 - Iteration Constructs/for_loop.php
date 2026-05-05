<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The for Loop</title>
</head>
<body>
  <h1>The for Loop</h1>
  <p>This loop is useful when you know exactly how many times the code should run.</p>

  <?php
    $a = 0;
    $b = 0;

    for ($i = 0; $i < 5; $i++) {
      $a += 10;
      $b += 5;
    }

    echo "<p>At the end of the loop a = $a and b = $b</p>";

    echo "<h2>First 10 values of the 5 times table</h2>";
    for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
      $result = $multiplier * 5;
      echo "$multiplier x 5 = $result<br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 6</a></p>
</body>
</html>