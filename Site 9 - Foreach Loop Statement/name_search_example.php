<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foreach Name Search Example</title>
</head>
<body>
  <h1>Foreach Name Search Example</h1>
  <p>This example checks an array of names and displays a message when the target name is found.</p>

  <?php
    $names = array("Aisha", "Ben", "Chris", "Dina", "Ella");
    $targetName = "Chris";
    $nameFound = false;

    foreach ($names as $name) {
      echo "Checking $name<br>";

      if ($name == $targetName) {
        echo "<p>$targetName was found in the list.</p>";
        $nameFound = true;
      }
    }

    if (!$nameFound) {
      echo "<p>$targetName was not found in the list.</p>";
    }
  ?>

  <p><a href="index.php">← Back to Site 9</a></p>
</body>
</html>