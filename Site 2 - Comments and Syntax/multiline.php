<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-line Printing</title>
</head>
<body>
  <h1>Multi-line Printing in PHP</h1>

  <?php
    $variable = "values";

    print <<<END
This uses the here document syntax to output
multiple lines with $variable interpolation.
The terminator must appear on a line by itself.
END;

    print "<br><br>";

    print "This spans
multiple lines. The newlines will be
output as well.";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
