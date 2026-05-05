<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loop Decrement Example</title>
</head>
<body>
  <h1>While Loop Decrement Example</h1>
  <p>This page mirrors the example from the lesson.</p>

  <?php
    $i = 0;
    $num = 50;

    while ($i < 10) {
      $num--;
      $i++;
    }

    echo "<p>Loop stopped at i = $i and num = $num</p>";
  ?>

  <p><a href="index.php">← Back to Site 7</a></p>
</body>
</html>