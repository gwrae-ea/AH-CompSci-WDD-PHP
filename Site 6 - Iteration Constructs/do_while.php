<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The do...while Loop</title>
</head>
<body>
  <h1>The do...while Loop</h1>
  <p>This loop always runs the code once before checking the condition.</p>

  <?php
    $count = 1;

    echo "<h2>Counting from 1 to 5</h2>";
    do {
      echo "Count: $count<br>";
      $count++;
    } while ($count <= 5);

    $menuChoice = 1;

    echo "<h2>Menu shown at least once</h2>";
    do {
      echo "The menu is displayed for choice $menuChoice.<br>";
      $menuChoice++;
    } while ($menuChoice <= 3);
  ?>

  <p><a href="index.php">← Back to Site 6</a></p>
</body>
</html>