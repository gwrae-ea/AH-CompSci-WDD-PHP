<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 6</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Times Table with a For Loop</h2>
  <p>This example prints the first 20 values of the 5 times table using a for loop.</p>

  <?php
    for ($multiplier = 1; $multiplier <= 20; $multiplier++) {
      $result = $multiplier * 5;
      echo "$multiplier x 5 = $result<br>";
    }
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Write your own for loop</strong> that prints a times table for a number of your choice. Use a different range than the example.</p>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Choose a times table (e.g., 3, 7, 9, 12, etc.)</li>
    <li>Choose how many values to display (different from 20)</li>
    <li>Use a for loop to generate the output</li>
    <li>Display in the same format: "X x Y = Z"</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Write a for loop here
    // Example structure:
    // for ($multiplier = 1; $multiplier <= YOUR_LIMIT; $multiplier++) {
    //   $result = $multiplier * YOUR_TABLE;
    //   echo "$multiplier x YOUR_TABLE = $result<br>";
    // }
    
    echo "<p style='color: #999;'><em>[Add your for loop code here. The output will appear below this message.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 6</a></p>
</body>
</html>