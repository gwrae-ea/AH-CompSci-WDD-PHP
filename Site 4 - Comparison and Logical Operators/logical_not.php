<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical NOT Operator</title>
</head>
<body>
  <h1>Logical NOT Operator: !</h1>

  <?php
    $A = 10;
    $B = 0;
    
    echo "<h2>Variables:</h2>";
    echo "&dollar;A = $A (true in boolean context)<br>";
    echo "&dollar;B = $B (false in boolean context)<br><br>";
    
    echo "<h2>NOT Operator (!) - Reverses Logic:</h2>";
    echo "!(&dollar;A): ";
    echo (!$A) ? "true" : "false";
    echo "<br>";
    
    echo "!(&dollar;B): ";
    echo (!$B) ? "true" : "false";
    echo "<br>";
    
    echo "!(true): ";
    echo !(true) ? "true" : "false";
    echo "<br>";
    
    echo "!(false): ";
    echo !(false) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>NOT with Comparison Expressions:</h2>";
    $X = 15;
    $Y = 25;
    
    echo "&dollar;X = $X, &dollar;Y = $Y <br>";
    echo "!(&dollar;X > &dollar;Y): ";
    echo !($X > $Y) ? "true" : "false";
    echo "<br>";
    
    echo "!(&dollar;X < &dollar;Y): ";
    echo !($X < $Y) ? "true" : "false";
    echo "<br>";
    
    echo "!(&dollar;X == 15): ";
    echo !($X == 15) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>NOT with AND/OR:</h2>";
    echo "!(&dollar;A && &dollar;B): ";
    echo !($A && $B) ? "true" : "false";
    echo "<br>";
    
    echo "!(&dollar;A || &dollar;B): ";
    echo !($A || $B) ? "true" : "false";
    echo "<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
