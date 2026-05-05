<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$messages = array();
$allPassed = true;

try {
    $pdo = getDatabaseConnection();
    $messages[] = 'PASS: Connection object created.';

    $version = $pdo->query('SELECT VERSION() AS version')->fetch();
    $messages[] = 'PASS: Version query executed. Version: ' . ($version['version'] ?? 'Unknown');

    $dbNameResult = $pdo->query('SELECT DATABASE() AS db_name')->fetch();
    $messages[] = 'PASS: Current database: ' . ($dbNameResult['db_name'] ?? 'Unknown');
} catch (Throwable $exception) {
    $allPassed = false;
    $messages[] = 'FAIL: Connection or query failed - ' . $exception->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 15</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
    <p>Run and extend this test suite to prove database connectivity.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Run a connection test.</li>
      <li>Run at least one SQL query successfully.</li>
      <li>Display clear PASS/FAIL results.</li>
      <li>Add one additional test of your own.</li>
    </ol>

    <?php if ($allPassed): ?>
      <div class="status-success"><strong>Overall Result:</strong> Current tests passed.</div>
    <?php else: ?>
      <div class="status-error"><strong>Overall Result:</strong> One or more tests failed.</div>
    <?php endif; ?>

    <div class="code-note">
      <strong>Test Output</strong>
      <ul>
        <?php foreach ($messages as $line): ?>
          <li><?php echo htmlspecialchars($line); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <p class="no-print"><a href="index.php">Back to Site 15 index</a></p>
  </main>
</body>
</html>
