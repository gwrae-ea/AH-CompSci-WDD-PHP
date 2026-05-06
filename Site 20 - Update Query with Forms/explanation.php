<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 20</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Form POST with UPDATE Queries</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use a POST form to edit an existing database row using an UPDATE query with PDO prepared statements.</p>

    <div class="code-note">
      <strong>Lesson structure:</strong>
      <p>The demonstration page updates the <code>Employees</code> table. The pupil task applies the same pattern to the <code>Students</code> table.</p>
    </div>

    <h2>Data Flow</h2>
    <div class="grid">
      <article class="card">
        <h3>Page 1: Form Input</h3>
        <p>User enters the row ID and replacement values, then submits with <code>POST</code>.</p>
      </article>
      <article class="card">
        <h3>Page 2: Validation</h3>
        <p>PHP validates ID, text lengths, numbers, and dates before any SQL runs.</p>
      </article>
      <article class="card">
        <h3>UPDATE Execution</h3>
        <p>A prepared UPDATE query modifies matching rows safely.</p>
      </article>
    </div>

    <div class="code-note">
      <strong>Prepared UPDATE pattern:</strong>
      <pre>$sql = 'UPDATE Employees
SET salary = :salary, department = :department, position = :position
WHERE id = :id';

$statement = $pdo->prepare($sql);
$statement->execute(array(
  ':salary' => $salary,
  ':department' => $department,
  ':position' => $position,
  ':id' => $id,
));</pre>
    </div>

    <h2>Key Checks Before UPDATE</h2>
    <ul>
      <li>ID must be valid and positive.</li>
      <li>Required fields must not be empty.</li>
      <li>Numeric/date fields must match expected formats.</li>
      <li>Show a clear message if no rows were updated (ID may not exist).</li>
    </ul>

    <h2>Suggested Task Sequence</h2>
    <ol>
      <li>Run the Employees demo update.</li>
      <li>Try a valid ID and confirm rowCount feedback.</li>
      <li>Try a non-existent ID and inspect the no-update message.</li>
      <li>Build the Students update form in yourtask.php.</li>
      <li>Validate fields and execute a Students UPDATE query.</li>
    </ol>

    <p><a href="index.php">Back to Site 20 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
