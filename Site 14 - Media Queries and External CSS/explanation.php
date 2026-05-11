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
    <!-- FR_STANDARD_START -->
    <section>
      <h2>Functional Requirements (Standard Format)</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR1</td><td>N/A</td></tr>
          <tr><td>FR2</td><td>a media query to adapt layout and typography for smaller screens that is triggered when viewport width is 768px or below</td></tr>
          <tr><td>FR3</td><td>N/A</td></tr>
          <tr><td>FR4</td><td>N/A</td></tr>
        </tbody>
      </table>

      <h2>Integration</h2>
      <p>Complete the pre-populated functional requirements for integration to describe how they will be applied in your project.</p>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR5</td><td>N/A</td></tr>
          <tr><td>FR6</td><td>N/A</td></tr>
          <tr><td>FR7</td><td>N/A</td></tr>
        </tbody>
      </table>

      <h2>Additional Functional Requirements</h2>
      <p>The solution is required to:</p>
      <table>
        <thead>
          <tr><th>ID</th><th>Requirement</th></tr>
        </thead>
        <tbody>
          <tr><td>FR8</td><td>N/A</td></tr>
          <tr><td>FR9</td><td>N/A</td></tr>
          <tr><td>FR10</td><td>N/A</td></tr>
          <tr><td>FR11</td><td>N/A</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
