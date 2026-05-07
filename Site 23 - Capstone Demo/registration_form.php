<?php

declare(strict_types=1);

session_start();

$old = $_SESSION['site23_old'] ?? [];
$errors = $_SESSION['site23_errors'] ?? [];
unset($_SESSION['site23_old'], $_SESSION['site23_errors']);

$topics = ['html', 'css', 'php', 'sql', 'sessions', 'debugging'];
$selectedTopics = isset($old['topics']) && is_array($old['topics']) ? $old['topics'] : [];

function old_value(array $old, string $key): string
{
    return htmlspecialchars((string) ($old[$key] ?? ''), ENT_QUOTES, 'UTF-8');
}

function checked(array $values, string $target): string
{
    return in_array($target, $values, true) ? 'checked' : '';
}

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site 23 - Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Capstone Demo - Registration Form</h1>
    <p>Step 1: Submit this form with POST. The next page validates and processes your input.</p>
  </header>

  <main>
    <?php if (!empty($errors)): ?>
      <div class="notice-err">
        <strong>Please fix the following validation errors:</strong>
        <ul class="list-tight">
          <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="form-container">
      <form method="POST" action="registration_result.php" novalidate>
        <fieldset>
          <legend>Student Profile</legend>

          <div class="form-group">
            <label for="student_name">Full Name</label>
            <input type="text" id="student_name" name="student_name" value="<?= old_value($old, 'student_name') ?>" required minlength="2" maxlength="40">
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="<?= old_value($old, 'email') ?>" required>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" value="<?= old_value($old, 'age') ?>" min="12" max="80" required>
          </div>
        </fieldset>

        <fieldset>
          <legend>Course Choices</legend>

          <div class="form-group">
            <label for="course">Preferred Course</label>
            <select id="course" name="course" required>
              <option value="">-- Choose a course --</option>
              <option value="web" <?= old_value($old, 'course') === 'web' ? 'selected' : '' ?>>Web Development</option>
              <option value="data" <?= old_value($old, 'course') === 'data' ? 'selected' : '' ?>>Data Fundamentals</option>
              <option value="security" <?= old_value($old, 'course') === 'security' ? 'selected' : '' ?>>Cyber Security Basics</option>
            </select>
          </div>

          <div class="form-group">
            <label>Experience Level</label>
            <div class="option-row">
              <label><input type="radio" name="experience" value="beginner" <?= old_value($old, 'experience') === 'beginner' ? 'checked' : '' ?>> Beginner</label>
              <label><input type="radio" name="experience" value="intermediate" <?= old_value($old, 'experience') === 'intermediate' ? 'checked' : '' ?>> Intermediate</label>
              <label><input type="radio" name="experience" value="advanced" <?= old_value($old, 'experience') === 'advanced' ? 'checked' : '' ?>> Advanced</label>
            </div>
          </div>

          <div class="form-group">
            <label for="study_hours">Planned Study Hours Per Week</label>
            <input type="number" id="study_hours" name="study_hours" value="<?= old_value($old, 'study_hours') ?>" min="1" max="40" required>
          </div>

          <div class="form-group">
            <label for="start_date">Preferred Start Date</label>
            <input type="date" id="start_date" name="start_date" value="<?= old_value($old, 'start_date') ?>" required>
          </div>

          <div class="form-group">
            <label>Topics You Want To Focus On</label>
            <div class="option-row">
              <?php foreach ($topics as $topic): ?>
                <label>
                  <input type="checkbox" name="topics[]" value="<?= $topic ?>" <?= checked($selectedTopics, $topic) ?>>
                  <?= strtoupper($topic) ?>
                </label>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="form-group">
            <label for="bio">Why do you want to join this course?</label>
            <textarea id="bio" name="bio" rows="4" minlength="10" maxlength="300" required><?= old_value($old, 'bio') ?></textarea>
          </div>
        </fieldset>

        <button class="btn" type="submit">Submit Registration (POST)</button>
      </form>
    </div>

    <p><a href="index.php">Back to Site 23 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
