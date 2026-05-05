<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add and Assign</title>
</head>
<body>
  <h1>Add and Assign Operator: +=</h1>

  <?php
    echo "<h2>What += does:</h2>";
    echo "It adds the right side value to the left side variable and stores the result back.<br>";
    echo "<code>&dollar;C += A</code> is equivalent to <code>&dollar;C = &dollar;C + A</code><br><br>";
    
    echo "<h2>Example 1: Simple addition and assignment</h2>";
    $C = 10;
    echo "&dollar;C = 10 <br>";
    echo "Display: $C <br><br>";
    
    $A = 5;
    echo "&dollar;A = 5 <br>";
    echo "&dollar;C += &dollar;A (same as &dollar;C = &dollar;C + &dollar;A)<br>";
    $C += $A;
    echo "Now &dollar;C = $C <br>";
    echo "(10 + 5 = 15)<br><br>";
    
    echo "<h2>Example 2: Using += multiple times</h2>";
    $total = 100;
    echo "&dollar;total = 100 <br>";
    echo "Display: $total <br><br>";
    
    echo "&dollar;total += 50<br>";
    $total += 50;
    echo "Now &dollar;total = $total <br>";
    
    echo "&dollar;total += 25<br>";
    $total += 25;
    echo "Now &dollar;total = $total <br>";
    
    echo "&dollar;total += 10<br>";
    $total += 10;
    echo "Now &dollar;total = $total <br>";
    echo "(100 + 50 + 25 + 10 = 185)<br><br>";
    
    echo "<h2>Example 3: Accumulating values (common use case)</h2>";
    $score = 0;
    echo "&dollar;score = 0 <br>";
    
    echo "Player scores 10 points: &dollar;score += 10<br>";
    $score += 10;
    echo "Now &dollar;score = $score <br>";
    
    echo "Player scores 15 points: &dollar;score += 15<br>";
    $score += 15;
    echo "Now &dollar;score = $score <br>";
    
    echo "Player scores 8 points: &dollar;score += 8<br>";
    $score += 8;
    echo "Now &dollar;score = $score <br>";
    echo "(Total: 10 + 15 + 8 = 33)<br><br>";
    
    echo "<h2>Why use += ?</h2>";
    echo "✓ Shorter than: &dollar;score = &dollar;score + 10<br>";
    echo "✓ Clearer intent: \"add to the score\"<br>";
    echo "✓ Commonly used for counters and totals<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
