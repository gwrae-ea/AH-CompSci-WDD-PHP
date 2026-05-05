<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Task Workspace - Site 9</title>
</head>
<body>
  <h1>Your Task Workspace</h1>
  <p>Learn from the example below, then complete your own coding challenge.</p>

  <h2>Example: Name Search with Foreach Loop</h2>
  <p>This example uses a foreach loop to search through an array of names and display a message when the target name is found.</p>

  <?php
    $names = array("Aisha", "Ben", "Chris", "Dina", "Ella");
    $targetName = "Ben";
    $nameFound = false;

    foreach ($names as $name) {
      if ($name == $targetName) {
        echo "<p>Hello, $targetName. Your name was found in the list.</p>";
        $nameFound = true;
      }
    }

    if (!$nameFound) {
      echo "<p>$targetName was not found in the list.</p>";
    }
  ?>

  <hr>

  <h2>Your Challenge</h2>
  <p><strong>Create your own array and search for a value</strong> using a foreach loop.</p>
  <p><strong>Requirements:</strong></p>
  <ul>
    <li>Create an array with at least 5 items (could be names, colors, animals, foods, etc.)</li>
    <li>Choose a target item to search for</li>
    <li>Use a foreach loop to check each item</li>
    <li>Display a custom message if the item is found</li>
    <li>Display a custom message if the item is NOT found</li>
  </ul>

  <h3>Your Code (edit below):</h3>

  <?php
    // YOUR TASK: Create your own array and search for a value
    // Example structure:
    // $items = array("item1", "item2", "item3", "item4", "item5");
    // $targetItem = "item3";
    // $itemFound = false;
    //
    // foreach ($items as $item) {
    //   if ($item == $targetItem) {
    //     echo "Found: $targetItem<br>";
    //     $itemFound = true;
    //   }
    // }
    //
    // if (!$itemFound) {
    //   echo "$targetItem was not found.<br>";
    // }
    
    echo "<p style='color: #999;'><em>[Add your foreach loop array search here.]</em></p>";
  ?>

  <p><a href="index.php">← Back to Site 9</a></p>
</body>
</html>