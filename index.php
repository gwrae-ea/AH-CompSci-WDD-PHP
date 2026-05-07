<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AH CompSci WDD - PHP Lessons</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f5f5f5;
    }
    h1 {
      color: #333;
      text-align: center;
    }
    .lessons {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .lesson-card {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .lesson-card h2 {
      margin-top: 0;
      color: #0066cc;
    }
    .lesson-card p {
      color: #666;
      margin: 10px 0;
    }
    .lesson-card a {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #0066cc;
      color: white;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
    }
    .lesson-card a:hover {
      background-color: #0052a3;
    }
    .info-box {
      background-color: #e8f4f8;
      border-left: 4px solid #0066cc;
      padding: 15px;
      margin: 20px 0;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <h1>AH CompSci - Web Development with PHP</h1>

  <div class="info-box">
    <p><strong>Welcome!</strong> Use the links below to navigate to each lesson. Each site contains demonstration pages and a task workspace.</p>
  </div>

  <div class="lessons">
    <div class="lesson-card">
      <h2>Site 1 - Hello World</h2>
      <p>Your first PHP program. Learn how PHP is embedded in HTML and how to output text to the browser.</p>
      <p><strong>Topics:</strong> PHP basics, echo, HTML embedding</p>
      <a href="Site 1 - Hello World/index.php">Go to Site 1</a>
      <a href="Site 1 - Hello World/explanation.php">📖 Explanation</a>
      <a href="Site 1 - Hello World/Task 1.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 2 - Comments and Syntax</h2>
      <p>Explore PHP comments, multi-line output, and core syntax rules including whitespace insensitivity and case sensitivity.</p>
      <p><strong>Topics:</strong> Comments, multi-line printing, syntax rules, semicolons</p>
      <a href="Site 2 - Comments and Syntax/index.php">Go to Site 2</a>
      <a href="Site 2 - Comments and Syntax/explanation.php">📖 Explanation</a>
      <a href="Site 2 - Comments and Syntax/Task 2.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 3 - Variables and Data Types</h2>
      <p>Master PHP variables and the eight data types. Learn variable naming rules, type conversion, and how to work with different data values.</p>
      <p><strong>Topics:</strong> Variables, data types, naming rules, type juggling, integers, floats, booleans, NULL, strings, arrays</p>
      <a href="Site 3 - Variables and Data Types/index.php">Go to Site 3</a>
      <a href="Site 3 - Variables and Data Types/explanation.php">📖 Explanation</a>
      <a href="Site 3 - Variables and Data Types/Task 3.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 4 - Comparison and Logical Operators</h2>
      <p>Learn to compare values and combine conditions using operators. Master the building blocks of conditional logic and decision-making in code.</p>
      <p><strong>Topics:</strong> Comparison operators, logical operators, truth tables, conditional expressions, precedence</p>
      <a href="Site 4 - Comparison and Logical Operators/index.php">Go to Site 4</a>
      <a href="Site 4 - Comparison and Logical Operators/explanation.php">📖 Explanation</a>
      <a href="Site 4 - Comparison and Logical Operators/Task 4.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 5 - Assignment Operators</h2>
      <p>Master assignment operators that let you modify and assign values efficiently. Learn shortcuts for common operations and real-world calculations.</p>
      <p><strong>Topics:</strong> Simple assignment, compound operators (+=, -=, *=, /=, %=), accumulation, scaling, chaining operations</p>
      <a href="Site 5 - Assignment Operators/index.php">Go to Site 5</a>
      <a href="Site 5 - Assignment Operators/explanation.php">📖 Explanation</a>
      <a href="Site 5 - Assignment Operators/Task 5.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 6 - Iteration Constructs</h2>
      <p>Learn how PHP loops repeat code efficiently. Explore fixed and condition-based loops, array iteration, and controlling loop flow.</p>
      <p><strong>Topics:</strong> for, while, do...while, foreach, break, continue, counters, times tables</p>
      <a href="Site 6 - Iteration Constructs/index.php">Go to Site 6</a>
      <a href="Site 6 - Iteration Constructs/explanation.php">📖 Explanation</a>
      <a href="Site 6 - Iteration Constructs/Task 6.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 7 - While Loop Statement</h2>
      <p>Focus on the while loop and conditional iteration. Learn how changing variables keep a loop running until a condition becomes false.</p>
      <p><strong>Topics:</strong> while loops, counters, conditional iteration, decrementing, times tables</p>
      <a href="Site 7 - While Loop Statement/index.php">Go to Site 7</a>
      <a href="Site 7 - While Loop Statement/explanation.php">📖 Explanation</a>
      <a href="Site 7 - While Loop Statement/Task 7.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 8 - Do While Loop Statement</h2>
      <p>Focus on the do...while loop and conditional iteration. Learn how a loop can guarantee one execution before checking whether to continue.</p>
      <p><strong>Topics:</strong> do...while loops, counters, conditional iteration, incrementing, times tables</p>
      <a href="Site 8 - Do While Loop Statement/index.php">Go to Site 8</a>
      <a href="Site 8 - Do While Loop Statement/explanation.php">📖 Explanation</a>
      <a href="Site 8 - Do While Loop Statement/Task 8.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 9 - Foreach Loop Statement</h2>
      <p>Focus on the foreach loop and array traversal. Learn how to process each item in a list and search for matching names.</p>
      <p><strong>Topics:</strong> foreach loops, arrays, strings, traversal, searching lists, matching names</p>
      <a href="Site 9 - Foreach Loop Statement/index.php">Go to Site 9</a>
      <a href="Site 9 - Foreach Loop Statement/explanation.php">📖 Explanation</a>
      <a href="Site 9 - Foreach Loop Statement/Task 9.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 10 - Break and Continue</h2>
      <p>Learn how to control loop flow by ending a loop early with break or skipping a single iteration with continue.</p>
      <p><strong>Topics:</strong> break, continue, loop control, while loops, foreach loops, skipping values, stopping early</p>
      <a href="Site 10 - Break and Continue/index.php">Go to Site 10</a>
      <a href="Site 10 - Break and Continue/explanation.php">📖 Explanation</a>
      <a href="Site 10 - Break and Continue/Task 10.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 11 - Numeric Array</h2>
      <p>Learn how numeric arrays store values with numbered indexes and how to calculate totals and averages from array data.</p>
      <p><strong>Topics:</strong> numeric arrays, indexes, integers, running totals, averages, sparse arrays</p>
      <a href="Site 11 - Numeric Array/index.php">Go to Site 11</a>
      <a href="Site 11 - Numeric Array/explanation.php">📖 Explanation</a>
      <a href="Site 11 - Numeric Array/Task 11.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 12 - Associative Array</h2>
      <p>Learn how associative arrays use string keys to create meaningful relationships between keys and values. Understand the difference between numeric and associative array indexing.</p>
      <p><strong>Topics:</strong> associative arrays, string keys, key-value pairs, meaningful associations, array methods</p>
      <a href="Site 12 - Associative Array/index.php">Go to Site 12</a>
      <a href="Site 12 - Associative Array/explanation.php">📖 Explanation</a>
      <a href="Site 12 - Associative Array/Task 12.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 13 - Multidimensional Arrays</h2>
      <p>Learn how multidimensional arrays nest arrays within arrays to organize complex, related data with hierarchical structure.</p>
      <p><strong>Topics:</strong> multidimensional arrays, nested arrays, 2D arrays, multiple indexes, hierarchical data, nested loops</p>
      <a href="Site 13 - Multidimensional Arrays/index.php">Go to Site 13</a>
      <a href="Site 13 - Multidimensional Arrays/explanation.php">📖 Explanation</a>
      <a href="Site 13 - Multidimensional Arrays/Task 13.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 14 - Media Queries and External CSS</h2>
      <p>Learn responsive design using external CSS with media screen, media print, and max-width breakpoints only.</p>
      <p><strong>Topics:</strong> external CSS, media queries, @media screen, @media print, max-width, responsive layouts, print styles</p>
      <a href="Site 14 - Media Queries and External CSS/index.php">Go to Site 14</a>
      <a href="Site 14 - Media Queries and External CSS/explanation.php">📖 Explanation</a>
      <a href="Site 14 - Media Queries and External CSS/Task 14.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 15 - Database Connection Testing</h2>
      <p>Test and evidence a PHP-to-MySQL connection using try/catch and a version query, based on db_test.php.</p>
      <p><strong>Topics:</strong> PDO connection, try/catch, SELECT VERSION(), pass/fail outputs, test evidence, troubleshooting</p>
      <a href="Site 15 - Database Connection Testing/index.php">Go to Site 15</a>
      <a href="Site 15 - Database Connection Testing/explanation.php">📖 Explanation</a>
      <a href="Site 15 - Database Connection Testing/Task 15.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 16 - Select Queries with Filters and Sorting</h2>
      <p>Learn SELECT filtering and sorting with an Employees demo page and a Students-based pupil task.</p>
      <p><strong>Topics:</strong> SELECT *, WHERE, ORDER BY, AND, OR, NOT, LIKE, fetchAll(), HTML tables, empty states, query errors</p>
      <a href="Site 16 - Select Queries with Filters and Sorting/index.php">Go to Site 16</a>
      <a href="Site 16 - Select Queries with Filters and Sorting/explanation.php">📖 Explanation</a>
      <a href="Site 16 - Select Queries with Filters and Sorting/Task 16.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 17 - Form GET and Display</h2>
      <p>Build a two-page form flow where page 1 collects user input, page 2 receives it via GET, stores it in PHP variables, and processes it with string functions.</p>
      <p><strong>Topics:</strong> HTML forms, GET method, $_GET superglobal, concatenation, string functions (strtoupper, strtolower, strlen), htmlspecialchars</p>
      <a href="Site 17 - Form GET and Display/index.php">Go to Site 17</a>
      <a href="Site 17 - Form GET and Display/explanation.php">📖 Explanation</a>
      <a href="Site 17 - Form GET and Display/Task 17.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 18 - Form POST and Display</h2>
      <p>Build a two-page form flow where page 1 collects user input, page 2 receives it via POST, stores it in PHP variables, and processes it with string functions.</p>
      <p><strong>Topics:</strong> HTML forms, POST method, $_POST superglobal, concatenation, string functions (strtoupper, strtolower, strlen), htmlspecialchars</p>
      <a href="Site 18 - Form POST and Display/index.php">Go to Site 18</a>
      <a href="Site 18 - Form POST and Display/explanation.php">📖 Explanation</a>
      <a href="Site 18 - Form POST and Display/Task 18.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 19 - Insert Query with Forms</h2>
      <p>Extend the Site 18 POST flow by inserting form data into the database with prepared statements. Demo uses Employees, pupil task uses Students.</p>
      <p><strong>Topics:</strong> POST form processing, PDO prepared statements, INSERT queries, server-side validation, error handling, lastInsertId</p>
      <a href="Site 19 - Insert Query with Forms/index.php">Go to Site 19</a>
      <a href="Site 19 - Insert Query with Forms/explanation.php">📖 Explanation</a>
      <a href="Site 19 - Insert Query with Forms/Task 19.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 20 - Update Query with Forms</h2>
      <p>Continue from Site 19 by editing existing rows with UPDATE queries. Demo uses Employees, pupil task uses Students.</p>
      <p><strong>Topics:</strong> POST form processing, PDO prepared statements, UPDATE queries, server-side validation, rowCount feedback</p>
      <a href="Site 20 - Update Query with Forms/index.php">Go to Site 20</a>
      <a href="Site 20 - Update Query with Forms/explanation.php">📖 Explanation</a>
      <a href="Site 20 - Update Query with Forms/Task 20.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 21 - Delete Query with Forms</h2>
      <p>Continue from Site 20 by removing rows with DELETE queries. Demo uses Employees, pupil task uses Students.</p>
      <p><strong>Topics:</strong> POST form processing, PDO prepared statements, DELETE queries, WHERE safety, rowCount feedback</p>
      <a href="Site 21 - Delete Query with Forms/index.php">Go to Site 21</a>
      <a href="Site 21 - Delete Query with Forms/explanation.php">📖 Explanation</a>
      <a href="Site 21 - Delete Query with Forms/Task 21.md">View Task Sheet</a>
    </div>

    <div class="lesson-card">
      <h2>Site 22 - Session Variables</h2>
      <p>Learn how to keep values across multiple pages using session storage on the server.</p>
      <p><strong>Topics:</strong> session_start, $_SESSION, session_destroy, multi-page state, secure output</p>
      <a href="Site 22 - Session Variables/index.php">Go to Site 22</a>
      <a href="Site 22 - Session Variables/explanation.php">📖 Explanation</a>
    </div>

    <div class="lesson-card">
      <h2>Site 23 - Capstone Demo</h2>
      <p>A complete mini-site that combines form handling, POST processing, validation, sessions, arrays, loops, and responsive CSS.</p>
      <p><strong>Topics:</strong> end-to-end workflow, server-side validation, session dashboards, media queries, full commentary</p>
      <a href="Site 23 - Capstone Demo/index.php">Go to Site 23</a>
      <a href="Site 23 - Capstone Demo/explanation.php">📖 Explanation</a>
      <a href="Site 23 - Capstone Demo/Task 23.md">View Task Sheet</a>
    </div>

  </div>

  <div class="info-box">
    <p><strong>Quick Start:</strong> To run any lesson site locally, use the command in the lesson's Task sheet. For example:</p>
    <code>/usr/bin/php -S 0.0.0.0:8000 -t "Site 1 - Hello World"</code>
  </div>
</body>
</html>
