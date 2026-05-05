<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loop Times Table Example</title>
</head>
<body>
  <h1>Configurable Times Table Example</h1>
  <p>This example uses variables at the start of the program to control the table and the number of values.</p>

  <?php
    $numberOfValues = 10;
    $timesTable = 6;
    $counter = 1;

    echo "<p>Displaying the first $numberOfValues values of the $timesTable times table.</p>";

    while ($counter <= $numberOfValues) {
      $result = $counter * $timesTable;
      echo "$counter x $timesTable = $result<br>";
      $counter++;
    }
  ?>

  <p><a href="index.php">← Back to Site 7</a></p>
</body>
</html>