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
    <!-- FR_STANDARD_START -->
    <section>
      <h2>Functional Requirements (Standard Format)</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR1</td><td>a website with multiple pages, one of which has form elements (action, method, and name) to capture delete criteria</td></tr>
          <tr><td>FR2</td><td>N/A</td></tr>
          <tr><td>FR3</td><td>use PHP to assign form variables and process form data to delete selected records safely</td></tr>
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
          <tr><td>FR5</td><td>have a database table to store records that can be removed</td></tr>
          <tr><td>FR6</td><td>connect to the database to execute a DELETE query from validated form input</td></tr>
          <tr><td>FR7</td><td>generate an interface to receive query input values and display formatted delete result output</td></tr>
        </tbody>
      </table>

      <h2>Additional Functional Requirements</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR8</td><td>validate required keyboard identifier input before delete execution</td></tr>
          <tr><td>FR9</td><td>validate keyboard confirmation input to reduce accidental deletion</td></tr>
          <tr><td>FR10</td><td>display affected-row feedback for delete operations</td></tr>
          <tr><td>FR11</td><td>show a warning and require explicit confirmation before destructive actions</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
