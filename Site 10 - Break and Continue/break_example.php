<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Break Statement Example</title>
</head>
<body>
  <h1>Break Statement Example</h1>
  <p>This page mirrors the lesson example by stopping a loop when the counter reaches 3.</p>

  <?php
    $i = 0;

    while ($i < 10) {
      $i++;
      if ($i == 3) {
        break;
      }
    }

    echo "<p>Loop stopped at i = $i</p>";
  ?>

  <p><a href="index.php">← Back to Site 10</a></p>
</body>
</html>