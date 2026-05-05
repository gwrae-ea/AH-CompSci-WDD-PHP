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
</body>
</html>
