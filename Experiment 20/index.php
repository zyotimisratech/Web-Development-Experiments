<!DOCTYPE html>
<html>
<head>
    <title>PHP Student Result</title>
</head>
<body>
    <h1>Student Result System</h1>
    <?php
    // VARIABLES
    $name = "Jyoti";
    $rollNo = 50;
    // ARRAY OF SUBJECT MARKS
    $marks = array(95, 96, 92, 88, 92);
    // FUNCTION TO CALCULATE TOTAL
    function calculateTotal($marks) {

        $total = 0;

        foreach ($marks as $mark) {
            $total = $total + $mark;
        }

        return $total;
    }

    // FUNCTION TO CALCULATE AVERAGE
    function calculateAverage($total, $count) {

        return $total / $count;

    }

    // DISPLAY STUDENT DETAILS
    echo "<h2>Student Information</h2>";

    echo "Name: " . $name . "<br>";
    echo "Roll Number: " . $rollNo . "<br>";

    // FOR LOOP TO DISPLAY MARKS
    echo "<h2>Subject Marks</h2>";

    for ($i = 0; $i < count($marks); $i++) {

        echo "Subject " . ($i + 1) . ": " . $marks[$i] . "<br>";

    }

    // FUNCTION CALLS
    $total = calculateTotal($marks);
    $average = calculateAverage($total, count($marks));

    // DISPLAY RESULT
    echo "<h2>Result</h2>";

    echo "Total Marks: " . $total . "<br>";
    echo "Average Marks: " . $average . "<br>";

    // IF-ELSE CONTROL STATEMENT
    if ($average >= 40) {
        echo "Result: Pass<br>";
    }
    else {
        echo "Result: Fail<br>";
    }
    // SWITCH CONTROL STATEMENT
    switch (true) {
        case ($average >= 90):
            echo "Grade: A";
            break;
        case ($average >= 75):
            echo "Grade: B";
            break;
        case ($average >= 60):
            echo "Grade: C";
            break;
        default:
            echo "Grade: D";
    }
    ?>
</body>
</html>
