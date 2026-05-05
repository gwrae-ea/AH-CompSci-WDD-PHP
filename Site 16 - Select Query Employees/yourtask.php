<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$errorMessage = '';
$summary = array();
$employees = array();
$columns = array();

try {
    $pdo = getDatabaseConnection();
    $summary[] = 'PASS: Database connection opened.';

    $statement = $pdo->query('SELECT * FROM Employees');
    $summary[] = 'PASS: SELECT * query executed.';

    $employees = $statement->fetchAll();
    $summary[] = 'PASS: Retrieved ' . count($employees) . ' row(s) from Employees.';

    if ($employees !== array()) {
        $columns = array_keys($employees[0]);
        $summary[] = 'PASS: Detected columns - ' . implode(', ', $columns);
    } else {
        $summary[] = 'INFO: No rows returned, so there are no headers to display yet.';
    }
} catch (Throwable $exception) {
    $errorMessage = $exception->getMessage();
    $summary[] = 'FAIL: Query could not be completed - ' . $errorMessage;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 16</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
    <p>Run the base Employees query, then plan filtered versions using WHERE, ORDER BY, AND, OR, NOT, and LIKE.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Connect to the database using the shared helper.</li>
      <li>Run <code>SELECT * FROM Employees</code> first.</li>
      <li>Write one follow-up task for each of <code>WHERE</code>, <code>ORDER BY</code>, <code>AND</code>, <code>OR</code>, <code>NOT</code>, and <code>LIKE</code>.</li>
      <li>Display the returned rows in a readable HTML table.</li>
      <li>Show a clear message when zero rows are returned or an error occurs.</li>
    </ol>

    <div class="code-note">
      <strong>Specific query tasks</strong>
      <ol>
        <li><strong>WHERE:</strong> Return employees from one department or office.</li>
        <li><strong>ORDER BY:</strong> Sort employees by surname, hire date, salary, or employee ID.</li>
        <li><strong>AND:</strong> Return employees who match two conditions together.</li>
        <li><strong>OR:</strong> Return employees who match either of two departments, roles, or locations.</li>
        <li><strong>NOT:</strong> Exclude one status, role, or department from the results.</li>
        <li><strong>LIKE:</strong> Search for names that begin with or contain a chosen text pattern.</li>
      </ol>
    </div>

    <div class="code-note">
      <strong>Starter examples</strong>
      <pre>SELECT * FROM Employees WHERE department = 'Sales';
SELECT * FROM Employees ORDER BY last_name ASC;
SELECT * FROM Employees WHERE department = 'Sales' AND status = 'Active';
SELECT * FROM Employees WHERE department = 'Sales' OR department = 'Marketing';
SELECT * FROM Employees WHERE NOT status = 'Inactive';
SELECT * FROM Employees WHERE last_name LIKE 'Sm%';</pre>
    </div>

    <?php if ($errorMessage === ''): ?>
      <div class="status-success"><strong>Overall Result:</strong> Query ran without throwing an exception.</div>
    <?php else: ?>
      <div class="status-error"><strong>Overall Result:</strong> The query failed and needs investigation.</div>
    <?php endif; ?>

    <div class="code-note">
      <strong>Query Output</strong>
      <ul>
        <?php foreach ($summary as $line): ?>
          <li><?php echo htmlspecialchars($line); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <?php if ($errorMessage === '' && $employees !== array()): ?>
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

    <p class="no-print"><a href="index.php">Back to Site 16 index</a></p>
  </main>
</body>
</html>