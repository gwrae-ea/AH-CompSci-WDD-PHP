<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees Form - Site 19</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 1: Employees Insert Form</h1>
    <p>Enter employee details and submit to insert a new Employees row.</p>
  </header>

  <main>
    <div class="code-note">
      <p><strong>Form method:</strong> POST</p>
      <p><strong>Form action:</strong> employee_insert.php</p>
      <p>This mirrors Site 18, but page 2 performs a database INSERT.</p>
    </div>

    <form method="POST" action="employee_insert.php" class="form-container">
      <fieldset>
        <legend>Employees Table Fields</legend>

        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required minlength="2" maxlength="20" placeholder="2-20 characters" />
        </div>

        <div class="form-group">
          <label for="salary">Salary:</label>
          <input type="number" id="salary" name="salary" required min="0" step="0.01" placeholder="e.g. 1200" />
        </div>

        <div class="form-group">
          <label for="department">Department:</label>
          <input type="text" id="department" name="department" required minlength="2" maxlength="20" placeholder="e.g. Sales" />
        </div>

        <div class="form-group">
          <label for="position">Position:</label>
          <input type="text" id="position" name="position" required minlength="2" maxlength="20" placeholder="e.g. Analyst" />
        </div>

        <div class="form-group">
          <label for="hireDate">Hire Date:</label>
          <input type="date" id="hireDate" name="hireDate" required />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Insert Employee</button>
    </form>

    <p><a href="index.php">Back to Site 19 index</a></p>
  </main>
</body>
</html>
