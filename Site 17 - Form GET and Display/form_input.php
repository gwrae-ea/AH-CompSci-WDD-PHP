<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input - Site 17</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 1: Input Form</h1>
    <p>Fill out this form and submit to see your data processed on page 2.</p>
  </header>

  <main>
    <div class="code-note">
      <p><strong>Form method:</strong> GET</p>
      <p><strong>Form action:</strong> form_output.php</p>
      <p>When you submit, the form data will appear in the URL query string and be processed on the next page.</p>
    </div>

    <form method="GET" action="form_output.php" class="form-container">
      <fieldset>
        <legend>Personal Information</legend>

        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" id="first_name" name="first_name" required minlength="2" maxlength="10" placeholder="2-10 characters" />
        </div>

        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" id="last_name" name="last_name" required minlength="2" maxlength="10" placeholder="2-10 characters" />
        </div>

        <div class="form-group">
          <label for="hobby">Favorite Hobby:</label>
          <input type="text" id="hobby" name="hobby" required minlength="2" maxlength="10" placeholder="2-10 characters" />
        </div>

        <div class="form-group">
          <label for="favorite_color">Favorite Color:</label>
          <input type="text" id="favorite_color" name="favorite_color" required minlength="2" maxlength="10" placeholder="2-10 characters" />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Submit Form</button>
    </form>

    <div class="code-note">
      <p><strong>Try it:</strong> Fill in the form above and click Submit. Watch the URL change to include your input data, then page 2 will process and display it.</p>
    </div>

    <p><a href="index.php">Back to Site 17 index</a></p>
  </main>
</body>
</html>
