<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Whitespace Insensitive</title>
</head>
<body>
  <h1>PHP is Whitespace Insensitive</h1>

  <?php
    $fourA = 2 + 2;
    $fourB	=	2	+	2;
    $fourC =
      2 +
      2;

    print "fourA = $fourA<br>";
    print "fourB = $fourB<br>";
    print "fourC = $fourC<br>";
  ?>

  <p>All three assignments are equivalent.</p>
  <p><a href="index.php">Back to index</a></p>
</body>
</html>
