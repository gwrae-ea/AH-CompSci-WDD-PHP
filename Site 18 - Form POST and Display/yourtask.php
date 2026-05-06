<?php

declare(strict_types=1);

// Receive POST data
$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$hobby = $_POST['hobby'] ?? '';
$favorite_color = $_POST['favorite_color'] ?? '';

// Validate length constraints (2-10 characters)
function isValidLength(string $input): bool {
    $len = strlen($input);
    return $len >= 2 && $len <= 10;
}

$validation_errors = array();

if (!empty($first_name) && !isValidLength($first_name)) {
    $validation_errors[] = 'First Name must be between 2 and 10 characters.';
}
if (!empty($last_name) && !isValidLength($last_name)) {
    $validation_errors[] = 'Last Name must be between 2 and 10 characters.';
}
if (!empty($hobby) && !isValidLength($hobby)) {
    $validation_errors[] = 'Hobby must be between 2 and 10 characters.';
}
if (!empty($favorite_color) && !isValidLength($favorite_color)) {
    $validation_errors[] = 'Favorite Color must be between 2 and 10 characters.';
}

// Process
$full_name = $first_name . ' ' . $last_name;
$full_name_upper = strtoupper($full_name);
$has_data = !empty($first_name) || !empty($last_name);
$is_valid = $has_data && empty($validation_errors);

// Build a task checklist
$tasks = array(
  'Receive first_name from $_POST' => !empty($first_name),
  'Receive last_name from $_POST' => !empty($last_name),
    'Validate length 2-10 characters' => $is_valid,
    'Concatenate first and last name' => !empty($full_name) && strlen($full_name) > 1,
    'Convert to UPPERCASE' => !empty($full_name_upper) && $full_name_upper === strtoupper($full_name),
);

$passed = 0;
$total = count($tasks);

foreach ($tasks as $task => $result) {
    if ($result) {
        $passed++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 18</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
    <p>Submit form data to see it processed with concatenation and string functions.</p>
  </header>

  <main>
    <h2>Task Requirements</h2>
    <ol>
      <li>Build an HTML form with at least two text input fields.</li>
      <li>Set the form method to POST and action to a processing page.</li>
      <li>The processing page must receive $_POST data and store it in PHP variables.</li>
      <li>Concatenate fields together (e.g., first + last name).</li>
      <li>Apply string processing (uppercase, lowercase, length, etc.).</li>
      <li>Display the raw and processed data to the user.</li>
    </ol>

    <div class="code-note">
      <strong>Specific processing tasks:</strong>
      <ol>
        <li>Receive at least two form fields via POST.</li>
        <li>Concatenate two string fields together.</li>
        <li>Convert the concatenated result to uppercase with <code>strtoupper()</code>.</li>
        <li>Convert the same result to lowercase with <code>strtolower()</code>.</li>
        <li>Calculate the character count using <code>strlen()</code>.</li>
        <li>Use conditional logic to handle empty or missing fields gracefully.</li>
      </ol>
    </div>

    <hr />

    <?php if (!empty($validation_errors)): ?>
      <div class="status-error">
        <strong>Validation errors found:</strong> Please check the following:
        <ul>
          <?php foreach ($validation_errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php elseif ($has_data): ?>
      <div class="status-success">
        <strong>Form data received!</strong> Overall: <?php echo $passed; ?>/<?php echo $total; ?> tasks completed.
      </div>

      <div class="code-note">
        <strong>Task Checklist</strong>
        <ul>
          <?php foreach ($tasks as $task => $result): ?>
            <li><?php echo ($result ? '✓ PASS: ' : '✗ FAIL: '); ?><?php echo htmlspecialchars($task); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <h2>Data Display</h2>
      <div class="results-box">
        <p><strong>First Name:</strong> <?php echo htmlspecialchars($first_name); ?></p>
        <p><strong>Last Name:</strong> <?php echo htmlspecialchars($last_name); ?></p>
        <p><strong>Full Name:</strong> <?php echo htmlspecialchars($full_name); ?></p>
        <p><strong>Full Name (UPPERCASE):</strong> <?php echo htmlspecialchars($full_name_upper); ?></p>
        <p><strong>Full Name (lowercase):</strong> <?php echo htmlspecialchars(strtolower($full_name)); ?></p>
        <p><strong>Character Count:</strong> <?php echo strlen($first_name . $last_name); ?></p>
      </div>

    <?php else: ?>
      <div class="status-empty">
        <strong>No data received.</strong> Submit the form on page 1 to see the processing tasks in action.
      </div>
    <?php endif; ?>

    <hr />

    <p><a href="form_input.php">Go back to the form</a></p>
    <p><a href="index.php">Back to Site 18 index</a></p>
  </main>
</body>
</html>
