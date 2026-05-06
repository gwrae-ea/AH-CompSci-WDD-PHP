<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employees Delete Form - Site 21</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Page 1: Employees Delete Form</h1>
    <p>Enter an Employee ID to delete that row from the Employees table.</p>
  </header>

  <main>
    <div class="code-note">
      <p><strong>Form method:</strong> POST</p>
      <p><strong>Form action:</strong> employee_delete.php</p>
      <p>Tip: use Site 16 SELECT pages first to find a valid Employee ID.</p>
    </div>

    <form method="POST" action="employee_delete.php" class="form-container">
      <fieldset>
        <legend>Employees DELETE Fields</legend>

        <div class="form-group">
          <label for="id">Employee ID to Delete:</label>
          <input type="number" id="id" name="id" required min="1" />
        </div>
      </fieldset>

      <button type="submit" class="submit-btn">Delete Employee</button>
    </form>

    <p><a href="index.php">Back to Site 21 index</a></p>
  </main>
</body>
</html>
