<?php

declare(strict_types=1);

session_start();

// Read values set by yourtask_form.php
$name    = $_SESSION['task_name']    ?? null;
$subject = $_SESSION['task_subject'] ?? null;
$visits  = $_SESSION['task_visits']  ?? null;

// Increment visit counter each time this page loads (if session is active)
if ($name !== null) {
    $_SESSION['task_visits'] = ((int) ($_SESSION['task_visits'] ?? 0)) + 1;
    $visits = $_SESSION['task_visits'];
}

// Destroy session when requested
$destroyed = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear'])) {
    $name_before    = $_SESSION['task_name']    ?? '';
    $subject_before = $_SESSION['task_subject'] ?? '';
    $_SESSION = [];
    session_destroy();
    $destroyed = true;
}

// Checklist
$checks = [];
if (!$destroyed) {
    $checks['session_started']    = session_status() === PHP_SESSION_ACTIVE;
    $checks['name_stored']        = isset($_SESSION['task_name'])    && $_SESSION['task_name']    !== '';
    $checks['subject_stored']     = isset($_SESSION['task_subject']) && $_SESSION['task_subject'] !== '';
    $checks['visit_count_stored'] = isset($_SESSION['task_visits'])  && (int) $_SESSION['task_visits'] > 0;
}

function check(bool $result): string {
    return $result ? '<span class="pass">PASS</span>' : '<span class="fail">FAIL</span>';
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task — Site 22</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task — Session Variables (page 2)</h1>
  </header>

  <main>
    <p>This is the reading and display page. Create <code>yourtask_form.php</code> as the form page (page 1) that sets the session values below, then submit the form and return here to see the checklist results.</p>

    <?php if ($destroyed): ?>
      <div class="status-error">
        <strong>Session cleared.</strong>
        <p>The session has been destroyed. Values that were stored: name = <strong><?= htmlspecialchars($name_before, ENT_QUOTES, 'UTF-8') ?></strong>, subject = <strong><?= htmlspecialchars($subject_before, ENT_QUOTES, 'UTF-8') ?></strong>.</p>
        <p><a href="yourtask_form.php">Start again from your form</a></p>
      </div>

    <?php elseif ($name !== null): ?>
      <div class="status-success">
        <strong>Session values found:</strong>
        <ul>
          <li>task_name: <strong><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></strong></li>
          <li>task_subject: <strong><?= htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') ?></strong></li>
          <li>task_visits: <strong><?= (int) $visits ?></strong> (incremented each page load)</li>
        </ul>
      </div>
      <p>
        <a href="yourtask.php">Reload this page</a> to watch task_visits increase without any form submission.
      </p>
      <form method="POST" action="yourtask.php">
        <input type="hidden" name="clear" value="1">
        <button type="submit" class="submit-btn">Clear Session</button>
      </form>

    <?php else: ?>
      <div class="status-empty">
        <strong>No session data found.</strong>
        <p>Create <code>yourtask_form.php</code> and submit the form to store session values, then come back here.</p>
        <p><a href="yourtask_form.php">Go to your form (once created)</a></p>
      </div>
    <?php endif; ?>

    <?php if (!$destroyed): ?>
    <hr>
    <h2>Task Checklist</h2>
    <table class="data-table">
      <thead>
        <tr>
          <th>Check</th>
          <th>Result</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>session_start() called and session is active</td>
          <td><?= check($checks['session_started']) ?></td>
        </tr>
        <tr>
          <td>$_SESSION['task_name'] is set and not empty</td>
          <td><?= check($checks['name_stored']) ?></td>
        </tr>
        <tr>
          <td>$_SESSION['task_subject'] is set and not empty</td>
          <td><?= check($checks['subject_stored']) ?></td>
        </tr>
        <tr>
          <td>$_SESSION['task_visits'] is set and greater than 0</td>
          <td><?= check($checks['visit_count_stored']) ?></td>
        </tr>
      </tbody>
    </table>
    <?php endif; ?>

    <p><a href="index.php">Back to Site 22 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
