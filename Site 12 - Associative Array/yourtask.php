<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 12</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Student Grades with Associative Array</h2>
  <p>This example uses an associative array with student names as keys and grades as values.</p>

  <?php
    $students = array(
      "Alice" => "A",
      "Bob" => "B",
      "Charlie" => "A",
      "Diana" => "A+",
      "Ethan" => "B+"
    );

    echo "<h3>Student Grades</h3>";

    foreach ($students as $name => $grade) {
      echo $name . " received a " . $grade . "<br>";
    }

    echo "<h3>Individual Lookups</h3>";
    echo "Alice's grade: " . $students['Alice'] . "<br>";
    echo "Ethan's grade: " . $students['Ethan'] . "<br>";
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Create your own associative array with meaningful key-value relationships</strong>.</p>
  <p><strong>Choose a real-world scenario, such as:</strong></p>
  <ul>
    <li><strong>Product Prices:</strong> Item names → prices</li>
    <li><strong>Book Authors:</strong> Book titles → author names</li>
    <li><strong>Country Capitals:</strong> Country names → capital cities</li>
    <li><strong>Employee Departments:</strong> Employee names → departments</li>
    <li><strong>Car Colors:</strong> Car models → colors</li>
  </ul>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Create an associative array with at least 5 key-value pairs</li>
    <li>Use meaningful string keys (not numeric indexes)</li>
    <li>Loop through all entries using foreach</li>
    <li>Access and display at least 2 individual values by key</li>
    <li>Use proper concatenation (no array keys in double quotes)</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Create your own associative array
    // Example structure:
    // $data = array(
    //   "key1" => "value1",
    //   "key2" => "value2",
    //   "key3" => "value3",
    //   "key4" => "value4",
    //   "key5" => "value5"
    // );
    //
    // foreach ($data as $key => $value) {
    //   echo $key . ": " . $value . "<br>";
    // }
    //
    // echo $data['key1'] . "<br>";
    // echo $data['key3'] . "<br>";
    
    echo "<p style='color: #999;'><em>[Add your associative array code here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 12</a></p>
</body>
</html>
