<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NULL Data Type</title>
</head>
<body>
  <h1>NULL - Special Type</h1>

  <?php
    // Explicitly assign NULL
    $nullValue = NULL;

    print "NULL value assigned: ";
    print(is_null($nullValue) ? "null" : "not null");
    print "<br>";

    // Variable that was assigned but then unset
    $temp = "temporary";
    unset($temp);

    print "Unset variable: ";
    print(isset($temp) ? "exists" : "does not exist");
    print "<br>";

    // NULL in a variable that was declared but not assigned
    // This demonstrates an uninitialized variable
    if (!isset($noValue)) {
      $noValue = NULL;
    }

    print "Uninitialized variable: ";
    print(isset($noValue) ? "exists" : "does not exist");
    print "<br>";

    // Using isset and is_null
    $defined = 0;
    $undefined = NULL;

    print "isset(0): ";
    print(isset($defined) ? "true" : "false");
    print "<br>";

    print "isset(NULL): ";
    print(isset($undefined) ? "true" : "false");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
