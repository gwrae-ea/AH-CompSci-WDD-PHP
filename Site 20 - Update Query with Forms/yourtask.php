<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$student_id_raw = trim((string) ($_POST['student_id'] ?? ''));
$first_name = trim($_POST['first_name'] ?? '');
$last_name = trim($_POST['last_name'] ?? '');
$grade_level_raw = trim((string) ($_POST['grade_level'] ?? ''));
$enrollment_status = trim($_POST['enrollment_status'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone_number = trim($_POST['phone_number'] ?? '');

$errors = array();
$db_error = '';
$rows_updated = null;
$attempted_update = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($attempted_update) {
    if ($student_id_raw === '' || !ctype_digit($student_id_raw) || (int) $student_id_raw < 1) {
        $errors[] = 'Student ID is required and must be a whole number of 1 or more.';
    }

    if ($first_name === '' || strlen($first_name) > 50) {
        $errors[] = 'First Name is required and must be at most 50 characters.';
    }

    if ($last_name === '' || strlen($last_name) > 50) {
        $errors[] = 'Last Name is required and must be at most 50 characters.';
    }

    if ($grade_level_raw === '' || !ctype_digit($grade_level_raw)) {
        $errors[] = 'Grade Level is required and must be a whole number.';
    }

    $grade_level = (int) $grade_level_raw;
    if ($grade_level < 1 || $grade_level > 12) {
        $errors[] = 'Grade Level must be between 1 and 12.';
    }

    if ($enrollment_status === '' || strlen($enrollment_status) > 20) {
        $errors[] = 'Enrollment Status is required and must be at most 20 characters.';
    }

    if ($email !== '' && strlen($email) > 100) {
        $errors[] = 'Email must be at most 100 characters.';
    }

    if ($phone_number !== '' && strlen($phone_number) > 15) {
        $errors[] = 'Phone Number must be at most 15 characters.';
    }

    if ($errors === array()) {
        try {
            $pdo = getDatabaseConnection();
            $sql = 'UPDATE Students SET first_name = :first_name, last_name = :last_name, grade_level = :grade_level, enrollment_status = :enrollment_status, email = :email, phone_number = :phone_number WHERE student_id = :student_id';

            $statement = $pdo->prepare($sql);
            $statement->execute(array(
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':grade_level' => $grade_level,
                ':enrollment_status' => $enrollment_status,
                ':email' => ($email === '' ? null : $email),
                ':phone_number' => ($phone_number === '' ? null : $phone_number),
                ':student_id' => (int) $student_id_raw,
            ));

            $rows_updated = $statement->rowCount();
        } catch (Throwable $exception) {
            $db_error = $exception->getMessage();
        }
    }
}

$tasks = array(
    'Use POST form submission' => $attempted_update,
    'Collect Students fields from $_POST' => $attempted_update,
    'Validate required fields and types' => $attempted_update && $errors === array(),
    'Run prepared UPDATE on Students' => $rows_updated !== null,
    'Show success/no-change/error feedback clearly' => $attempted_update,
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 20</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
    <p>Pupil task: apply the Employees update pattern to the Students table.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Build a form that submits student update details via POST.</li>
      <li>Receive values on the PHP page using <code>$_POST</code>.</li>
      <li>Validate required values and data types server-side.</li>
      <li>Use a prepared UPDATE statement on <code>Students</code>.</li>
      <li>Display clear success, no-change, or error messages.</li>
    </ol>

    <div class="code-note">
      <strong>Important:</strong> Demo pages use <code>Employees</code>. This task must use <code>Students</code>.
    </div>

    <form method="POST" action="yourtask.php" class="form-container">
      <fieldset>
        <legend>Students Update Form</legend>

        <div class="form-group">
          <label for="student_id">Student ID to Update:</label>
          <input type="number" id="student_id" name="student_id" required min="1" value="<?php echo htmlspecialchars($student_id_raw); ?>" />
        </div>

        <div class="form-group">
          <label for="first_name">New First Name:</label>
          <input type="text" id="first_name" name="first_name" required maxlength="50" value="<?php echo htmlspecialchars($first_name); ?>" />
        </div>

        <div class="form-group">
          <label for="last_name">New Last Name:</label>
          <input type="text" id="last_name" name="last_name" required maxlength="50" value="<?php echo htmlspecialchars($last_name); ?>" />
        </div>

        <div class="form-group">
          <label for="grade_level">New Grade Level (1-12):</label>
          <input type="number" id="grade_level" name="grade_level" required min="1" max="12" value="<?php echo htmlspecialchars($grade_level_raw); ?>" />
        </div>

        <div class="form-group">
          <label for="enrollment_status">New Enrollment Status:</label>
          <input type="text" id="enrollment_status" name="enrollment_status" required maxlength="20" value="<?php echo htmlspecialchars($enrollment_status); ?>" />
        </div>

        <div class="form-group">
          <label for="email">New Email (optional):</label>
          <input type="email" id="email" name="email" maxlength="100" value="<?php echo htmlspecialchars($email); ?>" />
        </div>

        <div class="form-group">
          <label for="phone_number">New Phone Number (optional):</label>
          <input type="text" id="phone_number" name="phone_number" maxlength="15" value="<?php echo htmlspecialchars($phone_number); ?>" />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Update Student</button>
    </form>

    <?php if ($attempted_update && $errors !== array()): ?>
      <div class="status-error">
        <strong>Validation Error:</strong>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif ($attempted_update && $db_error !== ''): ?>
      <div class="status-error">
        <strong>Database Error:</strong> <?php echo htmlspecialchars($db_error); ?>
      </div>
    <?php elseif ($attempted_update && $rows_updated === 0): ?>
      <div class="status-empty">
        <strong>No rows updated:</strong> Check that Student ID <?php echo htmlspecialchars($student_id_raw); ?> exists and values changed.
      </div>
    <?php elseif ($rows_updated !== null): ?>
      <div class="status-success">
        <strong>Update Success:</strong> <?php echo $rows_updated; ?> student row(s) updated.
      </div>
    <?php else: ?>
      <div class="status-empty">
        <strong>No submission yet:</strong> Fill out the form to test your UPDATE logic.
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

    <p><a href="index.php">Back to Site 20 index</a></p>
  </main>
</body>
</html>
