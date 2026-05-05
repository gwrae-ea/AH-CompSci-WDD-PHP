<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relational Operators</title>
</head>
<body>
  <h1>Relational Operators: >, <, >=, <=</h1>

  <?php
    $A = 10;
    $B = 20;
    
    echo "<h2>Variables:</h2>";
    echo "&dollar;A = $A <br>";
    echo "&dollar;B = $B <br><br>";
    
    echo "<h2>Greater Than (>):</h2>";
    echo "&dollar;A > &dollar;B: ";
    echo ($A > $B) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;B > &dollar;A: ";
    echo ($B > $A) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;A > 5: ";
    echo ($A > 5) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>Less Than (<):</h2>";
    echo "&dollar;A < &dollar;B: ";
    echo ($A < $B) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;B < &dollar;A: ";
    echo ($B < $A) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;A < 15: ";
    echo ($A < 15) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>Greater Than or Equal to (>=):</h2>";
    echo "&dollar;A >= &dollar;B: ";
    echo ($A >= $B) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;A >= 10: ";
    echo ($A >= 10) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;B >= 20: ";
    echo ($B >= 20) ? "true" : "false";
    echo "<br><br>";
    
    echo "<h2>Less Than or Equal to (<=):</h2>";
    echo "&dollar;A <= &dollar;B: ";
    echo ($A <= $B) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;B <= 20: ";
    echo ($B <= 20) ? "true" : "false";
    echo "<br>";
    
    echo "&dollar;A <= 10: ";
    echo ($A <= 10) ? "true" : "false";
    echo "<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
