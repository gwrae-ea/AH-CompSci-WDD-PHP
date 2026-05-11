<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array Explained - Site 12</title>
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
    .warning-box {
      background-color: #fff3cd;
      border: 1px solid #ffc107;
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
  <h1>🔑 Associative Arrays</h1>

  <div class="concept">
    <p><strong>Welcome to Site 12!</strong> In this lesson, you'll work with associative arrays. These arrays are similar to numeric arrays but use string keys instead of numbered indexes. This lets you create meaningful relationships between keys and values.</p>
  </div>

  <h2>What Is an Associative Array?</h2>
  <p>An associative array uses string keys to identify values. Instead of accessing data by position (like index 0, 1, 2), you access it by a meaningful name (like "name", "email", "age").</p>

  <div class="concept">
    <h3>First Method: Using array()</h3>
    <div class="code-block">&lt;?php
$salaries = array(
  "mohammad" =&gt; 2000,
  "qadir" =&gt; 1000,
  "zara" =&gt; 500
);

echo "Salary of mohammad is " . $salaries['mohammad'] . "&lt;br /&gt;";
?&gt;</div>
  </div>

  <div class="concept">
    <h3>Second Method: Assigning Keys Manually</h3>
    <div class="code-block">&lt;?php
$salaries = array();
$salaries['mohammad'] = 2000;
$salaries['qadir'] = 1000;
$salaries['zara'] = 500;
?&gt;</div>
  </div>

  <h2>Why Use Associative Arrays?</h2>
  <div class="example-box">
    <p>Associative arrays are ideal when you have related data that benefits from meaningful keys:</p>
    <ul>
      <li>Storing employee names and salaries</li>
      <li>Storing student names and grades</li>
      <li>Storing product names and prices</li>
      <li>Storing configuration settings with descriptive names</li>
    </ul>
  </div>

  <h2>Important Note</h2>
  <div class="warning-box">
    <p><strong>⚠️ Don't keep associative array inside double quotes while printing!</strong></p>
    <p>If you try to use an associative array key inside a double-quoted string, PHP will not return the value. You must use concatenation or variable substitution outside quotes.</p>
    <div class="code-block">
✗ Wrong: echo "Value is $array['key']";
✓ Correct: echo "Value is " . $array['key'];
✓ Also correct: echo "Value is {$array['key']}";
    </div>
  </div>

  <h2>Looping Through Associative Arrays</h2>
  <div class="example-box">
    <p>You can use <code>foreach</code> to loop through an associative array and access both the key and the value:</p>
    <div class="code-block">&lt;?php
$salaries = array(
  "mohammad" =&gt; 2000,
  "qadir" =&gt; 1000,
  "zara" =&gt; 500
);

foreach ($salaries as $name =&gt; $salary) {
  echo "$name earns $salary&lt;br /&gt;";
}
?&gt;</div>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Visit the associative array example pages.</li>
      <li>Understand both methods of creating associative arrays.</li>
      <li>Create your own associative array with meaningful keys and values.</li>
      <li>Access and display values using the string keys.</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a>.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Student Grades</h4>
    <p>Create an associative array of student names and their grades. Display each student and their grade.</p>

    <h4>Activity 2: Product Inventory</h4>
    <p>Create an associative array with product names as keys and quantities as values. Calculate the total inventory.</p>

    <h4>Activity 3: Update Values</h4>
    <p>Create an associative array and then modify some values using the second method.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ Associative arrays use string keys instead of numeric indexes</li>
      <li>✅ Keys must be unique, but values can repeat</li>
      <li>✅ String keys make code more readable and maintainable</li>
      <li>✅ Use concatenation when displaying associative array values, not double quotes</li>
      <li>✅ Can be created with <code>array()</code> or by manual assignment</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 12 Hub</a></p>
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

