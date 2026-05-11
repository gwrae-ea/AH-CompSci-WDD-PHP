<?php

declare(strict_types=1);

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 23</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task - Site 23 Final Project Workspace</h1>
  </header>

  <main>
    <p>Use this page as your own final project extension. Start from the working demo and add your own feature set.</p>

    <h2>Task Brief</h2>
    <div class="card">
      <p>Create a new mini workflow in this folder that demonstrates your own topic (for example: event booking, club signup, revision planner, or project proposal form).</p>
      <p>Your workflow must include a form page, a POST result page with validation, and one additional page that reads session data and shows a summary.</p>
    </div>

    <h2>Checklist</h2>
    <ul class="list-tight">
      <li>Uses <code>method="POST"</code> for form submission.</li>
      <li>Validates all key fields server-side.</li>
      <li>Uses <code>htmlspecialchars()</code> on output.</li>
      <li>Stores data or feedback in <code>$_SESSION</code>.</li>
      <li>Includes at least one <code>for</code> loop, one <code>foreach</code> loop, and one of <code>while</code> or <code>do...while</code>.</li>
      <li>Uses at least one associative and one multidimensional array.</li>
      <li>Uses responsive CSS with media queries.</li>
    </ul>

    <h2>Suggested File Plan</h2>
    <pre>my_form.php
my_result.php
my_dashboard.php
my_style.css (or reuse style.css)</pre>

    <h2>Teacher Commentary Prompts</h2>
    <ul class="list-tight">
      <li>Explain which validation rule is most important and why.</li>
      <li>Show where session data is written and where it is read.</li>
      <li>Point out where each loop type is used and what it produces.</li>
      <li>Show a phone-width screenshot to prove media query behavior.</li>
    </ul>

    <p><a href="index.php">Back to Site 23 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
