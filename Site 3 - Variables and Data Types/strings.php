<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings Data Type</title>
</head>
<body>
  <h1>Strings - Sequences of Characters</h1>

  <?php
    $string1 = "PHP supports string operations.";
    $string2 = 'Single quoted string';
    $name = "World";
    $greeting = "Hello, $name!";

    print "Double-quoted string: $string1<br>";
    print "Single-quoted string: $string2<br>";
    print "Interpolated string: $greeting<br>";

    // String concatenation
    $fullMessage = "Welcome to " . "PHP Programming" . "!";
    print "Concatenated: $fullMessage<br>";

    // String length
    $text = "PHP";
    print "Length of '$text': " . strlen($text) . "<br>";

    // String operations
    print "Uppercase: " . strtoupper($text) . "<br>";
    print "Lowercase: " . strtolower($text) . "<br>";

    // Check if value is string
    print "Is string1 a string? ";
    print(is_string($string1) ? "yes" : "no");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
