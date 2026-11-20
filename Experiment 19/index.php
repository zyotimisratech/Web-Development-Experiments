
<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP Program</title>
</head>
<body>
    <h1>Introduction to PHP</h1>
    <?php
    // VARIABLES AND DATA TYPES
    $name = "Jyoti";
    $course = "B.Tech Data Science";
    $age = 20;
    $marks = 95.5;
    $passed = true;
    // DISPLAY INFORMATION
    echo "<h2>Student Information</h2>";
    echo "Name: " . $name . "<br>";
    echo "Course: " . $course . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Marks: " . $marks . "<br>";
    // ARITHMETIC OPERATORS
    $a = 20;
    $b = 10;
    echo "<h2>Arithmetic Operations</h2>";
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";
    echo "Division: " . ($a / $b) . "<br>";
    // IF-ELSE STATEMENT
    echo "<h2>Result</h2>";
    if ($marks >= 40) {
        echo "Status: Passed";
    }
    else {
        echo "Status: Failed";
    }
    ?>
</body>
</html>
