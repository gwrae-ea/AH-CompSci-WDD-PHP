<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foreach Loop Statement Explained - Site 9</title>
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
  <h1>🔁 The foreach Loop Statement</h1>

  <div class="concept">
    <p><strong>Welcome to Site 9!</strong> In this lesson, you'll focus on the <code>foreach</code> loop. This loop is designed to work through arrays, taking one value at a time.</p>
  </div>

  <h2>How the foreach Loop Works</h2>
  <p>Each time the loop runs, the current array value is assigned to a variable. Then PHP moves to the next item in the array until every value has been processed.</p>

  <div class="concept">
    <h3>Syntax</h3>
    <div class="code-block">&lt;?php
foreach ($array as $value) {
  code to be executed;
}
?&gt;</div>
  </div>

  <h2>Example from the Lesson</h2>
  <div class="example-box">
    <p>This example loops through an array of numbers and displays each value.</p>
    <div class="code-block">&lt;?php
$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {
  echo "Value is $value &lt;br /&gt;";
}
?&gt;</div>
  </div>

  <h2>When Should You Use foreach?</h2>
  <div class="concept">
    <ul>
      <li>Use <code>foreach</code> when you need to process every item in an array.</li>
      <li>It is simpler than a counter-based loop when the data is already stored in an array.</li>
      <li>It works especially well for names, scores, products, and other lists of values.</li>
    </ul>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Create an array of names using strings.</li>
      <li>Choose a target name to search for.</li>
      <li>Use a <code>foreach</code> loop to check each name in the array.</li>
      <li>If your name is found, display a suitable message.</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a>.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Food List</h4>
    <p>Create an array of five foods and display each one with a foreach loop.</p>

    <h4>Activity 2: Search for Another Name</h4>
    <p>Change the target name and test what happens when the name is not in the array.</p>

    <h4>Activity 3: Scores</h4>
    <p>Create an array of test scores and display a message for each score.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ A <code>foreach</code> loop processes one array value at a time</li>
      <li>✅ It is designed specifically for arrays</li>
      <li>✅ It removes the need for a manual counter in many list-based tasks</li>
      <li>✅ It is a clear way to search through an array of names</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 9 Hub</a></p>
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

