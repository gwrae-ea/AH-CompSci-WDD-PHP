<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While Increment Example</title>
</head>
<body>
  <h1>Do While Increment Example</h1>
  <p>This page mirrors the example from the lesson.</p>

  <?php
    $i = 0;
    $num = 0;

    do {
      $i++;
    } while ($i < 10);

    echo "<p>Loop stopped at i = $i</p>";
  ?>

  <p><a href="index.php">← Back to Site 8</a></p>
</body>
</html>