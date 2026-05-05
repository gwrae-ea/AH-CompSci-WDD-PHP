<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables - Basic Syntax</title>
</head>
<body>
  <h1>Basic Variable Syntax and Assignment</h1>

  <?php
    // Variables are denoted with a leading $
    $name = "PHP";
    $version = 8.3;
    $active = true;

    print "String variable: $name<br>";
    print "Numeric variable: $version<br>";
    print "Boolean variable: ";
    print($active ? "true" : "false");
    print "<br>";

    // Variables can be reassigned
    $name = "PHP Programming";
    print "Reassigned variable: $name<br>";

    // Variables do not need to be declared before assignment
    $undeclared = "This variable was not declared before use.";
    print "$undeclared<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
