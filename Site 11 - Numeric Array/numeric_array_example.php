<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numeric Array Example</title>
</head>
<body>
  <h1>Numeric Array Example</h1>
  <p>This page shows both ways of creating a numeric array from the lesson.</p>

  <?php
    echo "<h2>First method</h2>";
    $numbers = array(1, 2, 3, 4, 5);

    foreach ($numbers as $value) {
      echo "Value is $value <br>";
    }

    echo "<h2>Second method</h2>";
    $words = array();
    $words[0] = "one";
    $words[1] = "two";
    $words[2] = "three";
    $words[3] = "four";
    $words[4] = "five";

    foreach ($words as $value) {
      echo "Value is $value <br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 11</a></p>
</body>
</html>
