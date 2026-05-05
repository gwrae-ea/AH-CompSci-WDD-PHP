<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Salary Example</title>
</head>
<body>
  <h1>Employee Salary Example</h1>
  <p>This example demonstrates a practical use of associative arrays with employee data.</p>

  <?php
    $employees = array(
      "Alice" => 45000,
      "Bob" => 50000,
      "Charlie" => 55000,
      "Diana" => 52000
    );

    echo "<h2>Employee Salaries</h2>";

    foreach ($employees as $name => $salary) {
      echo "$name earns \$" . number_format($salary) . "<br>";
    }

    $total = array_sum($employees);
    $average = $total / count($employees);

    echo "<h2>Summary</h2>";
    echo "Total payroll: \$" . number_format($total) . "<br>";
    echo "Average salary: \$" . number_format($average, 2) . "<br>";
  ?>

  <p><a href="index.php">← Back to Site 12</a></p>
</body>
</html>
