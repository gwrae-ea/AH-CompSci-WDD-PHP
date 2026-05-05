<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Combined Assignment Examples</title>
</head>
<body>
  <h1>Assignment Operators: Real-World Examples</h1>

  <?php
    echo "<h2>Example 1: Shopping Cart Total</h2>";
    $cartTotal = 0;
    echo "&dollar;cartTotal = \$$cartTotal<br><br>";
    
    echo "Customer adds item: \$12.99<br>";
    $cartTotal += 12.99;
    echo "&dollar;cartTotal += 12.99 → \$$cartTotal <br><br>";
    
    echo "Customer adds item: \$8.50<br>";
    $cartTotal += 8.50;
    echo "&dollar;cartTotal += 8.50 → \$$cartTotal <br><br>";
    
    echo "Discount of \$3.00:<br>";
    $cartTotal -= 3.00;
    echo "&dollar;cartTotal -= 3.00 → \$$cartTotal <br><br>";
    
    echo "Tax (multiply by 1.08 for 8%):<br>";
    $cartTotal *= 1.08;
    echo "&dollar;cartTotal *= 1.08 → \$$cartTotal <br><br>";
    
    echo "Split among 2 people:<br>";
    $perPerson = $cartTotal;
    $perPerson /= 2;
    echo "&dollar;perPerson /= 2 → \$$perPerson per person<br><br>";
    
    echo "---<br><br>";
    
    echo "<h2>Example 2: Game Score with Multiplier</h2>";
    $score = 0;
    echo "&dollar;score = $score<br><br>";
    
    echo "Base points earned: 100<br>";
    $score += 100;
    echo "&dollar;score += 100 → $score<br><br>";
    
    echo "Double points bonus (2x multiplier):<br>";
    $score *= 2;
    echo "&dollar;score *= 2 → $score<br><br>";
    
    echo "Penalty: -50 points<br>";
    $score -= 50;
    echo "&dollar;score -= 50 → $score<br><br>";
    
    echo "Triple combo (3x):<br>";
    $score *= 3;
    echo "&dollar;score *= 3 → $score<br><br>";
    
    echo "---<br><br>";
    
    echo "<h2>Example 3: Inventory Management</h2>";
    $inventory = 1000;
    echo "&dollar;inventory = $inventory units<br><br>";
    
    echo "Order from supplier: 500 units<br>";
    $inventory += 500;
    echo "&dollar;inventory += 500 → $inventory<br><br>";
    
    echo "Customer purchases: 200 units<br>";
    $inventory -= 200;
    echo "&dollar;inventory -= 200 → $inventory<br><br>";
    
    echo "Return/refund: 30 units back in stock<br>";
    $inventory += 30;
    echo "&dollar;inventory += 30 → $inventory<br><br>";
    
    echo "Split into 4 warehouses equally:<br>";
    $warehouseQty = $inventory;
    $warehouseQty /= 4;
    echo "&dollar;warehouseQty = &dollar;inventory / 4 → $warehouseQty per warehouse<br><br>";
    
    echo "---<br><br>";
    
    echo "<h2>Example 4: Temperature Conversion with Operations</h2>";
    $celsius = 25;
    $fahrenheit = $celsius;
    echo "&dollar;celsius = {$celsius}°C<br>";
    echo "Convert to Fahrenheit (F = C × 9/5 + 32)<br><br>";
    
    $fahrenheit *= 9;
    echo "&dollar;fahrenheit *= 9 → $fahrenheit<br>";
    
    $fahrenheit /= 5;
    echo "&dollar;fahrenheit /= 5 → $fahrenheit<br>";
    
    $fahrenheit += 32;
    echo "&dollar;fahrenheit += 32 → {$fahrenheit}°F<br><br>";
    
    echo "Calculation: ($celsius × 9/5) + 32 = $fahrenheit<br><br>";
    
    echo "---<br><br>";
    
    echo "<h2>Example 5: Working with Percentages</h2>";
    $salary = 40000;
    echo "&dollar;salary = \$$salary<br><br>";
    
    echo "Raise of 5%:<br>";
    $salaryAfterRaise = $salary;
    $salaryAfterRaise *= 1.05;
    echo "&dollar;salaryAfterRaise *= 1.05 → \$$salaryAfterRaise<br><br>";
    
    echo "Tax (25% of new salary):<br>";
    $taxAmount = $salaryAfterRaise;
    $taxAmount *= 0.25;
    echo "&dollar;taxAmount = &dollar;salaryAfterRaise * 0.25 → \$$taxAmount<br><br>";
    
    echo "Take-home pay (after tax):<br>";
    $takeHome = $salaryAfterRaise;
    $takeHome *= 0.75;
    echo "&dollar;takeHome *= 0.75 → \$$takeHome<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
