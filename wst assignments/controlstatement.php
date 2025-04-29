<!DOCTYPE html>
<html>
<head>
  <title>PHP Control Structure Demo</title>
</head>
<body>
  <h2>PHP Control Structures</h2>
  <?php
    $number = 15;

    // If-Else-If
    echo "<h3>1. If-Else-If</h3>";
    if ($number < 10) {
      echo "$number is less than 10<br>";
    } elseif ($number == 10) {
      echo "$number is equal to 10<br>";
    } else {
      echo "$number is greater than 10<br>";
    }

    // Switch
    echo "<h3>2. Switch Case</h3>";
    $day = "Monday";
    switch ($day) {
      case "Monday":
        echo "Start of the work week<br>";
        break;
      case "Friday":
        echo "End of the work week<br>";
        break;
      default:
        echo "It's just another day<br>";
    }

    // For Loop
    echo "<h3>3. For Loop</h3>";
    for ($i = 1; $i <= 5; $i++) {
      echo "Count: $i<br>";
    }

    // While Loop
    echo "<h3>4. While Loop</h3>";
    $j = 1;
    while ($j <= 3) {
      echo "While count: $j<br>";
      $j++;
    }

    // Do-While Loop
    echo "<h3>5. Do-While Loop</h3>";
    $k = 1;
    do {
      echo "Do-While count: $k<br>";
      $k++;
    } while ($k <= 2);

    // Foreach Loop
    echo "<h3>6. Foreach Loop</h3>";
    $fruits = array("Apple", "Banana", "Cherry");
    foreach ($fruits as $fruit) {
      echo "Fruit: $fruit<br>";
    }
  ?>
</body>
</html>
