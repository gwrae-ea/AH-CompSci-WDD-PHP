<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Divide and Assign</title>
</head>
<body>
  <h1>Divide and Assign Operator: /=</h1>

  <?php
    echo "<h2>What /= does:</h2>";
    echo "It divides the left side variable by the right side value and stores the result back.<br>";
    echo "<code>&dollar;C /= A</code> is equivalent to <code>&dollar;C = &dollar;C / A</code><br><br>";
    
    echo "<h2>Example 1: Simple division and assignment</h2>";
    $C = 20;
    echo "&dollar;C = 20 <br>";
    echo "Display: $C <br><br>";
    
    $A = 4;
    echo "&dollar;A = 4 <br>";
    echo "&dollar;C /= &dollar;A (same as &dollar;C = &dollar;C / &dollar;A)<br>";
    $C /= $A;
    echo "Now &dollar;C = $C <br>";
    echo "(20 / 4 = 5)<br><br>";
    
    echo "<h2>Example 2: Halving values</h2>";
    $value = 100;
    echo "&dollar;value = 100 <br>";
    echo "Display: $value <br><br>";
    
    echo "&dollar;value /= 2<br>";
    $value /= 2;
    echo "Now &dollar;value = $value <br>";
    
    echo "&dollar;value /= 2<br>";
    $value /= 2;
    echo "Now &dollar;value = $value <br>";
    
    echo "&dollar;value /= 2<br>";
    $value /= 2;
    echo "Now &dollar;value = $value <br>";
    echo "(100 / 2 / 2 / 2 = 12.5)<br><br>";
    
    echo "<h2>Example 3: Distributing items evenly (common use case)</h2>";
    $totalCost = 120;
    $people = 4;
    echo "&dollar;totalCost = \$$totalCost <br>";
    echo "Split among &dollar;people = $people people<br>";
    echo "&dollar;totalCost /= &dollar;people<br>";
    $totalCost /= $people;
    echo "Cost per person = \$$totalCost <br>";
    echo "(120 / 4 = 30)<br><br>";
    
    echo "<h2>Example 4: Reducing dimensions (scaling down)</h2>";
    $imageWidth = 1200;
    echo "&dollar;imageWidth = $imageWidth pixels (original)<br>";
    echo "Scale to half size: &dollar;imageWidth /= 2<br>";
    $imageWidth /= 2;
    echo "Now &dollar;imageWidth = $imageWidth pixels <br>";
    echo "Scale to half again: &dollar;imageWidth /= 2<br>";
    $imageWidth /= 2;
    echo "Now &dollar;imageWidth = $imageWidth pixels <br>";
    echo "(1200 / 2 / 2 = 300)<br><br>";
    
    echo "<h2>Why use /= ?</h2>";
    echo "✓ Shorter than: &dollar;value = &dollar;value / 2<br>";
    echo "✓ Clearer intent: \"divide this value\"<br>";
    echo "✓ Common for scaling, averaging, and distribution<br>";
    echo "⚠ Warning: Be careful not to divide by zero!<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
