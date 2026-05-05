<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array Example</title>
</head>
<body>
  <h1>Associative Array Example</h1>
  <p>This page shows both ways of creating an associative array from the lesson.</p>

  <?php
    echo "<h2>First method - using array()</h2>";
    $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);

    echo "Salary of mohammad is " . $salaries['mohammad'] . "<br>";
    echo "Salary of qadir is " . $salaries['qadir'] . "<br>";
    echo "Salary of zara is " . $salaries['zara'] . "<br>";

    echo "<h2>Second method - manual assignment</h2>";
    $salaries['mohammad'] = "high";
    $salaries['qadir'] = "medium";
    $salaries['zara'] = "low";

    echo "Salary of mohammad is " . $salaries['mohammad'] . "<br>";
    echo "Salary of qadir is " . $salaries['qadir'] . "<br>";
    echo "Salary of zara is " . $salaries['zara'] . "<br>";
  ?>

  <p><a href="index.php">← Back to Site 12</a></p>
</body>
</html>
