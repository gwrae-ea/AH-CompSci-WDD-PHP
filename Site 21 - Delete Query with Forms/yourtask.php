<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$student_id_raw = trim((string) ($_POST['student_id'] ?? ''));
$errors = array();
$db_error = '';
$rows_deleted = null;
$attempted_delete = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($attempted_delete) {
    if ($student_id_raw === '' || !ctype_digit($student_id_raw) || (int) $student_id_raw < 1) {
        $errors[] = 'Student ID is required and must be a whole number of 1 or more.';
    }

    if ($errors === array()) {
        try {
            $pdo = getDatabaseConnection();
            $sql = 'DELETE FROM Students WHERE student_id = :student_id';

            $statement = $pdo->prepare($sql);
            $statement->execute(array(
                ':student_id' => (int) $student_id_raw,
            ));

            $rows_deleted = $statement->rowCount();
        } catch (Throwable $exception) {
            $db_error = $exception->getMessage();
        }
    }
}

$tasks = array(
    'Use POST form submission' => $attempted_delete,
    'Collect student_id from $_POST' => $attempted_delete,
    'Validate Student ID server-side' => $attempted_delete && $errors === array(),
    'Run prepared DELETE on Students' => $rows_deleted !== null,
    'Show success/no-match/error feedback clearly' => $attempted_delete,
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 21</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
    <p>Pupil task: apply the Employees delete pattern to the Students table.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Build a form that submits a student ID via POST.</li>
      <li>Receive student ID using <code>$_POST</code>.</li>
      <li>Validate that the ID is a positive whole number.</li>
      <li>Use a prepared <code>DELETE</code> query on <code>Students</code>.</li>
      <li>Display clear success, no-match, or error messages.</li>
    </ol>

    <div class="code-note">
      <strong>Important:</strong> Demo pages use <code>Employees</code>. This task must use <code>Students</code>.
    </div>

    <form method="POST" action="yourtask.php" class="form-container">
      <fieldset>
        <legend>Students Delete Form</legend>

        <div class="form-group">
          <label for="student_id">Student ID to Delete:</label>
          <input type="number" id="student_id" name="student_id" required min="1" value="<?php echo htmlspecialchars($student_id_raw); ?>" />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Delete Student</button>
    </form>

    <?php if ($attempted_delete && $errors !== array()): ?>
      <div class="status-error">
        <strong>Validation Error:</strong>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif ($attempted_delete && $db_error !== ''): ?>
      <div class="status-error">
        <strong>Database Error:</strong> <?php echo htmlspecialchars($db_error); ?>
      </div>
    <?php elseif ($attempted_delete && $rows_deleted === 0): ?>
      <div class="status-empty">
        <strong>No rows deleted:</strong> Student ID <?php echo htmlspecialchars($student_id_raw); ?> was not found.
      </div>
    <?php elseif ($rows_deleted !== null): ?>
      <div class="status-success">
        <strong>Delete Success:</strong> <?php echo $rows_deleted; ?> student row(s) deleted.
      </div>
    <?php else: ?>
      <div class="status-empty">
        <strong>No submission yet:</strong> Fill out the form to test your DELETE logic.
      </div>
    <?php endif; ?>

    <div class="code-note">
      <strong>Task Checklist</strong>
      <ul>
        <?php foreach ($tasks as $task => $result): ?>
          <li><?php echo ($result ? 'PASS: ' : 'TODO: '); ?><?php echo htmlspecialchars($task); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <p><a href="index.php">Back to Site 21 index</a></p>
  </main>
</body>
</html>
