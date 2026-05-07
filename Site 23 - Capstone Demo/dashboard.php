<?php

declare(strict_types=1);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear_history'])) {
    $_SESSION['site23_submissions'] = [];
    header('Location: dashboard.php');
    exit;
}

$submissions = $_SESSION['site23_submissions'] ?? [];
if (!is_array($submissions)) {
    $submissions = [];
}

$courseCounts = [
    'Web Development' => 0,
    'Data Fundamentals' => 0,
    'Cyber Security Basics' => 0,
];

$totalHours = 0;
$index = 0;
while ($index < count($submissions)) {
    $row = $submissions[$index];
    $course = (string) ($row['course'] ?? '');
    if (isset($courseCounts[$course])) {
        $courseCounts[$course] += 1;
    }
    $totalHours += (int) ($row['study_hours'] ?? 0);
    $index++;
}

$averageHours = count($submissions) > 0 ? round($totalHours / count($submissions), 2) : 0;

$emptyMessage = [];
$i = 1;
do {
    if (count($submissions) > 0) {
        break;
    }
    $emptyMessage[] = 'No submissions yet. Complete the registration form to generate dashboard data.';
    $i++;
} while ($i <= 1);

function esc(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site 23 - Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Capstone Dashboard</h1>
    <p>Step 3: Session-based history and summary analytics from submitted POST forms.</p>
  </header>

  <main>
    <div class="grid">
      <article class="card">
        <h3>Total Submissions</h3>
        <p><strong><?= count($submissions) ?></strong></p>
      </article>
      <article class="card">
        <h3>Average Study Hours</h3>
        <p><strong><?= $averageHours ?></strong> hours/week</p>
      </article>
      <article class="card">
        <h3>Course Distribution</h3>
        <ul class="list-tight">
          <?php foreach ($courseCounts as $name => $count): ?>
            <li><?= esc($name) ?>: <?= $count ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
    </div>

    <?php foreach ($emptyMessage as $line): ?>
      <div class="notice-warn">
        <p><?= esc($line) ?></p>
      </div>
    <?php endforeach; ?>

    <?php if (count($submissions) > 0): ?>
      <h2>Submission History</h2>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Course</th>
            <th>Experience</th>
            <th>Study Hours</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($submissions as $idx => $row): ?>
            <tr>
              <td><?= $idx + 1 ?></td>
              <td><?= esc((string) ($row['name'] ?? '')) ?></td>
              <td><?= esc((string) ($row['course'] ?? '')) ?></td>
              <td><?= esc((string) ($row['experience'] ?? '')) ?></td>
              <td><?= (int) ($row['study_hours'] ?? 0) ?></td>
              <td><?= esc((string) ($row['created_at'] ?? '')) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <form method="POST" action="dashboard.php" class="no-print">
        <input type="hidden" name="clear_history" value="1">
        <button type="submit" class="btn btn-danger">Clear Session History</button>
      </form>
    <?php endif; ?>

    <p><a href="registration_form.php">Back to registration form</a></p>
    <p><a href="index.php">Back to Site 23 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
