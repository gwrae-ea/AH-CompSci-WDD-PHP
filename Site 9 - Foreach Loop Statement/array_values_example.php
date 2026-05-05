<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foreach Array Values Example</title>
</head>
<body>
  <h1>Foreach Array Values Example</h1>
  <p>This page mirrors the lesson example by traversing an array.</p>

  <?php
    $array = array(1, 2, 3, 4, 5);

    foreach ($array as $value) {
      echo "Value is $value <br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 9</a></p>
</body>
</html>