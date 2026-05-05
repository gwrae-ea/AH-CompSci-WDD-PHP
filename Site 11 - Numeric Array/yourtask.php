<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 11</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Calculating Array Totals and Averages</h2>
  <p>This example creates an array of integers, calculates the total and average, and demonstrates sparse arrays.</p>

  <?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $total = 0;

    foreach ($numbers as $value) {
      $total += $value;
    }

    $average = $total / count($numbers);

    echo "<p>Array: " . implode(", ", $numbers) . "</p>";
    echo "<p>Total: $total</p>";
    echo "<p>Average: $average</p>";

    $numbers[13] = 99;

    echo "<h3>After assigning index 13</h3>";
    echo "<p>PHP creates index 13, but indexes 10, 11, and 12 remain missing (sparse array).</p>";

    foreach ($numbers as $index => $value) {
      echo "Index $index contains $value<br>";
    }
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Create your own numeric array and calculate statistics</strong>.</p>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Create an array with at least 5 numbers (e.g., test scores, temperatures, ages, prices)</li>
    <li>Calculate the total (sum) of all values using a loop or array function</li>
    <li>Calculate the average</li>
    <li>Display the original array, total, and average</li>
    <li>Optional: Find the maximum and minimum values</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Create a numeric array and calculate statistics
    // Example structure:
    // $scores = array(85, 92, 78, 88, 95);
    // $total = 0;
    //
    // foreach ($scores as $score) {
    //   $total += $score;
    // }
    //
    // $average = $total / count($scores);
    // $max = max($scores);
    // $min = min($scores);
    //
    // echo "Scores: " . implode(", ", $scores) . "<br>";
    // echo "Total: $total<br>";
    // echo "Average: $average<br>";
    // echo "Highest: $max<br>";
    // echo "Lowest: $min<br>";
    
    echo "<p style='color: #999;'><em>[Add your numeric array statistics code here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 11</a></p>
</body>
</html>
