<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 8</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Times Table with a Do-While Loop</h2>
  <p>This example uses a do...while loop to display a times table. The loop body always executes at least once.</p>

  <?php
    $numberOfValues = 12;
    $timesTable = 8;
    $counter = 1;

    do {
      $result = $counter * $timesTable;
      echo "$counter x $timesTable = $result<br>";
      $counter++;
    } while ($counter <= $numberOfValues);
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Write your own do-while loop</strong> that prints numbers from 1 up to a limit you choose, with a description for each.</p>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Choose an ending number (e.g., 15, 20, 25, etc.)</li>
    <li>Use a do...while loop to increment from 1</li>
    <li>Display each number with a label (e.g., "Item #1", "Item #2", etc.)</li>
    <li>Increment the counter each iteration</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Write a do...while loop that counts up
    // Example structure:
    // $counter = 1;
    // do {
    //   echo "Item #$counter<br>";
    //   $counter++;
    // } while ($counter <= YOUR_LIMIT);
    
    echo "<p style='color: #999;'><em>[Add your counting do...while loop here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 8</a></p>
</body>
</html>