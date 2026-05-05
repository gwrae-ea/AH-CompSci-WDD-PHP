<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$message = '';
$isSuccess = false;

try {
    $pdo = getDatabaseConnection();
    $version = $pdo->query('SELECT VERSION() AS version')->fetch();

    $message = 'Database connection successful. MySQL version: ' . ($version['version'] ?? 'Unknown');
    $isSuccess = true;
} catch (Throwable $exception) {
    $message = 'Connection failed: ' . $exception->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connection Demo - Site 15</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Connection Demo</h1>
    <p>Based directly on the root db_test.php logic.</p>
  </header>

  <main>
    <?php if ($isSuccess): ?>
      <div class="status-success">
        <strong>Success:</strong> <?php echo htmlspecialchars($message); ?>
      </div>
    <?php else: ?>
      <div class="status-error">
        <strong>Error:</strong> <?php echo htmlspecialchars($message); ?>
      </div>
    <?php endif; ?>

    <div class="code-note">
      <p><strong>Expected output on success:</strong> connection success + version string.</p>
      <p><strong>Expected output on failure:</strong> caught exception message.</p>
    </div>

    <p><a href="index.php">Back to Site 15 index</a></p>
  </main>
</body>
</html>
