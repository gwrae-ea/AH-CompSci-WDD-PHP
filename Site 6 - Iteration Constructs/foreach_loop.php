<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The foreach Loop</title>
</head>
<body>
  <h1>The foreach Loop</h1>
  <p>Use foreach to work through every element in an array.</p>

  <?php
    $students = ["Aisha", "Ben", "Cara", "Daniel"];
    echo "<h2>Student names</h2>";
    foreach ($students as $student) {
      echo "$student<br>";
    }

    $scores = [
      "Aisha" => 82,
      "Ben" => 91,
      "Cara" => 77,
      "Daniel" => 88,
    ];

    echo "<h2>Student scores</h2>";
    foreach ($scores as $name => $score) {
      echo "$name scored $score<br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 6</a></p>
</body>
</html>