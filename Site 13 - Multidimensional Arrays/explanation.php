<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multidimensional Arrays Explained - Site 13</title>
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
    table {
      border-collapse: collapse;
      margin: 15px 0;
      width: 100%;
    }
    table, th, td {
      border: 1px solid #ddd;
    }
    th, td {
      padding: 12px;
      text-align: left;
    }
    th {
      background-color: #e8f4f8;
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
  <h1>📊 Multidimensional Arrays</h1>

  <div class="concept">
    <p><strong>Welcome to Site 13!</strong> In this lesson, you'll work with multidimensional arrays. These are arrays that contain other arrays as elements. This powerful structure lets you organize complex, grouped data in a way that mirrors real-world relationships.</p>
  </div>

  <h2>What Is a Multidimensional Array?</h2>
  <p>A multidimensional array is an array where each element can itself be an array. Just like a spreadsheet has rows and columns, a 2D (two-dimensional) array has a main array with sub-arrays inside.</p>

  <div class="concept">
    <h3>Creating a 2D Array</h3>
    <div class="code-block">&lt;?php
$marks = array( 
   "mohammad" =&gt; array (
      "physics" =&gt; 35,
      "maths" =&gt; 30,	
      "chemistry" =&gt; 39
   ),
   
   "qadir" =&gt; array (
      "physics" =&gt; 30,
      "maths" =&gt; 32,
      "chemistry" =&gt; 29
   ),
   
   "zara" =&gt; array (
      "physics" =&gt; 31,
      "maths" =&gt; 22,
      "chemistry" =&gt; 39
   )
);
?&gt;</div>
  </div>

  <h2>Accessing Values in Multidimensional Arrays</h2>
  <p>To access a value, use two sets of square brackets: one for the main array key, and one for the sub-array key.</p>

  <div class="example-box">
    <h3>Accessing a 2D Array Value</h3>
    <div class="code-block">&lt;?php
echo $marks['mohammad']['physics'];  // Outputs: 35
echo $marks['qadir']['maths'];       // Outputs: 32
echo $marks['zara']['chemistry'];    // Outputs: 39
?&gt;</div>
  </div>

  <h2>Visual Structure</h2>
  <p>Think of a 2D array like a table:</p>
  <table>
    <tr>
      <th>Student</th>
      <th>Physics</th>
      <th>Maths</th>
      <th>Chemistry</th>
    </tr>
    <tr>
      <td>mohammad</td>
      <td>35</td>
      <td>30</td>
      <td>39</td>
    </tr>
    <tr>
      <td>qadir</td>
      <td>30</td>
      <td>32</td>
      <td>29</td>
    </tr>
    <tr>
      <td>zara</td>
      <td>31</td>
      <td>22</td>
      <td>39</td>
    </tr>
  </table>

  <h2>Why Use Multidimensional Arrays?</h2>
  <div class="example-box">
    <p>Multidimensional arrays are ideal for organizing grouped, hierarchical data:</p>
    <ul>
      <li>Student records with multiple subjects and grades</li>
      <li>Employee records with names, departments, and salaries</li>
      <li>Product inventories with locations and quantities</li>
      <li>Geographic data with regions, cities, and populations</li>
      <li>Game boards or grids</li>
    </ul>
  </div>

  <h2>Looping Through Multidimensional Arrays</h2>
  <div class="example-box">
    <p>Use nested <code>foreach</code> loops to access all values:</p>
    <div class="code-block">&lt;?php
$marks = array(
   "mohammad" =&gt; array("physics" =&gt; 35, "maths" =&gt; 30),
   "qadir" =&gt; array("physics" =&gt; 30, "maths" =&gt; 32)
);

foreach ($marks as $student =&gt; $subjects) {
   echo "$student: &lt;br /&gt;";
   foreach ($subjects as $subject =&gt; $mark) {
      echo "  $subject: $mark&lt;br /&gt;";
   }
}
?&gt;</div>
  </div>

  <h2>Important Note</h2>
  <div class="warning-box">
    <p><strong>⚠️ Don't use multidimensional array indexes inside double quotes!</strong></p>
    <p>Similar to associative arrays, you cannot directly access multidimensional array values inside double-quoted strings.</p>
    <div class="code-block">
✗ Wrong: echo "Mark is $marks['student']['subject']";
✓ Correct: echo "Mark is " . $marks['student']['subject'];
✓ Also correct: echo "Mark is {$marks['student']['subject']}";
    </div>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Visit the multidimensional array example pages.</li>
      <li>Understand how arrays are nested within arrays.</li>
      <li>Learn how to access nested values using multiple indexes.</li>
      <li>Create your own 2D array with meaningful structure.</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a>.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Access Nested Data</h4>
    <p>Create a 2D array of products with categories, names, and prices. Access specific values.</p>

    <h4>Activity 2: Calculate Totals</h4>
    <p>Create a 2D array of sales data and calculate total sales for each salesperson using nested loops.</p>

    <h4>Activity 3: Display in a Table</h4>
    <p>Create a 2D array and display its data as an HTML table using nested foreach loops.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ Multidimensional arrays nest arrays within arrays</li>
      <li>✅ Access nested values using multiple indexes: $array['key1']['key2']</li>
      <li>✅ Perfect for organizing hierarchical or grouped data</li>
      <li>✅ Use nested foreach loops to traverse all levels</li>
      <li>✅ Never use multidimensional indexes directly in double quotes</li>
      <li>✅ Can be nested to any depth, but 2-3 levels is typical</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 13 Hub</a></p>
    <p><a href="yourtask.php">Go to Your Task Page</a></p>
    <p><a href="../index.php">← Back to Main Hub</a></p>
  </div>
</body>
</html>
