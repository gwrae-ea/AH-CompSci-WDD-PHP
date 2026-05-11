<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 18</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Form POST and Data Processing</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use an HTML form with <code>method="POST"</code> to send user input to a PHP page, then store that input in PHP variables and process it.</p>

    <h2>How POST Forms Work</h2>
    <div class="grid">
      <article class="card">
        <h3>Form Submission</h3>
        <p>User fills out input fields and clicks a submit button, triggering a POST request.</p>
      </article>
      <article class="card">
        <h3>Request Body</h3>
        <p>Form data is sent in the HTTP request body instead of being appended to the URL.</p>
      </article>
      <article class="card">
        <h3>PHP Reception</h3>
        <p>The receiving page reads form data from the <code>$_POST</code> superglobal array.</p>
      </article>
    </div>

    <div class="code-note">
      <strong>Form HTML (page 1):</strong>
      <pre>&lt;form method="POST" action="form_output.php"&gt;
  &lt;input type="text" name="first_name" /&gt;
  &lt;input type="text" name="last_name" /&gt;
  &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</pre>
    </div>

    <div class="code-note">
      <strong>PHP Processing (page 2):</strong>
      <pre>$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$full_name = $first_name . ' ' . $last_name;
$full_name_upper = strtoupper($full_name);</pre>
    </div>

    <h2>Data Processing Techniques</h2>
    <div class="grid">
      <article class="card">
        <h3>Concatenation</h3>
        <p>Combine strings with the <code>.</code> operator: <code>$first . ' ' . $last</code>.</p>
      </article>
      <article class="card">
        <h3>String Functions</h3>
        <p>Use <code>strtoupper()</code>, <code>strtolower()</code>, <code>strlen()</code>, <code>trim()</code>.</p>
      </article>
      <article class="card">
        <h3>Null Coalescing</h3>
        <p>Use <code>?? ''</code> to provide a default when a key is missing from <code>$_POST</code>.</p>
      </article>
    </div>

    <h2>Important Security Notes</h2>
    <ul>
      <li>POST data is not shown in the URL, but it still must be validated and handled securely.</li>
      <li>Always use <code>htmlspecialchars()</code> when displaying user input to prevent HTML injection.</li>
      <li>Validate and sanitize all user input before using it.</li>
      <li>POST is a better choice when data should not appear in the address bar.</li>
    </ul>

    <p><a href="index.php">Back to Site 18 index</a></p>
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
          <tr><td>FR1</td><td>a website with multiple pages, one of which has form elements (action, method, and name) to collect user input using POST</td></tr>
          <tr><td>FR2</td><td>N/A</td></tr>
          <tr><td>FR3</td><td>use PHP to assign form variables and process form data to display transformed string output</td></tr>
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
          <tr><td>FR8</td><td>validate required keyboard text inputs are not empty</td></tr>
          <tr><td>FR9</td><td>validate keyboard text length for each required field</td></tr>
          <tr><td>FR10</td><td>escape user-provided output using htmlspecialchars before rendering</td></tr>
          <tr><td>FR11</td><td>display clear success/output sections for submitted values</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
