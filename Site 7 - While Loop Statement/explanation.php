<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loop Statement Explained - Site 7</title>
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
  <h1>🔁 The while Loop Statement</h1>

  <div class="concept">
    <p><strong>Welcome to Site 7!</strong> In this lesson, you'll focus on the <code>while</code> loop. A while loop keeps repeating a block of code for as long as its condition stays true.</p>
  </div>

  <h2>How the while Loop Works</h2>
  <p>The condition is checked before each loop pass. If the condition is true, the code runs. After that, the condition is checked again. The loop ends when the condition becomes false.</p>

  <div class="concept">
    <h3>Syntax</h3>
    <div class="code-block">&lt;?php
while (condition) {
  code to be executed;
}
?&gt;</div>
  </div>

  <h2>Example from the Lesson</h2>
  <div class="example-box">
    <p>This example decreases <code>$num</code> and increases <code>$i</code> until <code>$i</code> reaches 10.</p>
    <div class="code-block">&lt;?php
$i = 0;
$num = 50;

while ($i &lt; 10) {
  $num--;
  $i++;
}

echo "Loop stopped at i = $i and num = $num";
?&gt;</div>
    <p>At the end, <code>$i</code> is 10 and <code>$num</code> is 40.</p>
  </div>

  <h2>When Should You Use while?</h2>
  <div class="concept">
    <ul>
      <li>Use <code>while</code> when repetition depends on a condition.</li>
      <li>It works well when a counter, score, or total changes each pass.</li>
      <li>You must update the variable involved in the condition, or the loop may never end.</li>
    </ul>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Set one variable for how many values to display.</li>
      <li>Set one variable for which times table to display.</li>
      <li>Use an incrementing variable to count the loop passes.</li>
      <li>Use a <code>while</code> loop to stop after the required number of values.</li>
      <li>Complete the task in <a href="yourtask.php">yourtask.php</a>.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Count to 15</h4>
    <p>Use a while loop to display the numbers 1 to 15.</p>

    <h4>Activity 2: Different Times Table</h4>
    <p>Change the task so it displays the first 12 values of the 8 times table.</p>

    <h4>Activity 3: Countdown</h4>
    <p>Start at 10 and count down to 1 using a while loop.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ A <code>while</code> loop checks its condition before each pass</li>
      <li>✅ The loop runs only while the condition remains true</li>
      <li>✅ You usually need a counter variable that changes each pass</li>
      <li>✅ A while loop is a good fit for conditional iteration tasks</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 7 Hub</a></p>
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

