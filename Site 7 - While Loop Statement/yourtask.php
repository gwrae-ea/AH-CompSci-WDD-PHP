<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 7</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Times Table with a While Loop</h2>
  <p>This example uses a while loop to display a times table. Edit the variables to see different results.</p>

  <?php
    $numberOfValues = 12;
    $timesTable = 7;
    $counter = 1;

    while ($counter <= $numberOfValues) {
      $result = $counter * $timesTable;
      echo "$counter x $timesTable = $result<br>";
      $counter++;
    }
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Write your own while loop</strong> that generates a countdown from a starting number to 1.</p>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Choose a starting number (e.g., 10, 15, 20, etc.)</li>
    <li>Use a while loop to count down to 1</li>
    <li>Display each number with a message (e.g., "Countdown: 10", "Countdown: 9", etc.)</li>
    <li>Decrement the counter each iteration</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Write a while loop for a countdown
    // Example structure:
    // $counter = YOUR_START_NUMBER;
    // while ($counter >= 1) {
    //   echo "Countdown: $counter<br>";
    //   $counter--;
    // }
    
    echo "<p style='color: #999;'><em>[Add your countdown while loop here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 7</a></p>
</body>
</html>