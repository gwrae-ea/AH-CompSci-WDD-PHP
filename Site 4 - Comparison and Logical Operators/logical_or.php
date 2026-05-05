<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical OR Operators</title>
</head>
<body>
  <h1>Logical OR Operators: or and ||</h1>

  <?php
    $A = 10;
    $B = 20;
    $C = 0;
    
    echo "<h2>Variables:</h2>";
    echo "&dollar;A = $A (true in boolean context)<br>";
    echo "&dollar;B = $B (true in boolean context)<br>";
    echo "&dollar;C = $C (false in boolean context)<br><br>";
    
    echo "<h2>OR Operator (or):</h2>";
    echo "At least one operand must be true:<br>";
    echo "(&dollar;A or &dollar;B): ";
    echo ($A or $B) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;A or &dollar;C): ";
    echo ($A or $C) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;C or &dollar;B): ";
    echo ($C or $B) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;C or &dollar;C): ";
    echo ($C or $C) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>Logical OR Operator (||):</h2>";
    echo "At least one operand must be non-zero:<br>";
    echo "(&dollar;A || &dollar;B): ";
    echo ($A || $B) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;A || &dollar;C): ";
    echo ($A || $C) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;C || &dollar;B): ";
    echo ($C || $B) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;C || &dollar;C): ";
    echo ($C || $C) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>With Comparison Expressions:</h2>";
    $X = 5;
    $Y = 25;
    
    echo "&dollar;X = $X, &dollar;Y = $Y <br>";
    echo "(&dollar;X > 10 || &dollar;Y > 20): ";
    echo ($X > 10 || $Y > 20) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;X > 10 || &dollar;Y < 20): ";
    echo ($X > 10 || $Y < 20) ? "true" : "false";
    echo "<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
