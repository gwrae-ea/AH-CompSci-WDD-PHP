<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Marks Example</title>
</head>
<body>
  <h1>Student Marks Example</h1>
  <p>This is the example from the lesson showing student marks in different subjects.</p>

  <?php
    $marks = array( 
      "mohammad" => array (
        "physics" => 35,
        "maths" => 30,	
        "chemistry" => 39
      ),
      
      "qadir" => array (
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
      ),
      
      "zara" => array (
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
      )
    );
    
    /* Accessing multi-dimensional array values */
    echo "<h2>Individual Subject Marks</h2>";
    echo "Marks for mohammad in physics : " ;
    echo $marks['mohammad']['physics'] . "<br />"; 
    
    echo "Marks for qadir in maths : ";
    echo $marks['qadir']['maths'] . "<br />"; 
    
    echo "Marks for zara in chemistry : " ;
    echo $marks['zara']['chemistry'] . "<br />"; 

    echo "<h2>All Students and Their Marks</h2>";
    foreach ($marks as $student => $subjects) {
      echo "<h3>" . ucfirst($student) . "</h3>";
      foreach ($subjects as $subject => $mark) {
        echo "  " . ucfirst($subject) . ": " . $mark . "<br>";
      }
    }

    echo "<h2>Summary Statistics</h2>";
    foreach ($marks as $student => $subjects) {
      $total = array_sum($subjects);
      $average = $total / count($subjects);
      echo ucfirst($student) . " - Total: " . $total . ", Average: " . round($average, 2) . "<br>";
    }
  ?>

  <p><a href="index.php">← Back to Site 13</a></p>
</body>
</html>
