<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$id_raw = trim((string) ($_POST['id'] ?? ''));
$errors = array();
$db_error = '';
$rows_deleted = null;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $errors[] = 'Invalid request method. Submit the form from page 1.';
}

if ($id_raw === '' || !ctype_digit($id_raw) || (int) $id_raw < 1) {
    $errors[] = 'Employee ID must be a whole number of 1 or more.';
}

if ($errors === array()) {
    try {
        $pdo = getDatabaseConnection();
        $sql = 'DELETE FROM Employees WHERE id = :id';
        $statement = $pdo->prepare($sql);
        $statement->execute(array(':id' => (int) $id_raw));
        $rows_deleted = $statement->rowCount();
    } catch (Throwable $exception) {
        $db_error = $exception->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees Delete Result - Site 21</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 2: Employees Delete Result</h1>
    <p>POST value validated and processed with a prepared DELETE query.</p>
  </header>

  <main>
    <?php if ($errors !== array()): ?>
      <div class="status-error">
        <strong>Validation Error:</strong>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif ($db_error !== ''): ?>
      <div class="status-error">
        <strong>Database Error:</strong> <?php echo htmlspecialchars($db_error); ?>
      </div>
    <?php elseif ($rows_deleted === 0): ?>
      <div class="status-empty">
        <strong>No rows deleted:</strong> Employee ID <?php echo htmlspecialchars($id_raw); ?> was not found.
      </div>
    <?php else: ?>
      <div class="status-success">
        <strong>Delete Success:</strong> <?php echo $rows_deleted; ?> row(s) deleted.
      </div>

      <div class="results-box">
        <p><strong>Deleted Employee ID:</strong> <?php echo htmlspecialchars($id_raw); ?></p>
      </div>

      <div class="code-note">
        <p><strong>SQL used:</strong></p>
        <pre>DELETE FROM Employees WHERE id = :id</pre>
      </div>
    <?php endif; ?>

    <p><a href="employee_form.php">Back to the Employees delete form</a></p>
    <p><a href="index.php">Back to Site 21 index</a></p>
  </main>
</body>
</html>
