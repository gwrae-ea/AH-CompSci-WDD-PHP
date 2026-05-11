<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iteration Constructs Explained - Site 6</title>
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
    .operator-table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background-color: white;
    }
    .operator-table th {
      background-color: #0066cc;
      color: white;
      padding: 12px;
      text-align: left;
    }
    .operator-table td {
      border: 1px solid #ddd;
      padding: 12px;
      vertical-align: top;
    }
    .operator-table tr:nth-child(even) {
      background-color: #f9f9f9;
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
  <h1>🔁 Iteration Constructs Explained</h1>

  <div class="concept">
    <p><strong>Welcome to Site 6!</strong> In this lesson, you'll learn how loops let PHP repeat code efficiently. You'll explore the four main loop types and see how <code>break</code> and <code>continue</code> change loop behaviour.</p>
  </div>

  <h2>What Is Iteration?</h2>
  <p>Iteration means repeating a block of code. Instead of writing the same line many times, you use a loop to repeat it automatically.</p>

  <table class="operator-table">
    <tr>
      <th>Loop Type</th>
      <th>Best Used When</th>
      <th>Example Situation</th>
    </tr>
    <tr>
      <td><code>for</code></td>
      <td>You know exactly how many times the loop should run.</td>
      <td>Printing the first 20 values of the 5 times table.</td>
    </tr>
    <tr>
      <td><code>while</code></td>
      <td>You want to keep looping while a condition is true.</td>
      <td>Counting until a value reaches a limit.</td>
    </tr>
    <tr>
      <td><code>do...while</code></td>
      <td>The code must run at least once before the condition is checked.</td>
      <td>Showing a menu once, then deciding whether to repeat.</td>
    </tr>
    <tr>
      <td><code>foreach</code></td>
      <td>You want to visit each element in an array.</td>
      <td>Displaying a list of student names or scores.</td>
    </tr>
  </table>

  <h2>The for Loop</h2>
  <div class="concept">
    <p>A <code>for</code> loop is ideal when you know the number of iterations in advance.</p>
    <div class="code-block">&lt;?php
for ($i = 1; $i &lt;= 5; $i++) {
  echo $i . "&lt;br&gt;";
}
?&gt;</div>
    <p>The loop has three parts:</p>
    <ul>
      <li>Initialisation: set the starting value</li>
      <li>Condition: decide whether the loop continues</li>
      <li>Increment: change the counter after each pass</li>
    </ul>
  </div>

  <h2>The while Loop</h2>
  <div class="concept">
    <p>A <code>while</code> loop checks its condition first. If the condition is false at the start, the code inside never runs.</p>
    <div class="code-block">&lt;?php
$count = 1;

while ($count &lt;= 5) {
  echo $count . "&lt;br&gt;";
  $count++;
}
?&gt;</div>
  </div>

  <h2>The do...while Loop</h2>
  <div class="concept">
    <p>A <code>do...while</code> loop runs once before checking the condition. This guarantees at least one execution.</p>
    <div class="code-block">&lt;?php
$count = 1;

do {
  echo $count . "&lt;br&gt;";
  $count++;
} while ($count &lt;= 5);
?&gt;</div>
  </div>

  <h2>The foreach Loop</h2>
  <div class="concept">
    <p>A <code>foreach</code> loop works with arrays. It gives you each item one by one.</p>
    <div class="code-block">&lt;?php
$colours = ["red", "green", "blue"];

foreach ($colours as $colour) {
  echo $colour . "&lt;br&gt;";
}
?&gt;</div>
  </div>

  <h2>Using break and continue</h2>
  <div class="example-box">
    <h3><code>break</code></h3>
    <p><code>break</code> stops the loop immediately.</p>
    <div class="code-block">&lt;?php
for ($i = 1; $i &lt;= 10; $i++) {
  if ($i == 6) {
    break;
  }
  echo $i . " ";
}
?&gt;</div>

    <h3><code>continue</code></h3>
    <p><code>continue</code> skips the current loop pass and moves to the next one.</p>
    <div class="code-block">&lt;?php
for ($i = 1; $i &lt;= 10; $i++) {
  if ($i == 6) {
    continue;
  }
  echo $i . " ";
}
?&gt;</div>
  </div>

  <h2>Your Task This Lesson</h2>

  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Visit each loop demonstration page</li>
      <li>Understand when each loop type is appropriate</li>
      <li>Compare <code>break</code> and <code>continue</code></li>
      <li>Use a <code>for</code> loop to print the first 20 values of the 5 times table</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a></li>
    </ol>
  </div>

  <h2>Practice Activities</h2>

  <div class="example-box">
    <h4>Activity 1: Count Backwards</h4>
    <p>Create a <code>for</code> loop that prints numbers from 10 down to 1.</p>

    <h4>Activity 2: Skip Values</h4>
    <p>Use <code>continue</code> so a loop from 1 to 10 skips all even numbers.</p>

    <h4>Activity 3: Array Practice</h4>
    <p>Create an array of three foods and display each one using <code>foreach</code>.</p>
  </div>

  <h2>Key Takeaways</h2>

  <div class="concept">
    <ul>
      <li>✅ Loops repeat code efficiently</li>
      <li>✅ <code>for</code> is best for fixed iteration counts</li>
      <li>✅ <code>while</code> and <code>do...while</code> are condition-based loops</li>
      <li>✅ <code>foreach</code> is the easiest way to loop through arrays</li>
      <li>✅ <code>break</code> stops a loop, while <code>continue</code> skips one pass</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 6 Hub</a></p>
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

