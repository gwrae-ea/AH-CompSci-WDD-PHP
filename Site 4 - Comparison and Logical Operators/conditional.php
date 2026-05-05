<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional Operator</title>
</head>
<body>
  <h1>Conditional Operator: ? :</h1>

  <?php
    echo "<h2>Syntax:</h2>";
    echo "<code>condition ? value_if_true : value_if_false</code><br><br>";
    echo "If the condition is true, the expression returns the first value.<br>";
    echo "If the condition is false, it returns the second value.<br><br>";
    
    echo "<h2>Example 1: Basic true/false</h2>";
    $A = 10;
    $B = 20;
    echo "&dollar;A = $A, &dollar;B = $B <br>";
    $result = ($A > $B) ? "A is greater" : "B is greater";
    echo "(&dollar;A > &dollar;B) ? \"A is greater\" : \"B is greater\" <br>";
    echo "Result: $result <br><br>";
    
    echo "<h2>Example 2: Equivalent if/else</h2>";
    echo "The ternary is shorthand for an if/else block:<br><br>";
    echo "With ternary operator:<br>";
    echo "<code>&dollar;label = (&dollar;A > &dollar;B) ? \"A is greater\" : \"B is greater\";</code><br><br>";
    echo "With if/else:<br>";
    echo "<code>if (&dollar;A > &dollar;B) { &dollar;label = \"A is greater\"; } else { &dollar;label = \"B is greater\"; }</code><br><br>";
    echo "Both produce the same result: $result <br><br>";
    
    echo "<h2>Example 3: Checking age</h2>";
    $age = 20;
    echo "&dollar;age = $age <br>";
    $status = ($age >= 18) ? "adult" : "minor";
    echo "(&dollar;age >= 18) ? \"adult\" : \"minor\" <br>";
    echo "Result: $status <br><br>";
    
    echo "<h2>Example 4: Even or odd</h2>";
    $number = 7;
    echo "&dollar;number = $number <br>";
    $parity = ($number % 2 == 0) ? "even" : "odd";
    echo "(&dollar;number % 2 == 0) ? \"even\" : \"odd\" <br>";
    echo "Result: $parity <br><br>";
    
    echo "<h2>Example 5: Pass or fail mark</h2>";
    $score = 65;
    $passMark = 50;
    echo "&dollar;score = $score, &dollar;passMark = $passMark <br>";
    $grade = ($score >= $passMark) ? "Pass" : "Fail";
    echo "(&dollar;score >= &dollar;passMark) ? \"Pass\" : \"Fail\" <br>";
    echo "Result: $grade <br><br>";
    
    echo "<h2>Example 6: Output directly in a string</h2>";
    $isLoggedIn = true;
    echo "Greeting: " . ($isLoggedIn ? "Welcome back!" : "Please log in.") . "<br><br>";
    
    echo "<h2>Common Use of ? : in PHP:</h2>";
    echo "✓ Display a message based on a condition<br>";
    echo "✓ Set a default value if a variable is empty<br>";
    echo "✓ Choose between two short values without writing a full if/else<br>";
    echo "✓ Inline output in echo statements<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
