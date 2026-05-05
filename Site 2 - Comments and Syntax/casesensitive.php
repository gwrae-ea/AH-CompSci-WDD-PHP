<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Case Sensitive</title>
</head>
<body>
  <h1>PHP is Case Sensitive</h1>

  <?php
    $capital = 67;
    print("Variable capital is $capital<br>");

    // CaPiTaL is not the same variable name as capital.
    print("Variable CaPiTaL is ");
    print(isset($CaPiTaL) ? $CaPiTaL : "undefined");
    print("<br>");
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
