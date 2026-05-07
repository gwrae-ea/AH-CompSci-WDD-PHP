<?php

declare(strict_types=1);

session_start();

// Increment visit count each time this page is loaded
if (isset($_SESSION['demo_visit_count'])) {
    $_SESSION['demo_visit_count']++;
}

$username  = $_SESSION['demo_username']    ?? null;
$favourite = $_SESSION['demo_favourite']   ?? null;
$visits    = $_SESSION['demo_visit_count'] ?? null;

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Demo — Page 2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Session Demo — Page 2: Read Values</h1>
  </header>

  <main>
    <p>This page calls <code>session_start()</code> and reads from <code>$_SESSION</code>. Look at the URL — there is no query string. No form was submitted. The values arrived purely through the session.</p>

    <?php if ($username !== null): ?>
      <div class="status-success">
        <strong>Values read from session (no GET or POST):</strong>
        <ul>
          <li>demo_username: <strong><?= $username ?></strong></li>
          <li>demo_favourite: <strong><?= $favourite ?></strong></li>
          <li>demo_visit_count: <strong><?= $visits ?></strong> (incremented each time this page loads)</li>
        </ul>
        <p>Visit count increases every time you reload this page — with no form submission needed. This is the persistence GET and POST cannot provide.</p>
      </div>
    <?php else: ?>
      <div class="status-error">
        <strong>No session data found.</strong>
        <p>Go back to <a href="session_page1.php">page 1</a> and submit the form first.</p>
      </div>
    <?php endif; ?>

    <div class="code-note">
      <strong>What this page does:</strong>
      <pre><?php echo htmlspecialchars(
'session_start();
// No $_GET or $_POST — values come from the session
$username  = $_SESSION[\'demo_username\']    ?? null;
$favourite = $_SESSION[\'demo_favourite\']   ?? null;',
ENT_QUOTES, 'UTF-8'); ?></pre>
    </div>

    <p>
      <a href="session_page2.php">Reload this page</a> to watch visit_count increase. &nbsp;|&nbsp;
      <a href="session_page3.php">Go to page 3 &rarr;</a> (destroy the session)
    </p>

    <p><a href="index.php">Back to Site 22 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
