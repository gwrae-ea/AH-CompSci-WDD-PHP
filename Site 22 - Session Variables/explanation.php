<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explanation - Site 22</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Explanation: Session Variables</h1>
  </header>

  <main>
    <h2>Lesson Focus</h2>
    <p>Use <code>session_start()</code>, <code>$_SESSION</code>, and <code>session_destroy()</code> to store data that persists across multiple pages — without repeating it in the URL or the request body.</p>

    <h2>GET and POST: One Step Only</h2>
    <div class="grid">
      <article class="card">
        <h3>GET</h3>
        <p>Data travels in the URL query string. It is available on the <strong>next page only</strong> — the page the form submits to. If the user navigates to a third page, those values are gone.</p>
      </article>
      <article class="card">
        <h3>POST</h3>
        <p>Data travels in the request body. It is available on the <strong>next page only</strong> — the page the form posts to. It does not survive further navigation either.</p>
      </article>
      <article class="card">
        <h3>Session</h3>
        <p>Data is stored on the <strong>server</strong> and linked to the user by a cookie. Any page that calls <code>session_start()</code> can read and write the same <code>$_SESSION</code> values for the duration of the visit.</p>
      </article>
    </div>

    <h2>Key Functions</h2>
    <div class="grid">
      <article class="card">
        <h3>session_start()</h3>
        <p>Must be called at the top of <strong>every page</strong> that uses session data — before any HTML output. It resumes an existing session or creates a new one.</p>
      </article>
      <article class="card">
        <h3>$_SESSION</h3>
        <p>A superglobal associative array. Any value written to it on one page is available on the next page and every page beyond, as long as the session is active.</p>
      </article>
      <article class="card">
        <h3>session_destroy()</h3>
        <p>Ends the session and clears all <code>$_SESSION</code> values on the server. Useful for logging users out or resetting state completely.</p>
      </article>
    </div>

    <h2>How Sessions Work Step by Step</h2>
    <div class="code-note">
      <strong>Page 1 — store values:</strong>
      <pre>&lt;?php
session_start();
$_SESSION['username'] = 'Alice';
$_SESSION['score'] = 42;
?&gt;</pre>
    </div>

    <div class="code-note">
      <strong>Page 2 — read values (no GET or POST needed):</strong>
      <pre>&lt;?php
session_start();
$username = $_SESSION['username'] ?? 'Guest';
$score    = $_SESSION['score']    ?? 0;
?&gt;</pre>
    </div>

    <div class="code-note">
      <strong>Page 3 — destroy session:</strong>
      <pre>&lt;?php
session_start();
session_destroy();
// $_SESSION values are now cleared
?&gt;</pre>
    </div>

    <h2>Comparison Table</h2>
    <table class="data-table">
      <thead>
        <tr>
          <th>Feature</th>
          <th>GET</th>
          <th>POST</th>
          <th>Session</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Where data is stored</td>
          <td>URL query string</td>
          <td>Request body</td>
          <td>Server (linked by cookie)</td>
        </tr>
        <tr>
          <td>Visible to user</td>
          <td>Yes — in the URL</td>
          <td>No</td>
          <td>No (only a session ID cookie)</td>
        </tr>
        <tr>
          <td>Survives beyond next page</td>
          <td>No</td>
          <td>No</td>
          <td>Yes — until destroyed or expired</td>
        </tr>
        <tr>
          <td>Suitable for sensitive data</td>
          <td>No</td>
          <td>With HTTPS</td>
          <td>Yes (stored server-side)</td>
        </tr>
        <tr>
          <td>PHP superglobal</td>
          <td><code>$_GET</code></td>
          <td><code>$_POST</code></td>
          <td><code>$_SESSION</code></td>
        </tr>
      </tbody>
    </table>

    <h2>Important Notes</h2>
    <ul>
      <li>Call <code>session_start()</code> before any output — even a blank line above <code>&lt;?php</code> will cause a headers-already-sent error.</li>
      <li>After <code>session_destroy()</code>, call <code>$_SESSION = [];</code> first to also clear the in-memory array for the current request.</li>
      <li>Always use <code>htmlspecialchars()</code> when displaying session values — session data can still contain user-supplied input.</li>
      <li>Session IDs are stored in a cookie called <code>PHPSESSID</code> by default.</li>
    </ul>

    <p><a href="index.php">Back to Site 22 index</a></p>
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
          <tr><td>FR2</td><td>N/A</td></tr>
          <tr><td>FR3</td><td>N/A</td></tr>
          <tr><td>FR4</td><td>use PHP to assign and use session variables to persist values across multiple pages and clear them when required</td></tr>
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
          <tr><td>FR8</td><td>display session values consistently across separate pages</td></tr>
          <tr><td>FR9</td><td>validate keyboard input before writing values to session storage</td></tr>
          <tr><td>FR10</td><td>destroy session data and verify values are no longer available</td></tr>
          <tr><td>FR11</td><td>handle missing session data with clear user-facing fallback messaging</td></tr>
        </tbody>
      </table>
    </section>
    <!-- FR_STANDARD_END -->
</body>
</html>
