<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Continue Statement Example</title>
</head>
<body>
  <h1>Continue Statement Example</h1>
  <p>This page mirrors the lesson example by skipping the value 3.</p>

  <?php
    $array = array(1, 2, 3, 4, 5);

    foreach ($array as $value) {
      if ($value == 3) {
        continue;
      }
      echo "Value is $value <br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 10</a></p>
</body>
</html>