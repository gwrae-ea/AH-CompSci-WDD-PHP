<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 13</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Departments and Employees (2D Array)</h2>
  <p>This example demonstrates a two-dimensional array organizing employees by department with salaries.</p>

  <?php
    $employees = array(
      "engineering" => array(
        "alice" => 95000,
        "bob" => 85000,
        "charlie" => 90000
      ),
      "sales" => array(
        "diana" => 75000,
        "ethan" => 80000,
        "fiona" => 78000
      ),
      "operations" => array(
        "george" => 70000,
        "helen" => 72000,
        "inigo" => 68000
      )
    );

    echo "<h3>Department Structure</h3>";

    foreach ($employees as $department => $staff) {
      echo "<h4>" . ucfirst($department) . "</h4>";
      foreach ($staff as $name => $salary) {
        echo "  " . ucfirst($name) . " - \$" . number_format($salary) . "<br>";
      }
    }

    echo "<h3>Department Payroll Summary</h3>";
    foreach ($employees as $department => $staff) {
      $total_payroll = array_sum($staff);
      $avg_salary = $total_payroll / count($staff);
      echo ucfirst($department) . " - Total: \$" . number_format($total_payroll) . 
           ", Average: \$" . number_format($avg_salary, 2) . "<br>";
    }

    echo "<h3>Individual Access Examples</h3>";
    echo "Alice's salary: \$" . number_format($employees['engineering']['alice']) . "<br>";
    echo "Diana's salary: \$" . number_format($employees['sales']['diana']) . "<br>";
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Create your own multidimensional array (2D) with nested data</strong>.</p>
  <p><strong>Choose a real-world scenario, such as:</strong></p>
  <ul>
    <li><strong>Student Course Grades:</strong> Grade levels → students → grades</li>
    <li><strong>Restaurant Menu:</strong> Categories → dishes → prices</li>
    <li><strong>Library Inventory:</strong> Genres → book titles → authors</li>
    <li><strong>Sports Teams:</strong> Teams → players → stats</li>
    <li><strong>Store Locations:</strong> Cities → stores → sales figures</li>
  </ul>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Create a 2D associative array with at least 3 main categories and 2-3 nested items each</li>
    <li>Use meaningful keys at both levels</li>
    <li>Access and display individual nested values using double brackets</li>
    <li>Use nested foreach loops to display all data</li>
    <li>Calculate or display a statistic (total, average, count, etc.)</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Create your own 2D multidimensional array
    // Example structure:
    // $data = array(
    //   "category1" => array(
    //     "item1" => "value1",
    //     "item2" => "value2",
    //     "item3" => "value3"
    //   ),
    //   "category2" => array(
    //     "item4" => "value4",
    //     "item5" => "value5",
    //     "item6" => "value6"
    //   )
    // );
    //
    // foreach ($data as $category => $items) {
    //   echo $category . "<br>";
    //   foreach ($items as $item => $value) {
    //     echo "  " . $item . ": " . $value . "<br>";
    //   }
    // }
    //
    // echo $data['category1']['item1'] . "<br>";
    
    echo "<p style='color: #999;'><em>[Add your 2D multidimensional array code here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 13</a></p>
</body>
</html>
