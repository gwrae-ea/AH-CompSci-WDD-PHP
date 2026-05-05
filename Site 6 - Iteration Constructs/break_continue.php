<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Break and Continue</title>
</head>
<body>
  <h1>Using break and continue</h1>
  <p>These keywords let you change how a loop runs.</p>

  <?php
    echo "<h2>Example with break</h2>";
    for ($number = 1; $number <= 10; $number++) {
      if ($number == 6) {
        echo "Stopping the loop at $number<br>";
        break;
      }

      echo "Number: $number<br>";
    }

    echo "<h2>Example with continue</h2>";
    for ($number = 1; $number <= 10; $number++) {
      if ($number % 2 == 0) {
        continue;
      }

      echo "Odd number: $number<br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 6</a></p>
</body>
</html>