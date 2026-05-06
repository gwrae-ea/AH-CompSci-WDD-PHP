<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees Update Form - Site 20</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 1: Employees Update Form</h1>
    <p>Enter an existing employee ID and replacement values.</p>
  </header>

  <main>
    <div class="code-note">
      <p><strong>Form method:</strong> POST</p>
      <p><strong>Form action:</strong> employee_update.php</p>
      <p>Tip: first use Site 16 SELECT pages to find a valid Employees ID.</p>
    </div>

    <form method="POST" action="employee_update.php" class="form-container">
      <fieldset>
        <legend>Employees UPDATE Fields</legend>

        <div class="form-group">
          <label for="id">Employee ID to Update:</label>
          <input type="number" id="id" name="id" required min="1" />
        </div>

        <div class="form-group">
          <label for="salary">New Salary:</label>
          <input type="number" id="salary" name="salary" required min="0" step="0.01" />
        </div>

        <div class="form-group">
          <label for="department">New Department:</label>
          <input type="text" id="department" name="department" required minlength="2" maxlength="20" />
        </div>

        <div class="form-group">
          <label for="position">New Position:</label>
          <input type="text" id="position" name="position" required minlength="2" maxlength="20" />
        </div>

        <div class="form-group">
          <label for="hireDate">New Hire Date:</label>
          <input type="date" id="hireDate" name="hireDate" required />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Update Employee</button>
    </form>

    <p><a href="index.php">Back to Site 20 index</a></p>
  </main>
</body>
</html>
