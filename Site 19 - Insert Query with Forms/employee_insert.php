<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$name = trim($_POST['name'] ?? '');
$salary_raw = trim((string) ($_POST['salary'] ?? ''));
$department = trim($_POST['department'] ?? '');
$position = trim($_POST['position'] ?? '');
$hire_date = trim($_POST['hireDate'] ?? '');

$errors = array();
$inserted_id = null;
$db_error = '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $errors[] = 'Invalid request method. Submit the form from page 1.';
}

if ($name === '' || strlen($name) < 2 || strlen($name) > 20) {
    $errors[] = 'Name is required and must be 2-20 characters.';
}

if ($department === '' || strlen($department) < 2 || strlen($department) > 20) {
    $errors[] = 'Department is required and must be 2-20 characters.';
}

if ($position === '' || strlen($position) < 2 || strlen($position) > 20) {
    $errors[] = 'Position is required and must be 2-20 characters.';
}

if ($salary_raw === '' || !is_numeric($salary_raw) || (float) $salary_raw < 0) {
    $errors[] = 'Salary is required and must be a valid number of 0 or more.';
}

$date_object = DateTime::createFromFormat('Y-m-d', $hire_date);
if ($hire_date === '' || !$date_object || $date_object->format('Y-m-d') !== $hire_date) {
    $errors[] = 'Hire Date is required and must be a valid date.';
}

if ($errors === array()) {
    try {
        $pdo = getDatabaseConnection();

        $sql = 'INSERT INTO Employees (name, salary, department, position, hireDate) VALUES (:name, :salary, :department, :position, :hireDate)';
        $statement = $pdo->prepare($sql);

        $statement->execute(array(
            ':name' => $name,
            ':salary' => (float) $salary_raw,
            ':department' => $department,
            ':position' => $position,
            ':hireDate' => $hire_date,
        ));

        $inserted_id = (int) $pdo->lastInsertId();
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
  <title>Employees Insert Result - Site 19</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 2: Employees Insert Result</h1>
    <p>POST values validated and processed with a prepared INSERT query.</p>
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
    <?php else: ?>
      <div class="status-success">
        <strong>Insert Success:</strong> A new employee row was added.
      </div>

      <div class="results-box">
        <p><strong>Inserted ID:</strong> <?php echo $inserted_id; ?></p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Salary:</strong> <?php echo htmlspecialchars($salary_raw); ?></p>
        <p><strong>Department:</strong> <?php echo htmlspecialchars($department); ?></p>
        <p><strong>Position:</strong> <?php echo htmlspecialchars($position); ?></p>
        <p><strong>Hire Date:</strong> <?php echo htmlspecialchars($hire_date); ?></p>
      </div>

      <div class="code-note">
        <p><strong>SQL used:</strong></p>
        <pre>INSERT INTO Employees (name, salary, department, position, hireDate)
VALUES (:name, :salary, :department, :position, :hireDate)</pre>
      </div>
    <?php endif; ?>

    <p><a href="employee_form.php">Back to the Employees form</a></p>
    <p><a href="index.php">Back to Site 19 index</a></p>
  </main>
</body>
</html>
