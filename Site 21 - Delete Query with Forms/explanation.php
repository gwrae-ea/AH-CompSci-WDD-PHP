<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 21</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Form POST with DELETE Queries</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use a POST form to remove an existing row safely with a prepared DELETE query.</p>

    <div class="code-note">
      <strong>Lesson structure:</strong>
      <p>The demonstration page deletes from <code>Employees</code>. The pupil task applies the same pattern to <code>Students</code>.</p>
    </div>

    <h2>Data Flow</h2>
    <div class="grid">
      <article class="card">
        <h3>Page 1: Form Input</h3>
        <p>User enters the row ID to delete and submits with <code>POST</code>.</p>
      </article>
      <article class="card">
        <h3>Page 2: Validation</h3>
        <p>PHP validates that the ID is a positive whole number.</p>
      </article>
      <article class="card">
        <h3>DELETE Execution</h3>
        <p>A prepared DELETE query removes matching rows safely.</p>
      </article>
    </div>

    <div class="code-note">
      <strong>Prepared DELETE pattern:</strong>
      <pre>$sql = 'DELETE FROM Employees WHERE id = :id';
$statement = $pdo->prepare($sql);
$statement->execute(array(':id' => $id));</pre>
    </div>

    <h2>Important Safety Notes</h2>
    <ul>
      <li>Always include a <code>WHERE</code> clause in DELETE queries.</li>
      <li>Validate IDs before running SQL.</li>
      <li>Use prepared statements with placeholders.</li>
      <li>Show <code>rowCount()</code> so users know whether a row was actually deleted.</li>
    </ul>

    <p><a href="index.php">Back to Site 21 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
