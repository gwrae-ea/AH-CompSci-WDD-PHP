<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$errorMessage = '';
$employees = array();
$columns = array();

try {
    $pdo = getDatabaseConnection();
    $statement = $pdo->query('SELECT * FROM Employees');
    $employees = $statement->fetchAll();

    if ($employees !== array()) {
        $columns = array_keys($employees[0]);
    }
} catch (Throwable $exception) {
    $errorMessage = $exception->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select All Demo - Site 16</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>SELECT * Demo</h1>
    <p>Reads all available employee data from the Employees table.</p>
  </header>

  <main>
    <?php if ($errorMessage !== ''): ?>
      <div class="status-error">
        <strong>Error:</strong> <?php echo htmlspecialchars($errorMessage); ?>
      </div>
    <?php elseif ($employees === array()): ?>
      <div class="status-empty">
        <strong>No records found:</strong> The Employees table exists, but it currently has no rows.
      </div>
    <?php else: ?>
      <div class="status-success">
        <strong>Success:</strong> Retrieved <?php echo count($employees); ?> employee record(s).
      </div>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <?php foreach ($columns as $column): ?>
                <th><?php echo htmlspecialchars((string) $column); ?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($employees as $employee): ?>
              <tr>
                <?php foreach ($columns as $column): ?>
                  <td><?php echo htmlspecialchars((string) ($employee[$column] ?? '')); ?></td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>

    <div class="code-note">
      <p><strong>SQL used:</strong> <code>SELECT * FROM Employees</code></p>
      <p><strong>Why this works:</strong> the page builds table headers from the first row, so it can display any Employees schema.</p>
    </div>

    <p><a href="index.php">Back to Site 16 index</a></p>
  </main>
</body>
</html>