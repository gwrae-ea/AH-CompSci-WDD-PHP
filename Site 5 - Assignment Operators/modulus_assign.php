<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modulus and Assign</title>
</head>
<body>
  <h1>Modulus and Assign Operator: %=</h1>

  <?php
    echo "<h2>What %= does:</h2>";
    echo "It divides the left side variable by the right side value and stores the REMAINDER back.<br>";
    echo "<code>&dollar;C %= A</code> is equivalent to <code>&dollar;C = &dollar;C % A</code><br>";
    echo "Modulus (%) returns the remainder after division.<br><br>";
    
    echo "<h2>Example 1: Simple modulus and assignment</h2>";
    $C = 20;
    echo "&dollar;C = 20 <br>";
    echo "Display: $C <br><br>";
    
    $A = 6;
    echo "&dollar;A = 6 <br>";
    echo "&dollar;C %= &dollar;A (same as &dollar;C = &dollar;C % &dollar;A)<br>";
    $C %= $A;
    echo "Now &dollar;C = $C <br>";
    echo "(20 divided by 6 = 3 remainder 2)<br><br>";
    
    echo "<h2>Example 2: Extracting remainders</h2>";
    $value = 50;
    echo "&dollar;value = 50 <br>";
    echo "Display: $value <br><br>";
    
    echo "&dollar;value %= 3 (remainder when dividing by 3)<br>";
    $value %= 3;
    echo "Now &dollar;value = $value <br>";
    echo "(50 / 3 = 16 remainder 2)<br><br>";
    
    echo "<h2>Example 3: Converting to a range (common use case)</h2>";
    echo "Useful for: checking if number is even/odd, cycling through patterns<br><br>";
    
    $even = 10;
    echo "&dollar;even = 10<br>";
    echo "&dollar;even %= 2<br>";
    $even %= 2;
    echo "Result: $even (0 means even, 1 means odd) <br><br>";
    
    $odd = 15;
    echo "&dollar;odd = 15<br>";
    echo "&dollar;odd %= 2<br>";
    $odd %= 2;
    echo "Result: $odd (0 means even, 1 means odd) <br><br>";
    
    echo "<h2>Example 4: Cycling through days (common use case)</h2>";
    echo "If today is day 5, what day is it 23 days from now?<br><br>";
    
    $currentDay = 5;
    $daysAhead = 23;
    $nextDay = $currentDay + $daysAhead;
    echo "&dollar;nextDay = &dollar;currentDay + &dollar;daysAhead = $nextDay <br>";
    echo "&dollar;nextDay %= 7 (to keep in range 0-6)<br>";
    $nextDay %= 7;
    echo "Day of the week: $nextDay <br>";
    echo "(Days: 0=Sun, 1=Mon, ..., 6=Sat)<br><br>";
    
    echo "<h2>Example 5: Clock arithmetic (hours)</h2>";
    $currentHour = 22;  // 10 PM
    $hoursToAdd = 5;
    echo "&dollar;currentHour = $currentHour (10 PM)<br>";
    echo "&dollar;hoursToAdd = $hoursToAdd <br>";
    
    $newHour = $currentHour + $hoursToAdd;
    echo "&dollar;newHour = $newHour <br>";
    echo "&dollar;newHour %= 24 (to keep in 0-23 range)<br>";
    $newHour %= 24;
    echo "New hour: $newHour (";
    if ($newHour == 0) {
      echo "midnight";
    } elseif ($newHour < 12) {
      echo "$newHour AM";
    } elseif ($newHour == 12) {
      echo "noon";
    } else {
      echo ($newHour - 12) . " PM";
    }
    echo ")<br>\n";
    echo "(22 + 5 = 27, 27 % 24 = 3 = 3 AM)<br><br>";
    
    echo "<h2>Why use %= ?</h2>";
    echo "✓ Shorter than: &dollar;value = &dollar;value % 7<br>";
    echo "✓ Clearer intent: \"get the remainder\"<br>";
    echo "✓ Common for: even/odd checks, cycling through ranges, time calculations<br>";
  ?>

  <p><a href="index.php">← Back to Site 5</a></p>
</body>
</html>
