<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task - Site 14</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Your Task Workspace</h1>
  </header>

  <main>
    <h2>Task</h2>
    <p>Edit <strong>style.css</strong> only and complete the following:</p>
    <ol>
      <li>Use <code>@media screen and (max-width: 900px)</code> to make the grid 2 columns.</li>
      <li>Use <code>@media screen and (max-width: 600px)</code> to make the grid 1 column.</li>
      <li>Use <code>@media print</code> to hide items with class <code>no-print</code>.</li>
      <li>Use print styles to remove background colors and keep text black.</li>
    </ol>

    <div class="grid">
      <article class="card"><h3>Practice Card A</h3><p>Check column changes at different widths.</p></article>
      <article class="card"><h3>Practice Card B</h3><p>Resize to trigger max-width rules.</p></article>
      <article class="card"><h3>Practice Card C</h3><p>Open print preview to test print rules.</p></article>
    </div>

    <p class="no-print">This helper note should be hidden in print view.</p>

    <p><a href="index.php">Back to Site 14 index</a></p>
  </main>
</body>
</html>
