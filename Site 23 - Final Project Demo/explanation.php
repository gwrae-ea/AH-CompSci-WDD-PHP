<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 23</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Site 23 Final Project Demo</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>This final project site combines the practical skills from Sites 1-22 into a complete mini-application. It uses a real form flow, POST request handling, validation, data processing, and responsive output pages.</p>

    <h2>Complete Flow</h2>
    <div class="grid">
      <article class="card">
        <h3>1. Form Input</h3>
        <p><code>registration_form.php</code> collects multiple field types: text, email, number, date, radio buttons, checkboxes, select, and textarea.</p>
      </article>
      <article class="card">
        <h3>2. POST + Validation</h3>
        <p><code>registration_result.php</code> validates all values server-side. If any check fails, errors are stored in session and user is redirected back.</p>
      </article>
      <article class="card">
        <h3>3. Session Dashboard</h3>
        <p><code>dashboard.php</code> shows submission history and summary stats using arrays and loops, proving persistent state across pages.</p>
      </article>
    </div>

    <h2>Skills Coverage from Sites 1-22</h2>
    <table>
      <thead>
        <tr>
          <th>Skill Area</th>
          <th>Where It Appears in Site 23</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Basic PHP syntax, statements, comments</td><td>All PHP files use structured blocks, variables, and output.</td></tr>
        <tr><td>Variables and data types</td><td>Strings, integers, booleans, arrays, and DateTime objects are used in processing.</td></tr>
        <tr><td>Comparison and logical operators</td><td>Validation and recommendation logic use <code>===</code>, <code>&lt;</code>, <code>&lt;=</code>, <code>&amp;&amp;</code>, and <code>||</code> patterns.</td></tr>
        <tr><td>Assignment operators</td><td>Score and totals are built with <code>+=</code> and computed accumulators.</td></tr>
        <tr><td>Iteration constructs</td><td><code>for</code>, <code>while</code>, <code>do...while</code>, and <code>foreach</code> are all included.</td></tr>
        <tr><td>Break and continue</td><td>Agenda generation uses <code>continue</code> and <code>break</code> for controlled loop flow.</td></tr>
        <tr><td>Numeric/associative arrays</td><td>Weight maps, counters, and summaries are array-driven.</td></tr>
        <tr><td>Multidimensional arrays</td><td>Resource suggestions are selected from nested arrays by course + experience.</td></tr>
        <tr><td>Media queries and external CSS</td><td>Responsive layout and print mode are handled in <code>style.css</code>.</td></tr>
        <tr><td>Forms, GET/POST concepts</td><td>Primary workflow uses POST and redirect-back-on-error pattern.</td></tr>
        <tr><td>Session variables</td><td>Errors, old values, and submission history are stored in <code>$_SESSION</code>.</td></tr>
      </tbody>
    </table>

    <h2>Validation Strategy</h2>
    <p>Validation is done on the server even if browser checks exist. This is critical because client-side checks can be bypassed. The site validates type, range, allowed values, and required fields before processing input.</p>

    <div class="card">
      <h3>Example validation checks used</h3>
      <ul class="list-tight">
        <li>Name length between 2 and 40.</li>
        <li>Email format using <code>FILTER_VALIDATE_EMAIL</code>.</li>
        <li>Integer range checks for age and study hours.</li>
        <li>Date format and not-in-the-past rule.</li>
        <li>Whitelist checks for course, experience, and topics.</li>
      </ul>
    </div>

    <h2>Why Session Is Important Here</h2>
    <p>Sessions support two key patterns:</p>
    <ul>
      <li>Redirect-back with errors and previous values after failed validation.</li>
      <li>Persistent submission history across page navigation without a database.</li>
    </ul>

    <h2>Responsive and Print Design</h2>
    <p>The CSS includes:</p>
    <ul>
      <li>Desktop grid layout for cards and summaries.</li>
      <li>Tablet and mobile breakpoints that collapse grids and full-width buttons.</li>
      <li>Print styling that removes action buttons and heavy colors for clean evidence printing.</li>
    </ul>

    <h2>How to Demo This Site</h2>
    <ol>
      <li>Open the registration form and submit invalid data to show error handling.</li>
      <li>Submit valid data to show processed output and computed summaries.</li>
      <li>Open dashboard to show session-based persistence and aggregate stats.</li>
      <li>Resize browser window to show media-query behavior.</li>
      <li>Open print preview to show print-specific stylesheet behavior.</li>
    </ol>

    <p><a href="index.php">Back to Site 23 index</a></p>
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
          <tr><td>FR1</td><td>a website with multiple pages, one of which has form elements (action, method, and name) to implement an end-to-end final-project workflow</td></tr>
          <tr><td>FR2</td><td>a media query to provide responsive mobile and print-friendly layouts that is triggered when viewport width reaches defined breakpoints</td></tr>
          <tr><td>FR3</td><td>use PHP to assign form variables and process form data to validate, compute, and present project outputs</td></tr>
          <tr><td>FR4</td><td>use PHP to assign and use session variables to persist submission history, errors, and old values</td></tr>
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
          <tr><td>FR8</td><td>validate required keyboard text inputs with length constraints</td></tr>
          <tr><td>FR9</td><td>validate keyboard numeric/date/email inputs for format and range</td></tr>
          <tr><td>FR10</td><td>escape user-generated output using htmlspecialchars across result pages</td></tr>
          <tr><td>FR11</td><td>provide clear validation feedback and recovery flow after failed submission</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
