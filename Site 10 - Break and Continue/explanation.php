<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Break and Continue Explained - Site 10</title>
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
  <h1>⛔↷ Break and Continue</h1>

  <div class="concept">
    <p><strong>Welcome to Site 10!</strong> In this lesson, you'll learn how <code>break</code> and <code>continue</code> change the normal flow of a loop. These keywords give you control over whether a loop stops completely or just skips one pass.</p>
  </div>

  <h2>The break Statement</h2>
  <p>The <code>break</code> keyword terminates the loop immediately. When the condition for <code>break</code> becomes true, PHP exits the loop and continues with the next statement after the loop.</p>

  <div class="example-box">
    <div class="code-block">&lt;?php
$i = 0;

while ($i &lt; 10) {
  $i++;
  if ($i == 3) {
    break;
  }
}

echo "Loop stopped at i = $i";
?&gt;</div>
    <p>In this example, the loop stops as soon as <code>$i</code> becomes 3.</p>
  </div>

  <h2>The continue Statement</h2>
  <p>The <code>continue</code> keyword skips the rest of the current loop pass and moves straight to the next iteration. The loop itself does not end.</p>

  <div class="example-box">
    <div class="code-block">&lt;?php
$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {
  if ($value == 3) {
    continue;
  }
  echo "Value is $value &lt;br /&gt;";
}
?&gt;</div>
    <p>In this example, the value 3 is skipped, but the loop continues with 4 and 5.</p>
  </div>

  <h2>When Should You Use Them?</h2>
  <div class="concept">
    <ul>
      <li>Use <code>break</code> when you want to stop searching once a result is found.</li>
      <li>Use <code>continue</code> when you want to ignore one case but keep processing the rest.</li>
      <li>Both statements should be used carefully so the loop stays easy to understand.</li>
    </ul>
  </div>

  <h2>Your Task This Lesson</h2>
  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Visit the <code>break</code> and <code>continue</code> example pages.</li>
      <li>Identify what condition triggers each keyword.</li>
      <li>Create your own loop in <a href="yourtask.php">yourtask.php</a>.</li>
      <li>Use <code>break</code> to stop one loop early.</li>
      <li>Use <code>continue</code> to skip one value in another loop.</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>
  <div class="example-box">
    <h4>Activity 1: Stop at 5</h4>
    <p>Write a loop that counts upward and stops when the counter reaches 5.</p>

    <h4>Activity 2: Skip Even Numbers</h4>
    <p>Write a loop from 1 to 10 that skips all even numbers using <code>continue</code>.</p>

    <h4>Activity 3: Search a List</h4>
    <p>Loop through an array of names and stop the loop once the target name has been found.</p>
  </div>

  <h2>Key Takeaways</h2>
  <div class="concept">
    <ul>
      <li>✅ <code>break</code> ends the loop immediately</li>
      <li>✅ <code>continue</code> skips the current pass but keeps the loop running</li>
      <li>✅ Both keywords must appear inside a loop</li>
      <li>✅ They help you control loops more precisely</li>
    </ul>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 10 Hub</a></p>
    <p><a href="yourtask.php">Go to Your Task Page</a></p>
    <p><a href="../index.php">← Back to Main Hub</a></p>
  </div>
</body>
</html>