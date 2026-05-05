<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays Data Type</title>
</head>
<body>
  <h1>Arrays - Collections of Values</h1>

  <?php
    // Indexed array
    $fruits = array("Apple", "Banana", "Orange");
    print "Fruits array:<br>";
    print $fruits[0] . "<br>";
    print $fruits[1] . "<br>";
    print $fruits[2] . "<br>";

    // Associative array
    $person = array(
      "name" => "John",
      "age" => 25,
      "city" => "London"
    );

    print "Person array:<br>";
    print "Name: " . $person["name"] . "<br>";
    print "Age: " . $person["age"] . "<br>";
    print "City: " . $person["city"] . "<br>";

    // Array length
    print "Number of fruits: " . count($fruits) . "<br>";
    print "Number of person properties: " . count($person) . "<br>";

    // Check if value is array
    print "Is fruits an array? ";
    print(is_array($fruits) ? "yes" : "no");
    print "<br>";
  ?>

  <p><a href="index.php">Back to index</a></p>
</body>
</html>
