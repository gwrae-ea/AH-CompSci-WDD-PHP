<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 14</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Media Queries in External CSS</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>This site uses only these media query approaches:</p>
    <ul>
      <li><code>@media screen and (max-width: ...)</code></li>
      <li><code>@media print</code></li>
    </ul>

    <h2>Why External CSS?</h2>
    <p>Keeping media queries in an external stylesheet helps you reuse responsive behavior across all pages.</p>

    <div class="code-note">
      <strong>Example:</strong>
      <pre>@media screen and (max-width: 600px) {
  .grid { grid-template-columns: 1fr; }
}

@media print {
  .no-print { display: none; }
}</pre>
    </div>

    <h2>What to Test</h2>
    <ul>
      <li>At full width, cards appear in three columns.</li>
      <li>At medium width, cards appear in two columns.</li>
      <li>At small width, cards appear in one column.</li>
      <li>In print mode, decorative elements are simplified.</li>
    </ul>

    <p><a href="index.php">Back to Site 14 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
