<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment Operators Explained - Site 5</title>
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
  <h1>📝 Assignment Operators Explained</h1>

  <div class="concept">
    <p><strong>Welcome to Site 5!</strong> In this lesson, you'll learn about assignment operators — shortcuts that make it easier to modify variables. These operators combine operations with assignment to write cleaner, more concise code.</p>
  </div>

  <h2>What Are Assignment Operators?</h2>
  <p>Assignment operators allow you to assign values to variables and perform operations at the same time. They're shortcuts that make your code shorter and easier to read.</p>

  <h2>Part 1: Simple Assignment</h2>

  <div class="concept">
    <h3>The = Operator</h3>
    <p>The simplest assignment operator assigns a value to a variable:</p>
    <div class="code-block">
&lt;?php
  $x = 10;           // Assign 10 to $x
  $y = $x;           // Assign value of $x to $y
  $z = 5 + 3;        // Assign result of expression to $z
?&gt;
    </div>
  </div>

  <h2>Part 2: Compound Assignment Operators</h2>

  <p><strong>Compound operators combine an operation with assignment.</strong> They let you modify a variable and store the result back in the same variable in one step.</p>

  <table class="operator-table">
    <thead>
      <tr>
        <th>Operator</th>
        <th>Description</th>
        <th>Equivalent To</th>
        <th>Example</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>+=</code></td>
        <td>Add and assign</td>
        <td><code>$x = $x + 5</code></td>
        <td><code>$x += 5</code></td>
      </tr>
      <tr>
        <td><code>-=</code></td>
        <td>Subtract and assign</td>
        <td><code>$x = $x - 5</code></td>
        <td><code>$x -= 5</code></td>
      </tr>
      <tr>
        <td><code>*=</code></td>
        <td>Multiply and assign</td>
        <td><code>$x = $x * 5</code></td>
        <td><code>$x *= 5</code></td>
      </tr>
      <tr>
        <td><code>/=</code></td>
        <td>Divide and assign</td>
        <td><code>$x = $x / 5</code></td>
        <td><code>$x /= 5</code></td>
      </tr>
      <tr>
        <td><code>%=</code></td>
        <td>Modulus and assign</td>
        <td><code>$x = $x % 5</code></td>
        <td><code>$x %= 5</code></td>
      </tr>
    </tbody>
  </table>

  <h2>Part 3: Understanding Each Operator</h2>

  <h3>+= (Add and Assign)</h3>
  <p><strong>Use when:</strong> You want to add a value to an existing variable (accumulating totals, scores, counts)</p>
  <div class="code-block">
&lt;?php
  $score = 0;
  
  $score += 10;  // score becomes 10
  $score += 15;  // score becomes 25
  $score += 5;   // score becomes 30
  
  echo $score;   // Outputs: 30
?&gt;
  </div>

  <h3>-= (Subtract and Assign)</h3>
  <p><strong>Use when:</strong> You want to subtract from an existing variable (countdowns, inventory reduction, debt payments)</p>
  <div class="code-block">
&lt;?php
  $inventory = 100;
  
  $inventory -= 10;  // inventory becomes 90
  $inventory -= 25;  // inventory becomes 65
  
  echo $inventory;   // Outputs: 65
?&gt;
  </div>

  <h3>*= (Multiply and Assign)</h3>
  <p><strong>Use when:</strong> You want to scale or multiply a value (discounts, tax, growth)</p>
  <div class="code-block">
&lt;?php
  $price = 100;
  
  $price *= 0.9;   // Apply 10% discount (multiply by 0.9)
  echo $price;     // Outputs: 90
  
  $quantity = 5;
  $totalCost = 20; // Unit cost
  $totalCost *= $quantity;  // Multiply by quantity
  echo $totalCost; // Outputs: 100
?&gt;
  </div>

  <h3>/= (Divide and Assign)</h3>
  <p><strong>Use when:</strong> You want to divide a value (splitting costs, scaling down, averaging)</p>
  <div class="code-block">
&lt;?php
  $total = 120;
  
  $total /= 4;     // Divide among 4 people
  echo $total;     // Outputs: 30 (per person)
  
  $imageWidth = 1200;
  $imageWidth /= 2;  // Scale to half size
  echo $imageWidth;  // Outputs: 600
?&gt;
  </div>

  <h3>%= (Modulus and Assign)</h3>
  <p><strong>Use when:</strong> You want the remainder (checking even/odd, cycling through patterns, time calculations)</p>
  <div class="code-block">
&lt;?php
  $number = 10;
  
  $number %= 3;    // Get remainder when dividing by 3
  echo $number;    // Outputs: 1 (because 10 / 3 = 3 remainder 1)
  
  $dayOfWeek = 8;
  $dayOfWeek %= 7; // Keep in range 0-6
  echo $dayOfWeek; // Outputs: 1 (day 1 = Monday)
?&gt;
  </div>

  <h2>Part 4: Why Use Assignment Operators?</h2>

  <div class="concept">
    <h3>Benefits</h3>
    <ul>
      <li>✓ <strong>Shorter code:</strong> `$x += 5` vs. `$x = $x + 5`</li>
      <li>✓ <strong>Clearer intent:</strong> `$score += 10` immediately tells you "add points to the score"</li>
      <li>✓ <strong>Fewer mistakes:</strong> Less chance of forgetting the variable name on the right side</li>
      <li>✓ <strong>Efficiency:</strong> Variable is modified in-place</li>
    </ul>
  </div>

  <h2>Part 5: Real-World Examples</h2>

  <h3>Example 1: Shopping Cart</h3>
  <div class="example-box">
    <div class="code-block">
&lt;?php
  $cartTotal = 0;
  
  $cartTotal += 12.99;  // Add item 1
  $cartTotal += 8.50;   // Add item 2
  $cartTotal -= 2.00;   // Apply coupon
  $cartTotal *= 1.08;   // Add 8% tax
  
  echo "Total: \$$cartTotal";  // Total: $23.68
?&gt;
    </div>
  </div>

  <h3>Example 2: Game Scoring</h3>
  <div class="example-box">
    <div class="code-block">
&lt;?php
  $score = 0;
  
  $score += 100;  // Hit target
  $score *= 2;    // Double points bonus
  $score -= 25;   // Penalty
  
  echo "Score: $score";  // Score: 175
?&gt;
    </div>
  </div>

  <h3>Example 3: Temperature Calculation</h3>
  <div class="example-box">
    <div class="code-block">
&lt;?php
  $celsius = 25;
  $fahrenheit = $celsius;
  
  $fahrenheit *= 9;    // Multiply by 9
  $fahrenheit /= 5;    // Divide by 5
  $fahrenheit += 32;   // Add 32
  
  echo "$celsius°C = $fahrenheit°F";  // 25°C = 77°F
?&gt;
    </div>
  </div>

  <h2>Part 6: Common Mistakes</h2>

  <div class="task-box">
    <h3>❌ Mistake 1: Confusing = and ==</h3>
    <div class="code-block">
// Wrong (assigns 5, doesn't compare)
if ($x = 5) { echo "This always runs!"; }

// Correct (compares $x with 5)
if ($x == 5) { echo "Only runs if $x equals 5"; }
    </div>

    <h3>❌ Mistake 2: Wrong operator order</h3>
    <div class="code-block">
// Wrong: =+ means "assign positive 5"
$x =+ 5;   // $x = 5 (not adding!)

// Correct: += means "add and assign"
$x += 5;   // $x = $x + 5
    </div>

    <h3>❌ Mistake 3: Forgetting to update the variable</h3>
    <div class="code-block">
// Wrong: Result is lost
$total = 100;
$total + 50;    // This does nothing useful

// Correct: Result is assigned back
$total = 100;
$total += 50;   // Now $total = 150
    </div>

    <h3>❌ Mistake 4: Dividing by zero</h3>
    <div class="code-block">
// Wrong: Causes error
$result = 100;
$result /= 0;   // Division by zero!

// Correct: Check first
if ($divisor != 0) {
  $result /= $divisor;
}
    </div>
  </div>

  <h2>Part 7: Chaining Operations</h2>

  <p>You can use multiple assignment operators in sequence:</p>

  <div class="code-block">
&lt;?php
  $value = 10;
  echo "Start: $value\n";
  
  $value += 5;   // 10 + 5 = 15
  echo "After += 5: $value\n";
  
  $value *= 2;   // 15 × 2 = 30
  echo "After *= 2: $value\n";
  
  $value -= 8;   // 30 - 8 = 22
  echo "After -= 8: $value\n";
  
  $value /= 2;   // 22 / 2 = 11
  echo "After /= 2: $value\n";
?&gt;
  </div>

  <h2>Quick Reference</h2>

  <table class="operator-table">
    <thead>
      <tr>
        <th>Operator</th>
        <th>Name</th>
        <th>Example</th>
        <th>Same As</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>=</code></td>
        <td>Assignment</td>
        <td><code>$x = 10</code></td>
        <td>Assign 10 to $x</td>
      </tr>
      <tr>
        <td><code>+=</code></td>
        <td>Add and assign</td>
        <td><code>$x += 5</code></td>
        <td><code>$x = $x + 5</code></td>
      </tr>
      <tr>
        <td><code>-=</code></td>
        <td>Subtract and assign</td>
        <td><code>$x -= 5</code></td>
        <td><code>$x = $x - 5</code></td>
      </tr>
      <tr>
        <td><code>*=</code></td>
        <td>Multiply and assign</td>
        <td><code>$x *= 5</code></td>
        <td><code>$x = $x * 5</code></td>
      </tr>
      <tr>
        <td><code>/=</code></td>
        <td>Divide and assign</td>
        <td><code>$x /= 5</code></td>
        <td><code>$x = $x / 5</code></td>
      </tr>
      <tr>
        <td><code>%=</code></td>
        <td>Modulus and assign</td>
        <td><code>$x %= 5</code></td>
        <td><code>$x = $x % 5</code></td>
      </tr>
    </tbody>
  </table>

  <h2>Your Task This Lesson</h2>

  <div class="task-box">
    <h4>Goal:</h4>
    <ol>
      <li>Visit each demonstration page (simple.php through modulus_assign.php)</li>
      <li>Understand how each operator works</li>
      <li>Predict the output before loading the page</li>
      <li>Review combined.php to see real-world examples</li>
      <li>Create your own examples in yourtask.php</li>
    </ol>
  </div>

  <h2>Practice Activities</h2>

  <div class="example-box">
    <h4>Activity 1: Multiply Operations</h4>
    <p>Create a variable, then chain these operations:</p>
    <ol>
      <li>Start with $value = 100</li>
      <li>Add 50: $value += 50</li>
      <li>Multiply by 2: $value *= 2</li>
      <li>Divide by 4: $value /= 4</li>
      <li>What should the final value be?</li>
    </ol>

    <h4>Activity 2: Real-World Scenario</h4>
    <p>Write code to calculate:</p>
    <ul>
      <li>A product costs $50</li>
      <li>Apply a 20% discount</li>
      <li>Add 8% tax</li>
      <li>Calculate price per item if buying 3</li>
    </ul>
  </div>

  <h2>Key Takeaways</h2>

  <div class="concept">
    <ul>
      <li>✅ Assignment operators are shortcuts for common operations</li>
      <li>✅ `+=`, `-=`, `*=`, `/=`, `%=` combine an operation with assignment</li>
      <li>✅ Use them for cleaner, more readable code</li>
      <li>✅ They're especially useful for accumulators, counters, and scaling</li>
      <li>✅ Remember: `=+ 5` is wrong; `+= 5` is correct</li>
    </ul>
  </div>

  <h2>Next Steps</h2>

  <div class="concept">
    <p>✅ <strong>Mastered Site 5?</strong> You now understand how to:</p>
    <ul>
      <li>Assign and modify variables efficiently</li>
      <li>Chain multiple operations on a single variable</li>
      <li>Write real-world calculations (shopping, scoring, scaling)</li>
      <li>Choose the right operator for the task</li>
    </ul>
    <p>These skills combine with operators from Site 4 to build powerful conditional and calculation logic!</p>
  </div>

  <div class="nav-links">
    <p><a href="index.php">← Back to Site 5 Hub</a></p>
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

