<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 17</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Form GET and Data Processing</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use an HTML form with <code>method="GET"</code> to send user input to a PHP page, then store that input in PHP variables and process it.</p>

    <h2>How GET Forms Work</h2>
    <div class="grid">
      <article class="card">
        <h3>Form Submission</h3>
        <p>User fills out input fields and clicks a submit button, triggering a GET request.</p>
      </article>
      <article class="card">
        <h3>Query String</h3>
        <p>Form data is encoded into the URL as <code>?name=value&amp;other=value</code>.</p>
      </article>
      <article class="card">
        <h3>PHP Reception</h3>
        <p>The receiving page reads form data from the <code>$_GET</code> superglobal array.</p>
      </article>
    </div>

    <div class="code-note">
      <strong>Form HTML (page 1):</strong>
      <pre>&lt;form method="GET" action="form_output.php"&gt;
  &lt;input type="text" name="first_name" /&gt;
  &lt;input type="text" name="last_name" /&gt;
  &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</pre>
    </div>

    <div class="code-note">
      <strong>PHP Processing (page 2):</strong>
      <pre>$first_name = $_GET['first_name'] ?? '';
$last_name = $_GET['last_name'] ?? '';
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
        <p>Use <code>?? ''</code> to provide a default when a key is missing from <code>$_GET</code>.</p>
      </article>
    </div>

    <h2>Important Security Notes</h2>
    <ul>
      <li>GET data is visible in the URL and should never contain passwords.</li>
      <li>Always use <code>htmlspecialchars()</code> when displaying user input to prevent HTML injection.</li>
      <li>Validate and sanitize all user input before using it.</li>
      <li>GET is appropriate for searches and filters; POST is better for sensitive data.</li>
    </ul>

    <p><a href="index.php">Back to Site 17 index</a></p>
    <p class="no-print"><a href="../index.php">Back to main hub</a></p>
  </main>
</body>
</html>
