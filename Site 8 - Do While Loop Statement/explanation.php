<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While Loop Statement Explained - Site 8</title>
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
  <h1>🔁 The do...while Loop Statement</h1>

  <div class="concept">
    <p><strong>Welcome to Site 8!</strong> In this lesson, you'll focus on the <code>do...while</code> loop. This loop always executes the code block once before checking whether it should continue.</p>
  </div>

  <h2>How the do...while Loop Works</h2>
  <p>The code inside the loop runs first. After that first pass, PHP checks the condition. If the condition is true, the loop repeats. If it is false, the loop stops.</p>

  <div class="concept">
    <h3>Syntax</h3>
    <div class="code-block">&lt;?php
do {
  code to be executed;
} while (condition);
?&gt;</div>
  </div>

  <h2>Example from the Lesson</h2>
  <div class="example-box">
    <p>This example increments <code>$i</code> at least once and continues until <code>$i</code> reaches 10.</p>
    <div class="code-block">&lt;?php
$i = 0;
$num = 0;

do {
  $i++;
} while ($i &lt; 10);

echo "Loop stopped at i = $i";
?&gt;</div>
    <p>At the end, <code>$i</code> is 10 because the loop continues while <code>$i</code> is less than 10.</p>
  </div>

  <h2>When Should You Use do...while?</h2>
  <div class="concept">
    <ul>
      <li>Use <code>do...while</code> when the code must run at least once.</li>
      <li>It works well when you want an initial output before checking whether to continue.</li>
      <li>You still need to update the controlling variable, or the loop may never end.</li>
    </ul>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Set one variable for how many values to display.</li>
      <li>Set one variable for which times table to display.</li>
      <li>Use an incrementing variable to count the loop passes.</li>
      <li>Use a <code>do...while</code> loop to stop after the required number of values.</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a>.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Count to 10</h4>
    <p>Use a do...while loop to display the numbers 1 to 10.</p>

    <h4>Activity 2: Different Times Table</h4>
    <p>Change the task so it displays the first 15 values of the 4 times table.</p>

    <h4>Activity 3: Guaranteed Output</h4>
    <p>Set a condition that is false at the start and notice that the do...while loop still prints one line.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ A <code>do...while</code> loop always runs once before checking the condition</li>
      <li>✅ The condition is checked after the loop body</li>
      <li>✅ You usually need a counter variable that changes each pass</li>
      <li>✅ This loop is useful when at least one execution is required</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 8 Hub</a></p>
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

