<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Automatic Type Conversion</title>
</head>
<body>
  <h1>Automatic Type Conversion</h1>

  <?php
    // PHP automatically converts types between operations
    $intValue = 10;
    $floatValue = 3.5;
    $stringValue = "25";

    $result1 = $intValue + $floatValue;
    print "Integer + Float: $result1 (type: ";
    print(is_float($result1) ? "float" : "other");
    print ")<br>";

    $result2 = $intValue + (int)$stringValue;
    print "Integer + String (cast to int): $result2<br>";

    // String concatenation
    $message = "The answer is " . 42;
    print "String concatenation: $message<br>";

    // Type juggling in comparisons
    $stringNum = "5";
    $intNum = 5;
    print "String '5' == Integer 5: ";
    print($stringNum == $intNum ? "true" : "false");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
