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
    <!-- FR_STANDARD_START -->
    <section>
      <h2>Functional Requirements (Standard Format)</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR1</td><td>a website with multiple pages, one of which has form elements (action, method, and name) to capture insert values</td></tr>
          <tr><td>FR2</td><td>N/A</td></tr>
          <tr><td>FR3</td><td>use PHP to assign form variables and process form data to insert a new record</td></tr>
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
          <tr><td>FR5</td><td>have a database table to store inserted employee or student records</td></tr>
          <tr><td>FR6</td><td>connect to the database to execute an INSERT query from validated form input</td></tr>
          <tr><td>FR7</td><td>generate an interface to receive query input values and display formatted insert result output</td></tr>
        </tbody>
      </table>

      <h2>Additional Functional Requirements</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR8</td><td>validate required keyboard text inputs before database insert</td></tr>
          <tr><td>FR9</td><td>validate keyboard numeric/date/email fields for type and range before insert</td></tr>
          <tr><td>FR10</td><td>display success/failure status for insert operations</td></tr>
          <tr><td>FR11</td><td>preserve and repopulate submitted values when validation fails</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
