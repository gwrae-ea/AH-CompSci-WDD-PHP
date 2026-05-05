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
    <h1>Explanation: Filtering and Sorting Employee Queries</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use a shared PDO connection to run <code>SELECT</code> queries against the <code>Employees</code> table, then narrow or reorder the results with SQL conditions.</p>

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
</body>
</html>