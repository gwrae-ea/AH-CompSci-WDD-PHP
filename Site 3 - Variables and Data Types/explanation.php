<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site 3 - Concepts and Task Explanation</title>
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
    .data-type-table { width: 100%; border-collapse: collapse; margin: 15px 0; }
    .data-type-table th, .data-type-table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
    .data-type-table th { background-color: #0066cc; color: white; }
    ul { margin: 10px 0 10px 20px; }
    li { margin: 8px 0; }
    .nav { margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; }
    a { color: #0066cc; text-decoration: none; font-weight: bold; }
    a:hover { text-decoration: underline; }
    code { background-color: #f0f0f0; padding: 2px 6px; border-radius: 3px; }
  </style>
</head>
<body>
  <h1>Site 3 - Variables and Data Types</h1>

  <h2>Concepts</h2>

  <h3>What is a Variable?</h3>
  <div class="concept">
    <p>A variable is a container that stores information that can change during program execution. In PHP:</p>
    <ul>
      <li>All variables start with a <code>$</code> symbol</li>
      <li>Variables are assigned with the <code>=</code> operator</li>
      <li>Variables can hold different types of data</li>
      <li>The value can be changed at any time</li>
    </ul>
    <div class="code-block">
$name = "Alice";      // Assign the string "Alice"
$age = 25;            // Assign the integer 25
$name = "Bob";        // Reassign to "Bob"
    </div>
  </div>

  <h3>Variable Naming Rules</h3>
  <div class="concept">
    <p><strong>Valid variable names:</strong></p>
    <ul>
      <li>Must start with a letter or underscore (<code>_</code>)</li>
      <li>Can contain letters, numbers, and underscores</li>
      <li>No size limit for the name</li>
      <li>Case sensitive: <code>$name</code> and <code>$Name</code> are different</li>
    </ul>
    <p><strong>Invalid – would cause errors:</strong></p>
    <ul>
      <li><code>$123name</code> — starts with a number</li>
      <li><code>$user-name</code> — contains a hyphen</li>
      <li><code>$user+age</code> — contains a plus sign</li>
      <li><code>$user.email</code> — contains a period</li>
    </ul>
  </div>

  <h3>PHP Data Types</h3>
  <div class="concept">
    <p>PHP supports eight data types. The five simple types are:</p>
    <table class="data-type-table">
      <thead>
        <tr>
          <th>Type</th>
          <th>Description</th>
          <th>Example</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Integer</strong></td>
          <td>Whole numbers without decimals</td>
          <td><code>$age = 25;</code></td>
        </tr>
        <tr>
          <td><strong>Float (Double)</strong></td>
          <td>Numbers with decimal points</td>
          <td><code>$price = 19.99;</code></td>
        </tr>
        <tr>
          <td><strong>Boolean</strong></td>
          <td>True or false (on or off)</td>
          <td><code>$active = true;</code></td>
        </tr>
        <tr>
          <td><strong>NULL</strong></td>
          <td>Represents the absence of a value</td>
          <td><code>$empty = NULL;</code></td>
        </tr>
        <tr>
          <td><strong>String</strong></td>
          <td>Text or sequences of characters</td>
          <td><code>$text = "Hello";</code></td>
        </tr>
      </tbody>
    </table>
    <p>The two compound types are <strong>Arrays</strong> (collections of values) and <strong>Objects</strong> (instances of classes).</p>
  </div>

  <h3>Automatic Type Conversion</h3>
  <div class="concept">
    <p>PHP automatically converts between types when necessary:</p>
    <div class="code-block">
$num = "5";           // String "5"
$result = $num + 3;   // PHP converts "5" to integer 5, result is 8
$msg = "Answer: " . 42;  // PHP converts 42 to string, result is "Answer: 42"
    </div>
    <p>This flexibility is powerful but can also lead to unexpected results if you're not careful!</p>
  </div>

  <h2>Task Overview</h2>

  <div class="task-box">
    <h3>Objective</h3>
    <p>Master PHP variables and data types by exploring each type, understanding variable naming rules, and creating your own variable examples.</p>
  </div>

  <h3>What You Will Learn</h3>
  <ul>
    <li>How to declare and assign variables</li>
    <li>Rules for naming variables correctly</li>
    <li>The five simple data types and how to use them</li>
    <li>How PHP automatically converts types</li>
    <li>Working with strings, numbers, and boolean values</li>
    <li>Introduction to arrays as compound types</li>
  </ul>

  <h3>Key Tasks</h3>
  <ol>
    <li>Visit <a href="variables.php">variables.php</a> to see basic variable assignment and reassignment</li>
    <li>Visit <a href="naming.php">naming.php</a> to understand variable naming rules</li>
    <li>Visit <a href="typecasting.php">typecasting.php</a> to see automatic type conversion in action</li>
    <li>Visit each data type page:
      <ul>
        <li><a href="integers.php">integers.php</a> — whole numbers</li>
        <li><a href="floats.php">floats.php</a> — decimal numbers</li>
        <li><a href="booleans.php">booleans.php</a> — true or false</li>
        <li><a href="null.php">null.php</a> — empty values</li>
        <li><a href="strings.php">strings.php</a> — text data</li>
        <li><a href="arrays.php">arrays.php</a> — collections of values</li>
      </ul>
    </li>
    <li>Edit <a href="yourtask.php">yourtask.php</a> to create your own variables of each type</li>
  </ol>

  <h3>Practice Activities</h3>
  <div class="concept">
    <ol>
      <li>Create variables with all five simple data types</li>
      <li>Output each variable and verify its value</li>
      <li>Try to use an invalid variable name and see the error</li>
      <li>Perform arithmetic on variables of different types and observe type conversion</li>
      <li>Create a simple array and access its elements</li>
    </ol>
  </div>

  <h2>How to Run This Site</h2>

  <div class="code-block">
/usr/bin/php -S 0.0.0.0:8000 -t "Site 3 - Variables and Data Types"
  </div>

  <p>Then open your browser and navigate to:</p>
  <ul>
    <li><code>/index.php</code> — Navigation hub with links to all concept pages</li>
    <li><code>/yourtask.php</code> — Your workspace for creating examples</li>
  </ul>

  <h2>Next Steps</h2>
  <ul>
    <li>Edit <a href="yourtask.php">yourtask.php</a> to demonstrate all five data types in action</li>
    <li>Practice declaring variables with good naming conventions</li>
    <li>Experiment with type conversion and observe how PHP handles mixed types</li>
    <li>Continue to more advanced topics: operators, control flow, and functions</li>
  </ul>

  <div class="nav">
    <p><a href="index.php">← Back to Site 3 Index</a></p>
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

