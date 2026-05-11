<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site 2 - Concepts and Task Explanation</title>
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
    code { background-color: #f0f0f0; padding: 2px 6px; border-radius: 3px; }
  </style>
</head>
<body>
  <h1>Site 2 - PHP Comments and Syntax</h1>

  <h2>Concepts</h2>

  <h3>Comments: Making Your Code Readable</h3>
  <div class="concept">
    <p>Comments are notes in your code that help you and others understand what the code does. The server strips them out before sending anything to the browser.</p>
    <p><strong>Three types of comments:</strong></p>
    <ul>
      <li><strong>Single-line comments with #:</strong>
        <div class="code-block"># This is a comment</div>
      </li>
      <li><strong>Single-line comments with //:</strong>
        <div class="code-block">// This is also a comment</div>
      </li>
      <li><strong>Multi-line comments:</strong>
        <div class="code-block">/* This is a comment
   that spans multiple lines
   and is useful for longer explanations */</div>
      </li>
    </ul>
  </div>

  <h3>Multi-Line Output</h3>
  <div class="concept">
    <p>Sometimes you need to output more than one line at a time. PHP offers two approaches:</p>
    <ul>
      <li><strong>Here document syntax (heredoc):</strong> For outputting large blocks of text with variable interpolation
        <div class="code-block">
print &lt;&lt;&lt;END
This text spans
multiple lines
and $variables work here
END;
        </div>
      </li>
      <li><strong>Multi-line strings:</strong> Regular strings can span multiple lines
        <div class="code-block">
print "This spans
multiple lines. Newlines will be
output as well";
        </div>
      </li>
    </ul>
  </div>

  <h3>PHP is Whitespace Insensitive</h3>
  <div class="concept">
    <p>The number of spaces, tabs, or newlines in your code doesn't matter to PHP. These are all equivalent:</p>
    <div class="code-block">
$x = 2 + 2;
$x   =   2   +   2;
$x =
  2
  + 2;
    </div>
    <p>All three assignments produce the same result. Use formatting to make your code easy to read!</p>
  </div>

  <h3>PHP is Case Sensitive</h3>
  <div class="concept">
    <p>Variable names are case sensitive. These are three different variables:</p>
    <div class="code-block">
$name = "Alice";
$Name = "Bob";
$NAME = "Charlie";
    </div>
    <p><code>$name</code>, <code>$Name</code>, and <code>$NAME</code> are all different!</p>
  </div>

  <h3>Statements End with Semicolons</h3>
  <div class="concept">
    <p>Every PHP statement must end with a semicolon (;). The semicolon tells PHP "this statement is complete."</p>
    <div class="code-block">
echo "Hello";      // Correct: has semicolon
echo "Hello"       // Error: missing semicolon
    </div>
  </div>

  <h2>Task Overview</h2>

  <div class="task-box">
    <h3>Objective</h3>
    <p>Understand PHP syntax rules by exploring commented code, testing whitespace insensitivity, and experimenting with case sensitivity and semicolons.</p>
  </div>

  <h3>What You Will Learn</h3>
  <ul>
    <li>How to write and use comments in PHP</li>
    <li>Methods for outputting multiple lines of text</li>
    <li>How whitespace is handled by PHP</li>
    <li>Why case sensitivity matters for variable names</li>
    <li>The importance of semicolons in statements</li>
  </ul>

  <h3>Key Tasks</h3>
  <ol>
    <li>Visit <a href="comments.php">comments.php</a> and identify all three comment types</li>
    <li>Visit <a href="multiline.php">multiline.php</a> and compare heredoc and regular multi-line output</li>
    <li>Visit <a href="whitespace.php">whitespace.php</a> and verify that all three variables have the same value</li>
    <li>Visit <a href="casesensitive.php">casesensitive.php</a> and notice that $capital and $CaPiTaL are treated differently</li>
    <li>Visit <a href="statements.php">statements.php</a> and identify statements ending in semicolons</li>
    <li>Edit <a href="yourtask.php">yourtask.php</a> to demonstrate all concepts</li>
  </ol>

  <h3>Experimentation Challenge</h3>
  <div class="concept">
    <p>Try removing the semicolon from an echo statement or a variable assignment and see what error PHP produces. Understanding why errors occur helps you debug code faster.</p>
  </div>

  <h2>How to Run This Site</h2>

  <div class="code-block">
/usr/bin/php -S 0.0.0.0:8000 -t "Site 2 - Comments and Syntax"
  </div>

  <p>Then open your browser and navigate to:</p>
  <ul>
    <li><code>/index.php</code> — Navigation hub with links to all example pages</li>
    <li><code>/yourtask.php</code> — Your workspace for creating examples</li>
  </ul>

  <h2>Next Steps</h2>
  <ul>
    <li>Edit <a href="yourtask.php">yourtask.php</a> to add your own examples demonstrating each syntax rule</li>
    <li>Try intentionally breaking syntax to see error messages (e.g., remove a semicolon)</li>
    <li>Write clean, well-commented code using proper formatting</li>
    <li>Move on to Site 3 to learn about variables and data types</li>
  </ul>

  <div class="nav">
    <p><a href="index.php">← Back to Site 2 Index</a></p>
    <p><a href="../index.php">← Back to Main Index</a></p>
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

