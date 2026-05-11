<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 15</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Testing Database Connection</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use a safe test flow to verify that PHP can connect to MySQL and run a basic query.</p>

    <div class="code-note">
      <strong>Base pattern from db_test.php:</strong>
      <pre>try {
  $pdo = getDatabaseConnection();
  $version = $pdo->query('SELECT VERSION() AS version')->fetch();
  echo "Database connection successful";
} catch (Throwable $exception) {
  echo "Connection failed: " . $exception->getMessage();
}</pre>
    </div>

    <h2>What to Test</h2>
    <div class="grid">
      <article class="card">
        <h3>Test 1: Success Path</h3>
        <p>Connection opens and MySQL version is returned.</p>
      </article>
      <article class="card">
        <h3>Test 2: Failure Path</h3>
        <p>When credentials are wrong or DB is unavailable, a clear error appears.</p>
      </article>
      <article class="card">
        <h3>Test 3: Evidence</h3>
        <p>Capture output and explain expected vs actual result.</p>
      </article>
    </div>

    <p><a href="index.php">Back to Site 15 index</a></p>
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
          <tr><td>FR5</td><td>N/A</td></tr>
          <tr><td>FR6</td><td>connect to the database to execute a test query (such as SELECT VERSION()) and confirm connectivity</td></tr>
          <tr><td>FR7</td><td>generate an interface to display formatted connection and test-query output</td></tr>
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
