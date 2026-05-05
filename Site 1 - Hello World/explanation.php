<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site 1 - Concepts and Task Explanation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
      line-height: 1.6;
    }
    h1 { color: #0066cc; border-bottom: 3px solid #0066cc; padding-bottom: 10px; }
    h2 { color: #0052a3; margin-top: 30px; }
    h3 { color: #333; }
    .concept { background-color: #e8f4f8; padding: 15px; margin: 15px 0; border-left: 4px solid #0066cc; border-radius: 4px; }
    .code-block { background-color: #f4f4f4; padding: 15px; margin: 10px 0; border-left: 4px solid #666; border-radius: 4px; font-family: 'Courier New', monospace; overflow-x: auto; }
    .task-box { background-color: #fff3cd; padding: 15px; margin: 15px 0; border: 1px solid #ffc107; border-radius: 4px; }
    ul { margin: 10px 0 10px 20px; }
    li { margin: 8px 0; }
    .nav { margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; }
    a { color: #0066cc; text-decoration: none; font-weight: bold; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <h1>Site 1 - Hello World: Your First PHP Program</h1>

  <h2>Concepts</h2>

  <h3>What is PHP?</h3>
  <div class="concept">
    <p>PHP stands for "PHP: Hypertext Preprocessor" and is a server-side scripting language. This means:</p>
    <ul>
      <li>PHP code runs on the web server, not in the browser</li>
      <li>The browser only receives the result (HTML output)</li>
      <li>PHP is embedded directly in HTML files</li>
    </ul>
  </div>

  <h3>PHP Tags</h3>
  <div class="concept">
    <p>PHP code is enclosed between special tags that tell the server "this is PHP code":</p>
    <div class="code-block">
&lt;?php
  // PHP code goes here
?&gt;
    </div>
    <p>Anything outside these tags is treated as plain HTML and sent directly to the browser.</p>
  </div>

  <h3>The Echo Statement</h3>
  <div class="concept">
    <p>The <code>echo</code> statement outputs text to the webpage:</p>
    <div class="code-block">
echo "Hello, World!";
    </div>
    <p>This sends the text "Hello, World!" to the browser, where it is displayed on the page.</p>
  </div>

  <h3>How It Works: Browser to Server to Browser</h3>
  <div class="concept">
    <ol>
      <li>Browser requests a PHP file (e.g., index.php)</li>
      <li>Server reads and executes all PHP code</li>
      <li>PHP generates HTML output</li>
      <li>Server sends HTML back to the browser</li>
      <li>Browser displays the result (the viewer never sees the PHP code)</li>
    </ol>
  </div>

  <h2>Task Overview</h2>

  <div class="task-box">
    <h3>Objective</h3>
    <p>Create and run your first PHP program that outputs a custom message using the echo statement.</p>
  </div>

  <h3>What You Will Learn</h3>
  <ul>
    <li>How to write basic PHP code</li>
    <li>The purpose of PHP tags (&lt;?php ?&gt;)</li>
    <li>How the echo statement works</li>
    <li>How to run a PHP file locally in Codespaces</li>
    <li>The difference between PHP code and its HTML output</li>
  </ul>

  <h3>Key Tasks</h3>
  <ol>
    <li>Open <a href="index.php">index.php</a> and understand the basic structure</li>
    <li>Examine the PHP tags and echo statements</li>
    <li>Open <a href="yourtask.php">yourtask.php</a> and add your own message</li>
    <li>Run the pages using the PHP server (see below)</li>
    <li>Use "View Page Source" to see the generated HTML</li>
  </ol>

  <h3>Important Discovery</h3>
  <div class="concept">
    <p>When you view the page source (right-click → View Page Source), you will notice that the PHP code is gone! The browser only sees HTML. The server has already processed the PHP and converted it to HTML output. This is why PHP is called server-side code.</p>
  </div>

  <h2>How to Run This Site</h2>

  <div class="code-block">
/usr/bin/php -S 0.0.0.0:8000 -t "Site 1 - Hello World"
  </div>

  <p>Then open your browser to the forwarded port and visit:</p>
  <ul>
    <li><code>/index.php</code> — The main page with a link</li>
    <li><code>/yourtask.php</code> — Your workspace for editing and testing</li>
  </ul>

  <h2>Next Steps</h2>
  <ul>
    <li>Edit the text in <a href="yourtask.php">yourtask.php</a> to output your own message</li>
    <li>Add multiple echo statements to output several lines</li>
    <li>Use View Page Source to confirm PHP is not visible in the output</li>
    <li>Move on to Site 2 to learn about comments and syntax rules</li>
  </ul>

  <div class="nav">
    <p><a href="index.php">← Back to Site 1 Index</a></p>
    <p><a href="../index.php">← Back to Main Index</a></p>
  </div>
</body>
</html>
