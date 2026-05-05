<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subtract and Assign</title>
</head>
<body>
  <h1>Subtract and Assign Operator: -=</h1>

  <?php
    echo "<h2>What -= does:</h2>";
    echo "It subtracts the right side value from the left side variable and stores the result back.<br>";
    echo "<code>&dollar;C -= A</code> is equivalent to <code>&dollar;C = &dollar;C - A</code><br><br>";
    
    echo "<h2>Example 1: Simple subtraction and assignment</h2>";
    $C = 20;
    echo "&dollar;C = 20 <br>";
    echo "Display: $C <br><br>";
    
    $A = 5;
    echo "&dollar;A = 5 <br>";
    echo "&dollar;C -= &dollar;A (same as &dollar;C = &dollar;C - &dollar;A)<br>";
    $C -= $A;
    echo "Now &dollar;C = $C <br>";
    echo "(20 - 5 = 15)<br><br>";
    
    echo "<h2>Example 2: Counting down</h2>";
    $countdown = 100;
    echo "&dollar;countdown = 100 <br>";
    echo "Display: $countdown <br><br>";
    
    echo "&dollar;countdown -= 25<br>";
    $countdown -= 25;
    echo "Now &dollar;countdown = $countdown <br>";
    
    echo "&dollar;countdown -= 10<br>";
    $countdown -= 10;
    echo "Now &dollar;countdown = $countdown <br>";
    
    echo "&dollar;countdown -= 20<br>";
    $countdown -= 20;
    echo "Now &dollar;countdown = $countdown <br>";
    echo "(100 - 25 - 10 - 20 = 45)<br><br>";
    
    echo "<h2>Example 3: Removing inventory (common use case)</h2>";
    $stock = 500;
    echo "&dollar;stock = 500 (items in warehouse)<br>";
    
    echo "Customer 1 buys 50: &dollar;stock -= 50<br>";
    $stock -= 50;
    echo "Now &dollar;stock = $stock <br>";
    
    echo "Customer 2 buys 75: &dollar;stock -= 75<br>";
    $stock -= 75;
    echo "Now &dollar;stock = $stock <br>";
    
    echo "Customer 3 buys 30: &dollar;stock -= 30<br>";
    $stock -= 30;
    echo "Now &dollar;stock = $stock <br>";
    echo "(500 - 50 - 75 - 30 = 345)<br><br>";
    
    echo "<h2>Why use -= ?</h2>";
    echo "✓ Shorter than: &dollar;stock = &dollar;stock - 50<br>";
    echo "✓ Clearer intent: \"subtract from the stock\"<br>";
    echo "✓ Common for inventory, countdown, and balance operations<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
