<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 10</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the examples below, then complete your own coding challenge.</p>

  <h2>Example: Using Break to Stop Early</h2>
  <p>This loop stops early when a condition is met using the break keyword.</p>

  <?php
    echo "<h3>Break Example</h3>";
    $counter = 0;

    while ($counter < 10) {
      $counter++;

      if ($counter == 5) {
        echo "Stopping early at $counter<br>";
        break;
      }

      echo "Counter is $counter<br>";
    }
  ?>

  <h2>Example: Using Continue to Skip an Iteration</h2>
  <p>This loop skips processing one value using the continue keyword.</p>

  <?php
    echo "<h3>Continue Example</h3>";
    $values = array(1, 2, 3, 4, 5, 6);

    foreach ($values as $value) {
      if ($value == 4) {
        continue;
      }

      echo "Processed value: $value<br>";
    }
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Write your own loop using break or continue</strong> to control loop flow.</p>
  <p><strong>Choose one option:</strong></p>
  <ul>
    <li><strong>Option A (Break):</strong> Write a loop that counts and stops when it reaches a certain number</li>
    <li><strong>Option B (Continue):</strong> Write a loop that processes items but skips certain values</li>
  </ul>
  <p><strong>Example scenarios:</strong></p>
  <ul>
    <li>Stop a countdown at a specific number</li>
    <li>Skip even or odd numbers in a range</li>
    <li>Stop processing items when you find a specific one</li>
    <li>Skip weekend days in a list of days</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Write a loop using break or continue
    // 
    // Option A - Using break:
    // for ($i = 1; $i <= 20; $i++) {
    //   if ($i == STOP_NUMBER) {
    //     echo "Stopping at $i<br>";
    //     break;
    //   }
    //   echo "Number: $i<br>";
    // }
    //
    // Option B - Using continue:
    // $items = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    // foreach ($items as $item) {
    //   if ($item == SKIP_NUMBER) {
    //     continue;
    //   }
    //   echo "Processing: $item<br>";
    // }
    
    echo "<p style='color: #999;'><em>[Add your loop with break or continue here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 10</a></p>
</body>
</html>