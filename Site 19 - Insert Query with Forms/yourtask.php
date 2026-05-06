<?php

declare(strict_types=1);

require __DIR__ . '/../db.php';

$first_name = trim($_POST['first_name'] ?? '');
$last_name = trim($_POST['last_name'] ?? '');
$date_of_birth = trim($_POST['date_of_birth'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$enrollment_date = trim($_POST['enrollment_date'] ?? '');
$grade_level_raw = trim((string) ($_POST['grade_level'] ?? ''));
$enrollment_status = trim($_POST['enrollment_status'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone_number = trim($_POST['phone_number'] ?? '');

$errors = array();
$db_error = '';
$inserted_id = null;
$attempted_insert = $_SERVER['REQUEST_METHOD'] === 'POST';

$allowed_gender = array('Male', 'Female', 'Other');

function isValidDateInput(string $value): bool
{
    $date_object = DateTime::createFromFormat('Y-m-d', $value);
    return $value !== '' && $date_object && $date_object->format('Y-m-d') === $value;
}

if ($attempted_insert) {
    if ($first_name === '' || strlen($first_name) > 50) {
        $errors[] = 'First Name is required and must be at most 50 characters.';
    }

    if ($last_name === '' || strlen($last_name) > 50) {
        $errors[] = 'Last Name is required and must be at most 50 characters.';
    }

    if (!isValidDateInput($date_of_birth)) {
        $errors[] = 'Date of Birth is required and must be a valid date.';
    }

    if (!in_array($gender, $allowed_gender, true)) {
        $errors[] = 'Gender must be Male, Female, or Other.';
    }

    if (!isValidDateInput($enrollment_date)) {
        $errors[] = 'Enrollment Date is required and must be a valid date.';
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
            $sql = 'INSERT INTO Students (first_name, last_name, date_of_birth, gender, enrollment_date, grade_level, enrollment_status, email, phone_number) VALUES (:first_name, :last_name, :date_of_birth, :gender, :enrollment_date, :grade_level, :enrollment_status, :email, :phone_number)';

            $statement = $pdo->prepare($sql);
            $statement->execute(array(
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':date_of_birth' => $date_of_birth,
                ':gender' => $gender,
                ':enrollment_date' => $enrollment_date,
                ':grade_level' => $grade_level,
                ':enrollment_status' => $enrollment_status,
                ':email' => ($email === '' ? null : $email),
                ':phone_number' => ($phone_number === '' ? null : $phone_number),
            ));

            $inserted_id = (int) $pdo->lastInsertId();
        } catch (Throwable $exception) {
            $db_error = $exception->getMessage();
        }
    }
}

$tasks = array(
    'Use POST form submission' => $attempted_insert,
    'Collect Students fields from $_POST' => $attempted_insert,
    'Validate required fields and types' => $attempted_insert && $errors === array(),
    'Run prepared INSERT into Students' => $inserted_id !== null,
    'Show success/error feedback clearly' => $attempted_insert,
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 19</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
    <p>Pupil task: apply the Employees insert pattern to the Students table.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Build a form that submits student details via POST.</li>
      <li>Receive values on the PHP page using <code>$_POST</code>.</li>
      <li>Validate required values and data types server-side.</li>
      <li>Use a prepared INSERT statement into <code>Students</code>.</li>
      <li>Display clear success, inserted ID, or error messages.</li>
    </ol>

    <div class="code-note">
      <strong>Important:</strong> Demo pages use <code>Employees</code>. This task must use <code>Students</code>.
    </div>

    <form method="POST" action="yourtask.php" class="form-container">
      <fieldset>
        <legend>Students Insert Form</legend>

        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" id="first_name" name="first_name" required maxlength="50" value="<?php echo htmlspecialchars($first_name); ?>" />
        </div>

        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" id="last_name" name="last_name" required maxlength="50" value="<?php echo htmlspecialchars($last_name); ?>" />
        </div>

        <div class="form-group">
          <label for="date_of_birth">Date of Birth:</label>
          <input type="date" id="date_of_birth" name="date_of_birth" required value="<?php echo htmlspecialchars($date_of_birth); ?>" />
        </div>

        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="Male" <?php echo ($gender === 'Male' ? 'selected' : ''); ?>>Male</option>
            <option value="Female" <?php echo ($gender === 'Female' ? 'selected' : ''); ?>>Female</option>
            <option value="Other" <?php echo ($gender === 'Other' ? 'selected' : ''); ?>>Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="enrollment_date">Enrollment Date:</label>
          <input type="date" id="enrollment_date" name="enrollment_date" required value="<?php echo htmlspecialchars($enrollment_date); ?>" />
        </div>

        <div class="form-group">
          <label for="grade_level">Grade Level (1-12):</label>
          <input type="number" id="grade_level" name="grade_level" required min="1" max="12" value="<?php echo htmlspecialchars($grade_level_raw); ?>" />
        </div>

        <div class="form-group">
          <label for="enrollment_status">Enrollment Status:</label>
          <input type="text" id="enrollment_status" name="enrollment_status" required maxlength="20" value="<?php echo htmlspecialchars($enrollment_status); ?>" />
        </div>

        <div class="form-group">
          <label for="email">Email (optional):</label>
          <input type="email" id="email" name="email" maxlength="100" value="<?php echo htmlspecialchars($email); ?>" />
        </div>

        <div class="form-group">
          <label for="phone_number">Phone Number (optional):</label>
          <input type="text" id="phone_number" name="phone_number" maxlength="15" value="<?php echo htmlspecialchars($phone_number); ?>" />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Insert Student</button>
    </form>

    <?php if ($attempted_insert && $errors !== array()): ?>
      <div class="status-error">
        <strong>Validation Error:</strong>
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif ($attempted_insert && $db_error !== ''): ?>
      <div class="status-error">
        <strong>Database Error:</strong> <?php echo htmlspecialchars($db_error); ?>
      </div>
    <?php elseif ($inserted_id !== null): ?>
      <div class="status-success">
        <strong>Insert Success:</strong> New student row inserted with ID <?php echo $inserted_id; ?>.
      </div>
    <?php else: ?>
      <div class="status-empty">
        <strong>No submission yet:</strong> Fill out the form to test your INSERT logic.
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

    <p><a href="index.php">Back to Site 19 index</a></p>
  </main>
</body>
</html>
