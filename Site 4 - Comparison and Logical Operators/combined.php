<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Combined Operators</title>
</head>
<body>
  <h1>Combined Operators: Complex Expressions</h1>

  <?php
    echo "<h2>Variables:</h2>";
    $age = 25;
    $income = 50000;
    $experience = 3;
    
    echo "&dollar;age = $age <br>";
    echo "&dollar;income = $income <br>";
    echo "&dollar;experience = $experience <br><br>";
    
    echo "<h2>Example 1: Loan Eligibility</h2>";
    echo "Requirement: age >= 18 AND income >= 40000 <br>";
    
    $eligible = ($age >= 18 && $income >= 40000);
    echo "Result: ";
    echo $eligible ? "✓ Eligible" : "✗ Not Eligible";
    echo "<br><br>";
    
    echo "<h2>Example 2: Discount Eligibility</h2>";
    echo "Requirement: (experience > 2 OR age < 20) AND income < 60000 <br>";
    
    $discount = (($experience > 2 || $age < 20) && $income < 60000);
    echo "Result: ";
    echo $discount ? "✓ Eligible for discount" : "✗ Not eligible for discount";
    echo "<br><br>";
    
    echo "<h2>Example 3: Premium Member Check</h2>";
    echo "Requirement: NOT(income < 50000 AND age < 18) <br>";
    
    $premium = !($income < 50000 && $age < 18);
    echo "Result: ";
    echo $premium ? "✓ Premium member" : "✗ Not premium member";
    echo "<br><br>";
    
    echo "<h2>Example 4: Job Classification</h2>";
    echo "Requirement: (experience >= 3 && income >= 40000) OR (age > 30) <br>";
    
    $senior = (($experience >= 3 && $income >= 40000) || ($age > 30));
    echo "Result: ";
    echo $senior ? "✓ Senior role" : "✗ Junior role";
    echo "<br><br>";
    
    echo "<h2>Example 5: Alert Condition</h2>";
    echo "Requirement: !(age >= 18 && income >= 40000) <br>";
    
    $alert = !($age >= 18 && $income >= 40000);
    echo "Result: ";
    echo $alert ? "⚠ Alert Needed" : "✓ No alert needed";
    echo "<br>";
  ?>

  <p><a href="index.php">← Back to Site 4</a></p>
</body>
</html>
