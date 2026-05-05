<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Floats Data Type</title>
</head>
<body>
  <h1>Floats (Doubles) - Decimal Numbers</h1>

  <?php
    $float1 = 3.14159;
    $float2 = 49.1;
    $float3 = -2.5;
    $float4 = 0.001;

    print "Float 1: $float1<br>";
    print "Float 2: $float2<br>";
    print "Float 3: $float3<br>";
    print "Float 4: $float4<br>";

    // Arithmetic operations on floats
    $sum = $float1 + $float2;
    $quotient = $float2 / 3;

    print "Sum: $sum<br>";
    print "Quotient ($float2 / 3): $quotient<br>";

    // Check if value is float
    print "Is $float1 a float? ";
    print(is_float($float1) ? "yes" : "no");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
