<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booleans Data Type</title>
</head>
<body>
  <h1>Booleans - True or False</h1>

  <?php
    $true_val = true;
    $false_val = false;

    print "True value: ";
    print($true_val ? "true" : "false");
    print "<br>";

    print "False value: ";
    print($false_val ? "true" : "false");
    print "<br>";

    // Booleans in conditional statements
    $age = 18;
    $isAdult = ($age >= 18);

    print "Age: $age<br>";
    print "Is adult? ";
    print($isAdult ? "yes" : "no");
    print "<br>";

    // Booleans in logical operations
    $hasLicense = true;
    $canDrive = ($isAdult && $hasLicense);

    print "Can drive (adult AND has license)? ";
    print($canDrive ? "yes" : "no");
    print "<br>";

    // Check if value is boolean
    print "Is true_val a boolean? ";
    print(is_bool($true_val) ? "yes" : "no");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
