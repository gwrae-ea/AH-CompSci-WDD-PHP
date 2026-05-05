<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equality Operators</title>
</head>
<body>
  <h1>Equality Operators: == and !=</h1>

  <?php
    $A = 10;
    $B = 20;
    
    echo "<h2>Variables:</h2>";
    echo "&dollar;A = $A <br>";
    echo "&dollar;B = $B <br><br>";
    
    echo "<h2>Equality Tests (==):</h2>";
    echo "&dollar;A == &dollar;B: ";
    if ($A == $B) {
      echo "true";
    } else {
      echo "false";
    }
    echo "<br>";
    
    echo "&dollar;A == 10: ";
    if ($A == 10) {
      echo "true";
    } else {
      echo "false";
    }
    echo "<br><br>";
    
    echo "<h2>Inequality Tests (!=):</h2>";
    echo "&dollar;A != &dollar;B: ";
    if ($A != $B) {
      echo "true";
    } else {
      echo "false";
    }
    echo "<br>";
    
    echo "&dollar;A != 10: ";
    if ($A != 10) {
      echo "true";
    } else {
      echo "false";
    }
    echo "<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
