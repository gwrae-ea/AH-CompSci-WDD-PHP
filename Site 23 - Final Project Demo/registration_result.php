<?php

declare(strict_types=1);

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration_form.php');
    exit;
}

$courseNames = [
    'web' => 'Web Development',
    'data' => 'Data Fundamentals',
    'security' => 'Cyber Security Basics',
];

$validExperiences = ['beginner', 'intermediate', 'advanced'];
$validTopics = ['html', 'css', 'php', 'sql', 'sessions', 'debugging'];

$input = [
    'student_name' => trim((string) ($_POST['student_name'] ?? '')),
    'email' => trim((string) ($_POST['email'] ?? '')),
    'age' => trim((string) ($_POST['age'] ?? '')),
    'course' => trim((string) ($_POST['course'] ?? '')),
    'experience' => trim((string) ($_POST['experience'] ?? '')),
    'study_hours' => trim((string) ($_POST['study_hours'] ?? '')),
    'start_date' => trim((string) ($_POST['start_date'] ?? '')),
    'bio' => trim((string) ($_POST['bio'] ?? '')),
    'topics' => isset($_POST['topics']) && is_array($_POST['topics']) ? array_values($_POST['topics']) : [],
];

$errors = [];

if (mb_strlen($input['student_name']) < 2 || mb_strlen($input['student_name']) > 40) {
    $errors[] = 'Full Name must be between 2 and 40 characters.';
}

if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email Address must be valid.';
}

$age = filter_var($input['age'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 12, 'max_range' => 80]]);
if ($age === false) {
    $errors[] = 'Age must be a whole number between 12 and 80.';
}

if (!array_key_exists($input['course'], $courseNames)) {
    $errors[] = 'Please choose a valid course option.';
}

if (!in_array($input['experience'], $validExperiences, true)) {
    $errors[] = 'Please choose your experience level.';
}

$studyHours = filter_var($input['study_hours'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 40]]);
if ($studyHours === false) {
    $errors[] = 'Study hours must be a whole number between 1 and 40.';
}

$startDateObj = DateTime::createFromFormat('Y-m-d', $input['start_date']);
$today = new DateTime('today');
if (!$startDateObj || $startDateObj->format('Y-m-d') !== $input['start_date']) {
    $errors[] = 'Start date must be a valid date.';
} elseif ($startDateObj < $today) {
    $errors[] = 'Start date cannot be in the past.';
}

if (mb_strlen($input['bio']) < 10 || mb_strlen($input['bio']) > 300) {
    $errors[] = 'Bio must be between 10 and 300 characters.';
}

if (count($input['topics']) < 1) {
    $errors[] = 'Select at least one topic.';
} else {
    foreach ($input['topics'] as $topic) {
        if (!in_array($topic, $validTopics, true)) {
            $errors[] = 'Invalid topic selected.';
            break;
        }
    }
}

if (!empty($errors)) {
    $_SESSION['site23_errors'] = $errors;
    $_SESSION['site23_old'] = $input;
    header('Location: registration_form.php');
    exit;
}

$ageValue = (int) $age;
$studyHoursValue = (int) $studyHours;
$courseCode = $input['course'];
$experience = $input['experience'];

$weeklyMinutes = $studyHoursValue * 60;

if ($ageValue < 18) {
    $ageGroup = 'Under 18';
} elseif ($ageValue <= 25) {
    $ageGroup = '18 to 25';
} else {
    $ageGroup = '26+';
}

$difficultyScore = 0;
$difficultyScore += $experience === 'beginner' ? 1 : 2;
$difficultyScore += $studyHoursValue >= 8 ? 2 : 1;
$difficultyScore += count($input['topics']) >= 3 ? 2 : 1;

if ($difficultyScore >= 6 && $studyHoursValue >= 10) {
    $recommendation = 'Fast-track pathway';
} elseif ($difficultyScore >= 4) {
    $recommendation = 'Standard pathway';
} else {
    $recommendation = 'Starter pathway';
}

$topicWeightMap = [
    'html' => 1,
    'css' => 1,
    'php' => 2,
    'sql' => 2,
    'sessions' => 2,
    'debugging' => 1,
];

$totalWeight = 0;
foreach ($input['topics'] as $topic) {
    if (!isset($topicWeightMap[$topic])) {
        continue;
    }
    $totalWeight += $topicWeightMap[$topic];
}

$practiceAgenda = ['Syntax drill', 'Form handling', 'Validation challenge', 'Array review', 'Project build'];
$agendaOut = [];
foreach ($practiceAgenda as $item) {
    if ($item === 'Array review' && $experience === 'advanced') {
        continue;
    }
    $agendaOut[] = $item;
    if (count($agendaOut) === 4) {
        break;
    }
}

$weekPlan = [];
for ($week = 1; $week <= 4; $week++) {
    $weekPlan[] = [
        'week' => $week,
        'target_minutes' => $weeklyMinutes,
        'cumulative_minutes' => $weeklyMinutes * $week,
    ];
}

$milestones = [];
$remaining = $studyHoursValue;
while ($remaining > 0) {
    $milestones[] = $remaining >= 5 ? 'Project hour block' : 'Quick revision block';
    $remaining -= 5;
}

$countdown = [];
$step = 3;
do {
    $countdown[] = $step;
    $step--;
} while ($step >= 1);

$resources = [
    'beginner' => [
        'web' => ['HTML cheat sheet', 'CSS selectors guide'],
        'data' => ['Spreadsheet formulas', 'SQL starter cards'],
        'security' => ['Password basics', 'Safe browsing checklist'],
    ],
    'intermediate' => [
        'web' => ['PHP form workflow', 'Session mini-project'],
        'data' => ['JOIN practice set', 'Aggregation drills'],
        'security' => ['Threat model worksheet', 'Input validation lab'],
    ],
    'advanced' => [
        'web' => ['PDO challenge', 'Refactor for reuse'],
        'data' => ['Query optimization notes', 'Data quality checks'],
        'security' => ['OWASP top risks summary', 'Defense-in-depth exercise'],
    ],
];

$resourceList = $resources[$experience][$courseCode];

$record = [
    'name' => $input['student_name'],
    'email' => $input['email'],
    'age' => $ageValue,
    'age_group' => $ageGroup,
    'course' => $courseNames[$courseCode],
    'experience' => ucfirst($experience),
    'study_hours' => $studyHoursValue,
    'weekly_minutes' => $weeklyMinutes,
    'start_date' => $input['start_date'],
    'topics' => $input['topics'],
    'bio' => $input['bio'],
    'difficulty_score' => $difficultyScore,
    'recommendation' => $recommendation,
    'topic_weight' => $totalWeight,
    'created_at' => (new DateTime())->format('Y-m-d H:i:s'),
];

if (!isset($_SESSION['site23_submissions']) || !is_array($_SESSION['site23_submissions'])) {
    $_SESSION['site23_submissions'] = [];
}
$_SESSION['site23_submissions'][] = $record;

function e(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site 23 - Registration Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Final Project Demo - Processed Result</h1>
    <p>Step 2: POST data validated, processed, and stored in session history.</p>
  </header>

  <main>
    <div class="notice-ok">
      <strong>Registration accepted.</strong>
      <p>Your submission passed all server-side checks and has been added to the session dashboard.</p>
    </div>

    <h2>Submission Summary</h2>
    <table>
      <tbody>
        <tr><th>Name</th><td><?= e($record['name']) ?></td></tr>
        <tr><th>Email</th><td><?= e($record['email']) ?></td></tr>
        <tr><th>Age Group</th><td><?= e($record['age_group']) ?></td></tr>
        <tr><th>Course</th><td><?= e($record['course']) ?></td></tr>
        <tr><th>Experience</th><td><?= e($record['experience']) ?></td></tr>
        <tr><th>Study Hours</th><td><?= $record['study_hours'] ?> hours/week (<?= $record['weekly_minutes'] ?> minutes)</td></tr>
        <tr><th>Start Date</th><td><?= e($record['start_date']) ?></td></tr>
        <tr><th>Recommendation</th><td><?= e($record['recommendation']) ?></td></tr>
        <tr><th>Topic Weight</th><td><?= $record['topic_weight'] ?></td></tr>
      </tbody>
    </table>

    <h2>Topics Selected</h2>
    <ul class="list-tight">
      <?php foreach ($record['topics'] as $topic): ?>
        <li><?= e(strtoupper($topic)) ?></li>
      <?php endforeach; ?>
    </ul>

    <h2>Four Week Plan (for loop)</h2>
    <table>
      <thead>
        <tr>
          <th>Week</th>
          <th>Target Minutes</th>
          <th>Cumulative Minutes</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($weekPlan as $row): ?>
          <tr>
            <td><?= $row['week'] ?></td>
            <td><?= $row['target_minutes'] ?></td>
            <td><?= $row['cumulative_minutes'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="grid">
      <article class="card">
        <h3>Agenda (break/continue)</h3>
        <ul class="list-tight">
          <?php foreach ($agendaOut as $line): ?>
            <li><?= e($line) ?></li>
          <?php endforeach; ?>
        </ul>
      </article>

      <article class="card">
        <h3>Milestones (while loop)</h3>
        <ul class="list-tight">
          <?php foreach ($milestones as $line): ?>
            <li><?= e($line) ?></li>
          <?php endforeach; ?>
        </ul>
      </article>

      <article class="card">
        <h3>Launch Countdown (do...while)</h3>
        <p><?= implode(' - ', $countdown) ?> - Go!</p>
      </article>
    </div>

    <h2>Suggested Resources (multidimensional array)</h2>
    <ul class="list-tight">
      <?php foreach ($resourceList as $resource): ?>
        <li><?= e($resource) ?></li>
      <?php endforeach; ?>
    </ul>

    <h2>Why Validation Matters</h2>
    <p>Even if browser checks are present, server-side validation is essential because users can bypass client-side rules. This page validates every required field in PHP before using the data.</p>

    <p><a class="btn" href="dashboard.php">Open Session Dashboard</a></p>
    <p><a href="registration_form.php">Submit another registration</a></p>
    <p><a href="index.php">Back to Site 23 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
