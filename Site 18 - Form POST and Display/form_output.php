<?php

declare(strict_types=1);

// Receive POST data and store in PHP variables
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

// Process the data with concatenation and string functions
$full_name = $first_name . ' ' . $last_name;
$full_name_upper = strtoupper($full_name);
$full_name_lower = strtolower($full_name);
$name_length = strlen($first_name . $last_name);

$hobby_processed = !empty($hobby) ? 'enjoys ' . strtolower($hobby) : 'did not specify a hobby';
$color_processed = !empty($favorite_color) ? strtoupper($favorite_color) : 'not specified';

$has_data = !empty($first_name) || !empty($last_name);
$is_valid = $has_data && empty($validation_errors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Output - Site 18</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 2: Processed Output</h1>
    <p>Your form data has been received and processed.</p>
  </header>

  <main>
    <?php if (!empty($validation_errors)): ?>
      <div class="status-error">
        <strong>Validation Error:</strong> Please check the following:
        <ul>
          <?php foreach ($validation_errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <p><a href="form_input.php">Return to the form</a></p>
    <?php elseif ($has_data): ?>
      <div class="status-success">
        <strong>Form received successfully!</strong>
      </div>

      <div class="results-container">
        <h2>Raw Data Received</h2>
        <div class="code-note">
          <ul>
            <li><strong>first_name:</strong> <?php echo htmlspecialchars($first_name); ?></li>
            <li><strong>last_name:</strong> <?php echo htmlspecialchars($last_name); ?></li>
            <li><strong>hobby:</strong> <?php echo htmlspecialchars($hobby); ?></li>
            <li><strong>favorite_color:</strong> <?php echo htmlspecialchars($favorite_color); ?></li>
          </ul>
        </div>

        <h2>Processed Output (with Concatenation & String Functions)</h2>
        <div class="results-box">
          <p><strong>Full Name (default):</strong> <?php echo htmlspecialchars($full_name); ?></p>
          <p><strong>Full Name (UPPERCASE):</strong> <?php echo htmlspecialchars($full_name_upper); ?></p>
          <p><strong>Full Name (lowercase):</strong> <?php echo htmlspecialchars($full_name_lower); ?></p>
          <p><strong>Character Count (First + Last):</strong> <?php echo $name_length; ?> characters</p>
          <p><strong>Hobby Summary:</strong> <?php echo htmlspecialchars(ucfirst($first_name) . ' ' . $hobby_processed . '.'); ?></p>
          <p><strong>Favorite Color:</strong> <?php echo htmlspecialchars($color_processed); ?></p>
        </div>

        <h2>Data Flow</h2>
        <div class="code-note">
          <p><strong>Request Method:</strong> <?php echo htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN'); ?></p>
          <p><strong>POST data is not shown in the URL.</strong></p>
          <p><strong>PHP Variable Extraction:</strong></p>
          <pre>$first_name = $_POST['first_name'] ?? '';
      $last_name = $_POST['last_name'] ?? '';
$full_name = $first_name . ' ' . $last_name;
$full_name_upper = strtoupper($full_name);</pre>
        </div>
      </div>

    <?php else: ?>
      <div class="status-empty">
        <strong>No data received:</strong> Please return to the form and provide at least a first or last name.
      </div>

      <p><a href="form_input.php">Go back to the form</a></p>
    <?php endif; ?>

    <hr />

    <p><a href="form_input.php">Back to the form (page 1)</a></p>
    <p><a href="index.php">Back to Site 18 index</a></p>
  </main>
</body>
</html>
