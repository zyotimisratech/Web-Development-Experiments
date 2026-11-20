
<!DOCTYPE html>
<html>
<head>
    <title>PHP File Handling</title>
</head>
<body>

    <h1>File Handling in PHP</h1>

    <?php

    $file = "student.txt";

    // 1. Create and write data
    $handle = fopen($file, "w");

    fwrite($handle, "Name: Jyoti\n");
    fwrite($handle, "Course: B.Tech Data Science\n");

    fclose($handle);

    echo "<h3>File Content:</h3>";

    // 2. Read the file
    $handle = fopen($file, "r");
    echo nl2br(fread($handle, filesize($file)));
    fclose($handle);

    // 3. Append new data
    $handle = fopen($file, "a");

    fwrite($handle, "Semester: Third\n");

    fclose($handle);

    // Refresh file information
    clearstatcache();

    echo "<h3>Updated File Content:</h3>";

    // 4. Read updated file
    $handle = fopen($file, "r");

    echo nl2br(fread($handle, filesize($file)));

    fclose($handle);

    ?>

</body>
</html>
