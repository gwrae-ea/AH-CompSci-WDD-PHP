<?php

declare(strict_types=1);

session_start();

// Snapshot values before destroying so we can show what was lost
$username_before  = $_SESSION['demo_username']    ?? null;
$favourite_before = $_SESSION['demo_favourite']   ?? null;
$visits_before    = $_SESSION['demo_visit_count'] ?? null;

$destroyed = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['destroy'])) {
    $_SESSION = [];          // Clear the in-memory array first
    session_destroy();       // Remove server-side session data
    $destroyed = true;
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Demo — Page 3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Session Demo — Page 3: Destroy Session</h1>
  </header>

  <main>
    <p>This page shows the session values one last time, then lets you destroy the session with <code>session_destroy()</code>. After destruction, those values are gone — any page that then calls <code>session_start()</code> will see an empty <code>$_SESSION</code>.</p>

    <?php if ($destroyed): ?>
      <div class="status-error">
        <strong>Session destroyed.</strong>
        <p>Values that existed before destruction:</p>
        <ul>
          <li>demo_username: <strong><?= htmlspecialchars((string) $username_before, ENT_QUOTES, 'UTF-8') ?></strong></li>
          <li>demo_favourite: <strong><?= htmlspecialchars((string) $favourite_before, ENT_QUOTES, 'UTF-8') ?></strong></li>
          <li>demo_visit_count: <strong><?= htmlspecialchars((string) $visits_before, ENT_QUOTES, 'UTF-8') ?></strong></li>
        </ul>
        <p>These are now gone. Reload this page or visit page 2 — session will be empty.</p>
        <p><a href="session_page1.php">Start again from page 1</a></p>
      </div>
    <?php elseif ($username_before !== null): ?>
      <div class="status-success">
        <strong>Current session values (still active):</strong>
        <ul>
          <li>demo_username: <strong><?= $username_before ?></strong></li>
          <li>demo_favourite: <strong><?= $favourite_before ?></strong></li>
          <li>demo_visit_count: <strong><?= $visits_before ?></strong></li>
        </ul>
      </div>
      <form method="POST" action="session_page3.php">
        <input type="hidden" name="destroy" value="1">
        <button type="submit" class="submit-btn">Destroy Session</button>
      </form>
    <?php else: ?>
      <div class="status-empty">
        <strong>No active session found.</strong>
        <p>Go back to <a href="session_page1.php">page 1</a> and submit the form first.</p>
      </div>
    <?php endif; ?>

    <div class="code-note">
      <strong>What this page does:</strong>
      <pre><?php echo htmlspecialchars(
'session_start();
$_SESSION = [];    // clear in-memory array
session_destroy(); // remove server-side session data',
ENT_QUOTES, 'UTF-8'); ?></pre>
    </div>

    <p><a href="index.php">Back to Site 22 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
