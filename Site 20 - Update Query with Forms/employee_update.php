<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$id_raw = trim((string) ($_POST['id'] ?? ''));
$salary_raw = trim((string) ($_POST['salary'] ?? ''));
$department = trim($_POST['department'] ?? '');
$position = trim($_POST['position'] ?? '');
$hire_date = trim($_POST['hireDate'] ?? '');

$errors = array();
$db_error = '';
$rows_updated = null;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $errors[] = 'Invalid request method. Submit the form from page 1.';
}

if ($id_raw === '' || !ctype_digit($id_raw) || (int) $id_raw < 1) {
    $errors[] = 'Employee ID must be a whole number of 1 or more.';
}

if ($salary_raw === '' || !is_numeric($salary_raw) || (float) $salary_raw < 0) {
    $errors[] = 'Salary is required and must be a valid number of 0 or more.';
}

if ($department === '' || strlen($department) < 2 || strlen($department) > 20) {
    $errors[] = 'Department is required and must be 2-20 characters.';
}

if ($position === '' || strlen($position) < 2 || strlen($position) > 20) {
    $errors[] = 'Position is required and must be 2-20 characters.';
}

$date_object = DateTime::createFromFormat('Y-m-d', $hire_date);
if ($hire_date === '' || !$date_object || $date_object->format('Y-m-d') !== $hire_date) {
    $errors[] = 'Hire Date is required and must be a valid date.';
}

if ($errors === array()) {
    try {
        $pdo = getDatabaseConnection();

        $sql = 'UPDATE Employees SET salary = :salary, department = :department, position = :position, hireDate = :hireDate WHERE id = :id';
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':salary' => (float) $salary_raw,
            ':department' => $department,
            ':position' => $position,
            ':hireDate' => $hire_date,
            ':id' => (int) $id_raw,
        ));

        $rows_updated = $statement->rowCount();
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
  <title>Employees Update Result - Site 20</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 2: Employees Update Result</h1>
    <p>POST values validated and processed with a prepared UPDATE query.</p>
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
    <?php elseif ($rows_updated === 0): ?>
      <div class="status-empty">
        <strong>No rows updated:</strong> Check that Employee ID <?php echo htmlspecialchars($id_raw); ?> exists and values are actually different.
      </div>
    <?php else: ?>
      <div class="status-success">
        <strong>Update Success:</strong> <?php echo $rows_updated; ?> row(s) updated.
      </div>

      <div class="results-box">
        <p><strong>Employee ID:</strong> <?php echo htmlspecialchars($id_raw); ?></p>
        <p><strong>New Salary:</strong> <?php echo htmlspecialchars($salary_raw); ?></p>
        <p><strong>New Department:</strong> <?php echo htmlspecialchars($department); ?></p>
        <p><strong>New Position:</strong> <?php echo htmlspecialchars($position); ?></p>
        <p><strong>New Hire Date:</strong> <?php echo htmlspecialchars($hire_date); ?></p>
      </div>

      <div class="code-note">
        <p><strong>SQL used:</strong></p>
        <pre>UPDATE Employees
SET salary = :salary, department = :department, position = :position, hireDate = :hireDate
WHERE id = :id</pre>
      </div>
    <?php endif; ?>

    <p><a href="employee_form.php">Back to the Employees update form</a></p>
    <p><a href="index.php">Back to Site 20 index</a></p>
  </main>
</body>
</html>
