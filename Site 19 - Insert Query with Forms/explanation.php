<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 19</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Form POST with INSERT Queries</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Start with the Site 18 POST flow, then insert submitted values into a database table using PDO prepared statements.</p>

    <div class="code-note">
      <strong>Lesson structure:</strong>
      <p>The demonstration page inserts into the <code>Employees</code> table. The pupil task applies the same technique to the <code>Students</code> table.</p>
    </div>

    <h2>Data Flow</h2>
    <div class="grid">
      <article class="card">
        <h3>Page 1: Form Input</h3>
        <p>User fills in fields and submits via <code>method="POST"</code>.</p>
      </article>
      <article class="card">
        <h3>Page 2: Validation</h3>
        <p>PHP receives <code>$_POST</code> values and validates required fields and data types.</p>
      </article>
      <article class="card">
        <h3>Database Insert</h3>
        <p>Prepared statements safely insert values into the table.</p>
      </article>
    </div>

    <div class="code-note">
      <strong>Prepared INSERT pattern:</strong>
      <pre>$sql = 'INSERT INTO Employees (name, salary, department, position, hireDate)
VALUES (:name, :salary, :department, :position, :hireDate)';

$statement = $pdo->prepare($sql);
$statement->execute(array(
  ':name' => $name,
  ':salary' => $salary,
  ':department' => $department,
  ':position' => $position,
  ':hireDate' => $hire_date,
));</pre>
    </div>

    <h2>Why Prepared Statements Matter</h2>
    <ul>
      <li>They separate SQL code from user data.</li>
      <li>They reduce SQL injection risk.</li>
      <li>They make values easier to bind and validate.</li>
      <li>They are the standard PDO approach for write queries.</li>
    </ul>

    <h2>Validation Before INSERT</h2>
    <div class="grid">
      <article class="card">
        <h3>Required Fields</h3>
        <p>Check each required input is present and not just whitespace.</p>
      </article>
      <article class="card">
        <h3>Type Checks</h3>
        <p>Ensure numeric values are valid numbers and dates are valid dates.</p>
      </article>
      <article class="card">
        <h3>Output Safety</h3>
        <p>Use <code>htmlspecialchars()</code> when echoing submitted values.</p>
      </article>
    </div>

    <h2>Suggested Task Sequence</h2>
    <ol>
      <li>Run the Employees demo and confirm one insert works.</li>
      <li>Open the Students task workspace.</li>
      <li>Build or adapt a Students form with required fields.</li>
      <li>Validate fields server-side before running INSERT.</li>
      <li>Use a prepared statement with named placeholders.</li>
      <li>Show success, inserted ID, and meaningful error handling.</li>
    </ol>

    <p><a href="index.php">Back to Site 19 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
