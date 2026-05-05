<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable Naming Rules</title>
</head>
<body>
  <h1>Variable Naming Rules</h1>

  <h2>Valid Variable Names</h2>
  <?php
    // Rules for naming variables:
    // 1. Must begin with a letter or underscore character
    // 2. Can consist of numbers, letters, underscores
    // 3. No size limit for variable names
    // 4. Cannot use characters like + - % ( ) . & etc

    // Valid variable names
    $name = "John";
    $_age = 25;
    $user_email = "john@example.com";
    $Address123 = "123 Main Street";
    $_private = "hidden data";
    $MyVar = "uppercase letters allowed";

    print "Valid variable names:<br>";
    print "\$name = $name<br>";
    print "\$_age = $_age<br>";
    print "\$user_email = $user_email<br>";
    print "\$Address123 = $Address123<br>";
    print "\$_private = $_private<br>";
    print "\$MyVar = $MyVar<br>";
  ?>

  <h2>Invalid Variable Names (Would cause errors)</h2>
  <?php
    print "Invalid variable names:<br>";
    print "These would cause syntax errors:<br>";
    print "\$123name - INVALID: starts with a number<br>";
    print "\$user-name - INVALID: contains hyphen<br>";
    print "\$user+age - INVALID: contains plus sign<br>";
    print "\$user\$balance - INVALID: contains special character<br>";
    print "\$user.name - INVALID: contains period<br>";
    print "\$user&id - INVALID: contains ampersand<br>";
  ?>

  <h2>Variable Naming Best Practices</h2>
  <?php
    // Good naming practices
    $firstName = "Alice";         // camelCase
    $last_name = "Smith";         // snake_case
    $MAXIMUM_SIZE = 1000;         // UPPERCASE for constants
    $_internal = "private use";   // underscore prefix for internal

    print "Best practices:<br>";
    print "camelCase: \$firstName = $firstName<br>";
    print "snake_case: \$last_name = $last_name<br>";
    print "UPPERCASE: \$MAXIMUM_SIZE = $MAXIMUM_SIZE<br>";
    print "Underscore prefix: \$_internal = $_internal<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
