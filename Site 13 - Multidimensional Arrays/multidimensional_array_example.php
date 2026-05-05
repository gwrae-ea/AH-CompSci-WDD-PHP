<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multidimensional Array Example</title>
</head>
<body>
  <h1>Two-Dimensional Array Example</h1>
  <p>This page demonstrates creating and accessing values in a simple 2D array.</p>

  <?php
    echo "<h2>Creating a 2D Array</h2>";
    
    $inventory = array(
      "electronics" => array(
        "laptop" => 5,
        "phone" => 12,
        "tablet" => 8
      ),
      "clothing" => array(
        "shirt" => 20,
        "pants" => 15,
        "shoes" => 10
      ),
      "books" => array(
        "fiction" => 25,
        "technical" => 18,
        "biography" => 12
      )
    );

    echo "<h2>Accessing Individual Values</h2>";
    echo "Laptops in stock: " . $inventory['electronics']['laptop'] . "<br>";
    echo "Shirts in stock: " . $inventory['clothing']['shirt'] . "<br>";
    echo "Fiction books in stock: " . $inventory['books']['fiction'] . "<br>";

    echo "<h2>Looping Through All Values</h2>";
    foreach ($inventory as $category => $items) {
      echo "<h3>" . ucfirst($category) . "</h3>";
      foreach ($items as $item => $quantity) {
        echo "  " . ucfirst($item) . ": " . $quantity . "<br>";
      }
    }
  ?>

  <p><a href="index.php">← Back to Site 13</a></p>
</body>
</html>
