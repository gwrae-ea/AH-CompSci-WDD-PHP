<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators Explained - Site 4</title>
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
    }
    .truth-table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background-color: white;
    }
    .truth-table th {
      background-color: #0066cc;
      color: white;
      padding: 12px;
      text-align: left;
    }
    .truth-table td {
      border: 1px solid #ddd;
      padding: 12px;
    }
    .truth-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .true-val {
      color: #28a745;
      font-weight: bold;
    }
    .false-val {
      color: #dc3545;
      font-weight: bold;
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
  <h1>🔍 Comparison and Logical Operators Explained</h1>

  <div class="concept">
    <p><strong>Welcome to Site 4!</strong> In this lesson, you'll learn how to compare values and combine conditions using operators. These are essential skills for making decisions in your code.</p>
  </div>

  <h2>What Are Operators?</h2>
  <p>Operators are symbols that perform operations on variables and values. Think of them as mathematical symbols that return results:</p>
  <ul>
    <li><strong>Comparison Operators</strong> - Compare two values and return true or false</li>
    <li><strong>Logical Operators</strong> - Combine multiple comparisons or reverse conditions</li>
  </ul>

  <h2>Part 1: Comparison Operators</h2>

  <h3>What They Do</h3>
  <p>Comparison operators answer questions like "Is this value greater than that?" or "Are these values equal?" The answer is always true or false.</p>

  <div class="concept">
    <h4>Six Comparison Operators:</h4>
    <ul>
      <li><code>==</code> - Equal to (checks if values are the same)</li>
      <li><code>!=</code> - Not equal to (checks if values are different)</li>
      <li><code>&gt;</code> - Greater than</li>
      <li><code>&lt;</code> - Less than</li>
      <li><code>&gt;=</code> - Greater than or equal to</li>
      <li><code>&lt;=</code> - Less than or equal to</li>
    </ul>
  </div>

  <h3>Comparison Operator Examples</h3>

  <div class="code-block">
&lt;?php
  $A = 10;
  $B = 20;

  $A == $B;  // false (10 is not equal to 20)
  $A != $B;  // true (10 is not equal to 20)
  $A &gt; $B;   // false (10 is not greater than 20)
  $A &lt; $B;   // true (10 is less than 20)
  $A &gt;= $B;  // false (10 is not greater than or equal to 20)
  $A &lt;= $B;  // true (10 is less than or equal to 20)
?&gt;
  </div>

  <div class="example-box">
    <h4>Real-World Example: Age Check</h4>
    <div class="code-block">
&lt;?php
  $age = 18;
  
  if ($age &gt;= 18) {
    echo "You can vote!";
  } else {
    echo "You must wait.";
  }
?&gt;
    </div>
    <p>The comparison `$age >= 18` evaluates to true, so "You can vote!" is displayed.</p>
  </div>

  <h2>Part 2: Logical Operators</h2>

  <h3>What They Do</h3>
  <p>Logical operators combine multiple comparisons or reverse conditions. They let you ask complex questions like "Is the age over 18 AND the income over $40,000?"</p>

  <div class="concept">
    <h4>Five Logical Operators:</h4>
    <ul>
      <li><code>and</code> or <code>&amp;&amp;</code> - AND: Both conditions must be true</li>
      <li><code>or</code> or <code>||</code> - OR: At least one condition must be true</li>
      <li><code>!</code> - NOT: Reverses the condition (true becomes false, false becomes true)</li>
    </ul>
  </div>

  <h3>AND Operator (and / &&)</h3>

  <table class="truth-table">
    <thead>
      <tr>
        <th>Condition 1</th>
        <th>Condition 2</th>
        <th>Result (AND)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span class="true-val">true</span></td>
        <td><span class="true-val">true</span></td>
        <td><span class="true-val">true</span></td>
      </tr>
      <tr>
        <td><span class="true-val">true</span></td>
        <td><span class="false-val">false</span></td>
        <td><span class="false-val">false</span></td>
      </tr>
      <tr>
        <td><span class="false-val">false</span></td>
        <td><span class="true-val">true</span></td>
        <td><span class="false-val">false</span></td>
      </tr>
      <tr>
        <td><span class="false-val">false</span></td>
        <td><span class="false-val">false</span></td>
        <td><span class="false-val">false</span></td>
      </tr>
    </tbody>
  </table>

  <div class="code-block">
&lt;?php
  $age = 25;
  $income = 50000;

  if ($age &gt;= 18 &amp;&amp; $income &gt;= 40000) {
    echo "You can apply for a loan!"; // This outputs
  }
?&gt;
  </div>

  <p><strong>Remember:</strong> Both conditions must be true for AND to return true.</p>

  <h3>OR Operator (or / ||)</h3>

  <table class="truth-table">
    <thead>
      <tr>
        <th>Condition 1</th>
        <th>Condition 2</th>
        <th>Result (OR)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><span class="true-val">true</span></td>
        <td><span class="true-val">true</span></td>
        <td><span class="true-val">true</span></td>
      </tr>
      <tr>
        <td><span class="true-val">true</span></td>
        <td><span class="false-val">false</span></td>
        <td><span class="true-val">true</span></td>
      </tr>
      <tr>
        <td><span class="false-val">false</span></td>
        <td><span class="true-val">true</span></td>
        <td><span class="true-val">true</span></td>
      </tr>
      <tr>
        <td><span class="false-val">false</span></td>
        <td><span class="false-val">false</span></td>
        <td><span class="false-val">false</span></td>
      </tr>
    </tbody>
  </table>

  <div class="code-block">
&lt;?php
  $day = "Saturday";

  if ($day == "Saturday" || $day == "Sunday") {
    echo "It's the weekend!"; // This outputs
  }
?&gt;
  </div>

  <p><strong>Remember:</strong> At least ONE condition must be true for OR to return true.</p>

  <h3>NOT Operator (!)</h3>

  <div class="code-block">
&lt;?php
  $isRaining = true;

  if (!$isRaining) {
    echo "Go outside!";
  } else {
    echo "Stay inside."; // This outputs
  }
  
  // !(true) = false
  // !(false) = true
?&gt;
  </div>

  <p><strong>Remember:</strong> NOT reverses the result. It turns true to false and false to true.</p>

  <h3>Difference Between `and`/`or` and `&&`/`||`</h3>

  <div class="concept">
    <p>Both `and` and `&&` do the same thing, but they have different precedence (order of operations). Same with `or` / `||`.</p>
    <p><strong>Best Practice:</strong> Use `&&` and `||` in if statements. They're clearer and more commonly used.</p>
    <div class="code-block">
// Avoid: Uses 'and'
$result = true and false; // $result = true (unexpected!)

// Preferred: Uses '&&'
$result = true && false; // $result = false
    </div>
  </div>

  <h2>Part 3: Complex Expressions</h2>

  <div class="example-box">
    <h4>Combining All Operators</h4>
    <div class="code-block">
&lt;?php
  $age = 25;
  $experience = 3;
  $income = 50000;

  // Complex condition combining AND and OR
  if (($age &gt;= 18 &amp;&amp; experience &gt;= 2) || $income &gt; 75000) {
    echo "You qualify for senior position!";
  }

  // Using NOT
  if (!($age &lt; 18)) {
    echo "You're an adult.";
  }
?&gt;
    </div>
  </div>

  <h3>Why Use Parentheses?</h3>
  <p>Parentheses make your code clearer and prevent mistakes caused by operator precedence:</p>
  <ul>
    <li>✓ Clear: `if (($age > 18) && ($income > 40000)) { }`</li>
    <li>? Confusing: `if ($age > 18 && $income > 40000 || $experience > 5) { }`</li>
  </ul>

  <h2>Part 4: Conditional Operator (? :)</h2>

  <div class="concept">
    <h3>Syntax</h3>
    <p>The conditional operator (also called the <strong>ternary operator</strong>) is a shorthand for an if/else block:</p>
    <div class="code-block">condition ? value_if_true : value_if_false</div>
    <p>If the condition is <strong>true</strong>, the expression returns the first value. If <strong>false</strong>, it returns the second.</p>
  </div>

  <h3>Example: if/else vs. Ternary</h3>
  <div class="code-block">
&lt;?php
  $age = 20;

  // if/else version
  if ($age >= 18) {
    $status = "adult";
  } else {
    $status = "minor";
  }

  // Ternary version (same result, one line)
  $status = ($age >= 18) ? "adult" : "minor";

  echo $status;  // Outputs: adult
?&gt;
  </div>

  <h3>More Examples</h3>
  <div class="code-block">
&lt;?php
  $score = 65;
  $grade = ($score >= 50) ? "Pass" : "Fail";
  echo $grade;  // Outputs: Pass

  $number = 7;
  $parity = ($number % 2 == 0) ? "even" : "odd";
  echo $parity;  // Outputs: odd

  $isLoggedIn = true;
  echo $isLoggedIn ? "Welcome back!" : "Please log in.";
?&gt;
  </div>

  <div class="concept">
    <h4>When to Use the Ternary Operator</h4>
    <ul>
      <li>✓ Short, simple two-outcome decisions</li>
      <li>✓ Inline output inside echo</li>
      <li>✓ Setting a variable to one of two values based on a condition</li>
      <li>✗ Avoid chaining multiple ternaries — use if/elseif/else instead for clarity</li>
    </ul>
  </div>

  <h2>Common Mistakes</h2>

  <div class="task-box">
    <h4>❌ Mistake 1: Using = Instead of ==</h4>
    <div class="code-block">
// Wrong (assigns 18 to $age)
if ($age = 18) { }

// Correct (compares $age with 18)
if ($age == 18) { }
    </div>

    <h4>❌ Mistake 2: Forgetting Parentheses</h4>
    <div class="code-block">
// Confusing (unclear operator precedence)
if ($a > 10 || $b < 20 && $c == 5) { }

// Clear (parentheses show intent)
if ($a > 10 || ($b < 20 && $c == 5)) { }
    </div>

    <h4>❌ Mistake 3: Type Coercion</h4>
    <div class="code-block">
// Confusing (string "10" equals number 10)
if ("10" == 10) { echo "true"; } // outputs "true"

// Use === for strict comparison
if ("10" === 10) { echo "true"; } // no output
    </div>
  </div>

  <h2>Your Task This Lesson</h2>

  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Visit each demonstration page (equality.php, relational.php, logical_and.php, logical_or.php, logical_not.php)</li>
      <li>Predict the output before loading the page</li>
      <li>Understand why each result is true or false</li>
      <li>Review combined.php to see real-world examples</li>
      <li>Create your own conditions in yourtask.php</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>

  <div class="example-box">
    <h4>Activity 1: Guess the Result</h4>
    <p>Before checking each page, guess whether these are true or false:</p>
    <ul>
      <li>$x = 15; $x > 10 && $x < 20</li>
      <li>$name = "Alice"; $name == "bob" || $name == "alice"</li>
      <li>$age = 16; !($age >= 18)</li>
    </ul>

    <h4>Activity 2: Write Your Own</h4>
    <p>Edit yourtask.php and write conditions for:</p>
    <ul>
      <li>Check if a number is between 1 and 100</li>
      <li>Check if a user is eligible to vote (age >= 18)</li>
      <li>Check if a password is strong (length > 8 AND contains special characters)</li>
    </ul>
  </div>

  <h2>Quick Reference</h2>

  <table class="truth-table">
    <thead>
      <tr>
        <th>Operator</th>
        <th>Symbol</th>
        <th>Use Case</th>
        <th>Example</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Equal</td>
        <td>==</td>
        <td>Check if values are equal</td>
        <td>$x == 5</td>
      </tr>
      <tr>
        <td>Not Equal</td>
        <td>!=</td>
        <td>Check if values differ</td>
        <td>$x != 0</td>
      </tr>
      <tr>
        <td>Greater than</td>
        <td>&gt;</td>
        <td>Left side is bigger</td>
        <td>$age > 18</td>
      </tr>
      <tr>
        <td>Less than</td>
        <td>&lt;</td>
        <td>Left side is smaller</td>
        <td>$score < 100</td>
      </tr>
      <tr>
        <td>Greater or equal</td>
        <td>&gt;=</td>
        <td>Left side is bigger or equal</td>
        <td>$age >= 18</td>
      </tr>
      <tr>
        <td>Less or equal</td>
        <td>&lt;=</td>
        <td>Left side is smaller or equal</td>
        <td>$score <= 100</td>
      </tr>
      <tr>
        <td>AND</td>
        <td>&amp;&amp;</td>
        <td>Both conditions true</td>
        <td>$x > 5 && $y < 10</td>
      </tr>
      <tr>
        <td>OR</td>
        <td>||</td>
        <td>One condition true</td>
        <td>$day == "Sat" || $day == "Sun"</td>
      </tr>
      <tr>
        <td>NOT</td>
        <td>!</td>
        <td>Reverse the result</td>
        <td>!($x == 0)</td>
      </tr>
    </tbody>
  </table>

  <h2>Next Steps</h2>

  <div class="concept">
    <p>✅ <strong>Mastered Site 4?</strong> You now understand how to:</p>
    <ul>
      <li>Compare values using all six comparison operators</li>
      <li>Combine conditions using logical operators</li>
      <li>Write complex conditional expressions</li>
      <li>Think about truth values and operator precedence</li>
    </ul>
    <p>These skills are essential for Site 5 and beyond, where you'll use conditions in loops and functions!</p>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 4 Hub</a></p>
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

