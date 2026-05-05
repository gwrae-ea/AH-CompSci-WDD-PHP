<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiply and Assign</title>
</head>
<body>
  <h1>Multiply and Assign Operator: *=</h1>

  <?php
    echo "<h2>What *= does:</h2>";
    echo "It multiplies the left side variable by the right side value and stores the result back.<br>";
    echo "<code>&dollar;C *= A</code> is equivalent to <code>&dollar;C = &dollar;C * A</code><br><br>";
    
    echo "<h2>Example 1: Simple multiplication and assignment</h2>";
    $C = 10;
    echo "&dollar;C = 10 <br>";
    echo "Display: $C <br><br>";
    
    $A = 3;
    echo "&dollar;A = 3 <br>";
    echo "&dollar;C *= &dollar;A (same as &dollar;C = &dollar;C * &dollar;A)<br>";
    $C *= $A;
    echo "Now &dollar;C = $C <br>";
    echo "(10 * 3 = 30)<br><br>";
    
    echo "<h2>Example 2: Exponential growth</h2>";
    $bacteria = 1;
    echo "&dollar;bacteria = 1 <br>";
    echo "Display: $bacteria <br><br>";
    
    echo "After 1 hour (doubles): &dollar;bacteria *= 2<br>";
    $bacteria *= 2;
    echo "Now &dollar;bacteria = $bacteria <br>";
    
    echo "After 2 hours (doubles): &dollar;bacteria *= 2<br>";
    $bacteria *= 2;
    echo "Now &dollar;bacteria = $bacteria <br>";
    
    echo "After 3 hours (doubles): &dollar;bacteria *= 2<br>";
    $bacteria *= 2;
    echo "Now &dollar;bacteria = $bacteria <br>";
    echo "(1 × 2 × 2 × 2 = 8)<br><br>";
    
    echo "<h2>Example 3: Scaling prices (common use case)</h2>";
    $unitPrice = 10;
    echo "&dollar;unitPrice = \$10 (per item)<br>\n";
    
    $totalPrice = 5;  // 5 items
    echo "&dollar;totalPrice = \$5 initial value<br>";
    echo "Multiply by number of items: &dollar;totalPrice *= 5<br>";
    $totalPrice *= 5;
    echo "Now &dollar;totalPrice = \$$totalPrice <br>";
    echo "(5 × 5 = 25)<br><br>";
    
    echo "<h2>Example 4: Percentage calculation</h2>";
    $original = 100;
    $discount = 0.9;  // 10% discount = multiply by 0.9
    echo "&dollar;original = \$$original <br>";
    echo "&dollar;discount = 0.9 (10% off = keep 90%)<br>";
    echo "&dollar;original *= 0.9<br>";
    $original *= $discount;
    echo "Now &dollar;original = \$$original <br>";
    echo "(100 × 0.9 = 90)<br><br>";
    
    echo "<h2>Why use *= ?</h2>";
    echo "✓ Shorter than: &dollar;value = &dollar;value * 2<br>";
    echo "✓ Clearer intent: \"multiply this value\"<br>";
    echo "✓ Common for scaling, discounts, and growth calculations<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
