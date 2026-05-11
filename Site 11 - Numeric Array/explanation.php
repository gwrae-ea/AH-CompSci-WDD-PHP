<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numeric Array Explained - Site 11</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }
    h1 {
      color: #0066cc;
      border-bottom: 3px solid #0066cc;
      padding-bottom: 10px;
    }
    h2 {
      color: #0099ff;
      margin-top: 30px;
    }
    h3 {
      color: #333;
      margin-top: 20px;
    }
    .concept {
      background-color: #e8f4f8;
      border-left: 5px solid #0066cc;
      padding: 15px;
      margin: 20px 0;
      border-radius: 4px;
    }
    .code-block {
      background-color: #f5f5f5;
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 15px;
      margin: 15px 0;
      overflow-x: auto;
      font-family: 'Courier New', monospace;
      font-size: 14px;
      white-space: pre-wrap;
    }
    .task-box {
      background-color: #fff3cd;
      border-left: 5px solid #ffc107;
      padding: 15px;
      margin: 20px 0;
      border-radius: 4px;
    }
    .example-box {
      background-color: #e8f5e9;
      border-left: 5px solid #4caf50;
      padding: 15px;
      margin: 20px 0;
      border-radius: 4px;
    }
    a {
      color: #0066cc;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .nav-links {
      margin: 30px 0;
      padding: 20px;
      background-color: white;
      border-radius: 4px;
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h1>🔢 Numeric Arrays</h1>

  <div class="concept">
    <p><strong>Welcome to Site 11!</strong> In this lesson, you'll work with numeric arrays. These arrays use numbered indexes, starting at 0 by default, and can store integers, strings, or other values.</p>
  </div>

  <h2>What Is a Numeric Array?</h2>
  <p>A numeric array stores a list of values where each item has a number as its index. PHP starts indexing from 0 unless you assign a different index yourself.</p>

  <div class="concept">
    <h3>First Method: Using array()</h3>
    <div class="code-block">&lt;?php
$numbers = array(1, 2, 3, 4, 5);

foreach ($numbers as $value) {
  echo "Value is $value &lt;br /&gt;";
}
?&gt;</div>
  </div>

  <div class="concept">
    <h3>Second Method: Assigning Indexes Manually</h3>
    <div class="code-block">&lt;?php
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
?&gt;</div>
  </div>

  <h2>Totals and Averages</h2>
  <div class="example-box">
    <p>You can total an array using a running total variable. Then you can divide by the number of elements to calculate the average.</p>
    <div class="code-block">&lt;?php
$numbers = array(1, 2, 3, 4, 5);
$total = 0;

foreach ($numbers as $value) {
  $total += $value;
}

$average = $total / count($numbers);
echo "Total: $total";
echo "Average: $average";
?&gt;</div>
  </div>

  <h2>What Happens at Index 13?</h2>
  <div class="concept">
    <p>If you directly assign a value to <code>$numbers[13]</code>, PHP creates that element at index 13. It does not automatically fill indexes 10, 11, and 12 with values. The array becomes sparse, with gaps between existing indexes and the new one.</p>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Create an array of 10 integers.</li>
      <li>Total the array using a running total variable.</li>
      <li>Display the total and average of the array.</li>
      <li>Try assigning a value to index 13 and observe what happens.</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a>.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Change the Values</h4>
    <p>Replace the integers in the array and see how the total and average change.</p>

    <h4>Activity 2: Larger Gap</h4>
    <p>Try assigning a value at index 20 and inspect the output to see which indexes exist.</p>

    <h4>Activity 3: Odd and Even Totals</h4>
    <p>Create an array of mixed odd and even numbers and calculate the total.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ Numeric arrays use numbered indexes</li>
      <li>✅ Indexes start at 0 by default</li>
      <li>✅ A running total is useful for summing array values</li>
      <li>✅ The average is total divided by the number of elements</li>
      <li>✅ Assigning index 13 creates a gap if indexes 10 to 12 do not exist</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 11 Hub</a></p>
    <p><a href="yourtask.php">Go to Your Task Page</a></p>
    <p><a href="../index.php">← Back to Main Hub</a></p>
  </div>
    <!-- FR_STANDARD_START -->
    <section>
      <h2>Functional Requirements (Standard Format)</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR1</td><td>N/A</td></tr>
          <tr><td>FR2</td><td>N/A</td></tr>
          <tr><td>FR3</td><td>N/A</td></tr>
          <tr><td>FR4</td><td>N/A</td></tr>
        </tbody>
      </table>

      <h2>Integration</h2>
      <p>Complete the pre-populated functional requirements for integration to describe how they will be applied in your project.</p>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR5</td><td>N/A</td></tr>
          <tr><td>FR6</td><td>N/A</td></tr>
          <tr><td>FR7</td><td>N/A</td></tr>
        </tbody>
      </table>

      <h2>Additional Functional Requirements</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR8</td><td>N/A</td></tr>
          <tr><td>FR9</td><td>N/A</td></tr>
          <tr><td>FR10</td><td>N/A</td></tr>
          <tr><td>FR11</td><td>N/A</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>

