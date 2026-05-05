<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical AND Operators</title>
</head>
<body>
  <h1>Logical AND Operators: and and &&</h1>

  <?php
    $A = 10;
    $B = 20;
    $C = 0;
    
    echo "<h2>Variables:</h2>";
    echo "&dollar;A = $A (true in boolean context)<br>";
    echo "&dollar;B = $B (true in boolean context)<br>";
    echo "&dollar;C = $C (false in boolean context)<br><br>";
    
    echo "<h2>AND Operator (and):</h2>";
    echo "Both operands must be true:<br>";
    echo "(&dollar;A and &dollar;B): ";
    echo ($A and $B) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;A and &dollar;C): ";
    echo ($A and $C) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;C and &dollar;B): ";
    echo ($C and $B) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>Logical AND Operator (&&):</h2>";
    echo "Both operands must be non-zero:<br>";
    echo "(&dollar;A && &dollar;B): ";
    echo ($A && $B) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;A && &dollar;C): ";
    echo ($A && $C) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;C && &dollar;B): ";
    echo ($C && $B) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>With Comparison Expressions:</h2>";
    $X = 15;
    $Y = 25;
    
    echo "&dollar;X = $X, &dollar;Y = $Y <br>";
    echo "(&dollar;X > 10 && &dollar;Y < 30): ";
    echo ($X > 10 && $Y < 30) ? "true" : "false";
    echo "<br>";
    
    echo "(&dollar;X > 20 && &dollar;Y < 30): ";
    echo ($X > 20 && $Y < 30) ? "true" : "false";
    echo "<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
