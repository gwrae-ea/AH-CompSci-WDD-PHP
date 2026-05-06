<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$errorMessage = '';
$summary = array();
$students = array();
$columns = array();

try {
    $pdo = getDatabaseConnection();
    $summary[] = 'PASS: Database connection opened.';

    $statement = $pdo->query('SELECT * FROM Students');
    $summary[] = 'PASS: SELECT * query executed.';

    $students = $statement->fetchAll();
    $summary[] = 'PASS: Retrieved ' . count($students) . ' row(s) from Students.';

    if ($students !== array()) {
      $columns = array_keys($students[0]);
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
    <p>Keep the demo on Employees, but complete your task using the Students table and student data.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Connect to the database using the shared helper.</li>
      <li>Run <code>SELECT * FROM Students</code> first.</li>
      <li>Write one follow-up task for each of <code>WHERE</code>, <code>ORDER BY</code>, <code>AND</code>, <code>OR</code>, <code>NOT</code>, and <code>LIKE</code>.</li>
      <li>Display the returned rows in a readable HTML table.</li>
      <li>Show a clear message when zero rows are returned or an error occurs.</li>
    </ol>

    <div class="code-note">
      <strong>Important:</strong> The demonstration page still uses the <code>Employees</code> table. Your pupil task should use the <code>Students</code> table instead.
    </div>

    <div class="code-note">
      <strong>Specific query tasks</strong>
      <ol>
        <li><strong>WHERE:</strong> Return students from one grade level or one enrollment status.</li>
        <li><strong>ORDER BY:</strong> Sort students by surname, grade level, or enrollment date.</li>
        <li><strong>AND:</strong> Return students who match two conditions together.</li>
        <li><strong>OR:</strong> Return students who match either of two grade levels or statuses.</li>
        <li><strong>NOT:</strong> Exclude one grade level, gender, or status from the results.</li>
        <li><strong>LIKE:</strong> Search for student names that begin with or contain a chosen text pattern.</li>
      </ol>
    </div>

    <div class="code-note">
      <strong>Starter examples</strong>
      <pre>SELECT * FROM Students WHERE grade_level = 8;
SELECT * FROM Students ORDER BY last_name ASC;
SELECT * FROM Students WHERE grade_level = 8 AND enrollment_status = 'Active';
SELECT * FROM Students WHERE grade_level = 8 OR grade_level = 9;
SELECT * FROM Students WHERE NOT grade_level = 12;
SELECT * FROM Students WHERE last_name LIKE 'M%';</pre>
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

    <?php if ($errorMessage === '' && $students !== array()): ?>
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
            <?php foreach ($students as $student): ?>
              <tr>
                <?php foreach ($columns as $column): ?>
                  <td><?php echo htmlspecialchars((string) ($student[$column] ?? '')); ?></td>
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