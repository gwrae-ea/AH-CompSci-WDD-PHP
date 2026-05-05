<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Integers Data Type</title>
</head>
<body>
  <h1>Integers - Whole Numbers</h1>

  <?php
    $int1 = 4195;
    $int2 = -2048;
    $int3 = 0;
    $int4 = 42;

    print "Integer 1: $int1<br>";
    print "Integer 2: $int2<br>";
    print "Integer 3: $int3<br>";
    print "Integer 4: $int4<br>";

    // Arithmetic operations on integers
    $sum = $int1 + $int4;
    $product = $int1 * 2;

    print "Sum ($int1 + $int4): $sum<br>";
    print "Product ($int1 * 2): $product<br>";

    // Check if value is integer
    print "Is $int1 an integer? ";
    print(is_int($int1) ? "yes" : "no");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
