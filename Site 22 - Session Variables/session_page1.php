<?php

declare(strict_types=1);

session_start();

// Store values into the session when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $favourite = trim($_POST['favourite'] ?? '');

    if ($username !== '' && $favourite !== '') {
        $_SESSION['demo_username'] = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $_SESSION['demo_favourite'] = htmlspecialchars($favourite, ENT_QUOTES, 'UTF-8');
        $_SESSION['demo_visit_count'] = 1;
    }
}

$stored = isset($_SESSION['demo_username']);

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Demo — Page 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Session Demo — Page 1: Store Values</h1>
  </header>

  <main>
    <p>This page calls <code>session_start()</code> and then stores values in <code>$_SESSION</code> when the form is submitted. Navigate to page 2 <strong>without passing anything in the URL</strong> — the session will carry the data.</p>

    <?php if ($stored): ?>
      <div class="status-success">
        <strong>Session values stored:</strong>
        <ul>
          <li>demo_username: <strong><?= $_SESSION['demo_username'] ?></strong></li>
          <li>demo_favourite: <strong><?= $_SESSION['demo_favourite'] ?></strong></li>
          <li>demo_visit_count: <strong><?= $_SESSION['demo_visit_count'] ?></strong></li>
        </ul>
        <p><a href="session_page2.php">Go to page 2 &rarr;</a> (no GET or POST — values arrive via session)</p>
      </div>
    <?php else: ?>
      <div class="status-empty">
        <p>No session values stored yet. Fill in the form below.</p>
      </div>
    <?php endif; ?>

    <div class="form-container">
      <form method="POST" action="session_page1.php">
        <div class="form-group">
          <label for="username">Your Name</label>
          <input type="text" id="username" name="username" required minlength="2" maxlength="30">
        </div>
        <div class="form-group">
          <label for="favourite">Favourite Subject</label>
          <input type="text" id="favourite" name="favourite" required minlength="2" maxlength="30">
        </div>
        <button type="submit" class="submit-btn">Store in Session</button>
      </form>
    </div>

    <div class="code-note">
      <strong>What this page does:</strong>
      <pre><?php echo htmlspecialchars(
'session_start();
$_SESSION[\'demo_username\']    = $username;
$_SESSION[\'demo_favourite\']   = $favourite;
$_SESSION[\'demo_visit_count\'] = 1;',
ENT_QUOTES, 'UTF-8'); ?></pre>
    </div>

    <p><a href="index.php">Back to Site 22 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
