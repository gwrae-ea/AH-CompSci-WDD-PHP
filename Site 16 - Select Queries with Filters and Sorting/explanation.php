<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 16</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Filtering and Sorting SELECT Queries</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use a shared PDO connection to run <code>SELECT</code> queries, first through an Employees demo and then through a Students-based pupil task that applies the same SQL conditions.</p>

    <div class="code-note">
      <strong>Lesson structure:</strong>
      <p>The demonstration page uses the <code>Employees</code> table, while the pupil task is designed around the <code>Students</code> table.</p>
    </div>

    <div class="code-note">
      <strong>Core query pattern:</strong>
      <pre>$pdo = getDatabaseConnection();
$statement = $pdo->query('SELECT * FROM Employees');
$employees = $statement->fetchAll();</pre>
    </div>

    <h2>Starting Point</h2>
    <div class="grid">
      <article class="card">
        <h3>SELECT *</h3>
        <p>Returns every column stored in each Employees row.</p>
      </article>
      <article class="card">
        <h3>FROM Employees</h3>
        <p>Targets the Employees table in the selected database.</p>
      </article>
      <article class="card">
        <h3>fetchAll()</h3>
        <p>Collects the full result set into a PHP array for display.</p>
      </article>
    </div>

    <h2>Query Extensions To Practice</h2>
    <div class="code-note">
      <strong>Replace example column names with real columns from your table:</strong>
      <pre>SELECT * FROM Employees WHERE department = 'Sales';
SELECT * FROM Employees ORDER BY last_name ASC;
SELECT * FROM Employees WHERE department = 'Sales' AND status = 'Active';
SELECT * FROM Employees WHERE department = 'Sales' OR department = 'Marketing';
SELECT * FROM Employees WHERE NOT status = 'Inactive';
SELECT * FROM Employees WHERE last_name LIKE 'Sm%';</pre>
    </div>

    <div class="grid">
      <article class="card">
        <h3>WHERE</h3>
        <p>Filters rows so only records matching a condition are returned.</p>
      </article>
      <article class="card">
        <h3>ORDER BY</h3>
        <p>Sorts rows alphabetically or numerically in ascending or descending order.</p>
      </article>
      <article class="card">
        <h3>AND</h3>
        <p>Requires two conditions to be true for a row to be included.</p>
      </article>
      <article class="card">
        <h3>OR</h3>
        <p>Returns rows when at least one of two conditions is true.</p>
      </article>
      <article class="card">
        <h3>NOT</h3>
        <p>Excludes rows that match a condition you do not want.</p>
      </article>
      <article class="card">
        <h3>LIKE</h3>
        <p>Matches text patterns using <code>%</code> as a wildcard.</p>
      </article>
    </div>

    <h2>Suggested Task Sequence</h2>
    <ol>
      <li>Run the full-table query first to inspect which columns are available.</li>
      <li>Choose one text or number column for a basic <code>WHERE</code> filter.</li>
      <li>Add an <code>ORDER BY</code> clause to sort the results.</li>
      <li>Combine two filters with <code>AND</code>.</li>
      <li>Broaden a search with <code>OR</code>.</li>
      <li>Exclude rows with <code>NOT</code>.</li>
      <li>Use <code>LIKE</code> to search for partial text matches.</li>
    </ol>

    <h2>Important Notes</h2>
    <ul>
      <li>The table must already exist in your database.</li>
      <li>Column names may differ between databases, so the display code reads headers dynamically.</li>
      <li>The example column names above are placeholders; adapt them to match your Employees schema.</li>
      <li>If the table is empty, the page should show a clear message instead of failing.</li>
      <li>If the query fails, the exception message helps identify missing tables or login problems.</li>
    </ul>

    <p><a href="index.php">Back to Site 16 index</a></p>
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
          <tr><td>FR5</td><td>have a database table to store employee or student records used by SELECT queries</td></tr>
          <tr><td>FR6</td><td>connect to the database to execute filtered and sorted SELECT queries</td></tr>
          <tr><td>FR7</td><td>generate an interface to receive query filter values and display formatted table output</td></tr>
        </tbody>
      </table>

      <h2>Additional Functional Requirements</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR8</td><td>validate text filter keyboard input to allow safe characters only</td></tr>
          <tr><td>FR9</td><td>validate sort/filter keyboard input against allowed options before query execution</td></tr>
          <tr><td>FR10</td><td>display a formatted empty-state message when no matching rows are returned</td></tr>
          <tr><td>FR11</td><td>show clear query error feedback without exposing sensitive database details</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
