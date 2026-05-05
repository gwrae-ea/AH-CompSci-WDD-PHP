<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Assignment</title>
</head>
<body>
  <h1>Simple Assignment Operator: =</h1>

  <?php
    echo "<h2>What the = operator does:</h2>";
    echo "It assigns the value from the right side to the left side variable.<br><br>";
    
    echo "<h2>Example 1: Assign a number</h2>";
    $A = 10;
    echo "&dollar;A = 10 <br>";
    echo "Now &dollar;A contains: $A <br><br>";
    
    echo "<h2>Example 2: Assign from another variable</h2>";
    $B = $A;
    echo "&dollar;B = &dollar;A <br>";
    echo "Now &dollar;B contains: $B <br>";
    echo "Now &dollar;A still contains: $A <br><br>";
    
    echo "<h2>Example 3: Assign the result of an expression</h2>";
    $C = 5 + 3;
    echo "&dollar;C = 5 + 3 <br>";
    echo "Now &dollar;C contains: $C <br><br>";
    
    echo "<h2>Example 4: Reassignment (overwrite)</h2>";
    $X = 100;
    echo "&dollar;X = 100 <br>";
    echo "Now &dollar;X contains: $X <br>";
    $X = 200;
    echo "&dollar;X = 200 (reassigned)<br>";
    echo "Now &dollar;X contains: $X <br>";
    echo "(The old value 100 is gone)<br><br>";
    
    echo "<h2>Important: = is for assignment, not for comparison</h2>";
    echo "Never use = in an if statement. Use == or === instead!<br>";
    echo "❌ Wrong: if (&dollar;x = 5) { }<br>";
    echo "✓ Correct: if (&dollar;x == 5) { }<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
