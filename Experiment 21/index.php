
<!DOCTYPE html>
<html>

<head>
    <title>PHP GET and POST</title>
</head>

<body>

    <h1>Student Registration Form</h1>

    <!-- GET METHOD -->
    <h2>Form Using GET Method</h2>

    <form method="GET">

        Name:
        <input type="text" name="getName" required>
        <br><br>

        Course:
        <input type="text" name="getCourse" required>
        <br><br>

        <input type="submit" value="Submit Using GET">

    </form>

    <?php

    // HANDLE GET DATA
    if (isset($_GET["getName"])) {

        echo "<h3>GET Form Data</h3>";

        echo "Name: " . htmlspecialchars($_GET["getName"]) . "<br>";
        echo "Course: " . htmlspecialchars($_GET["getCourse"]) . "<br>";

    }

    ?>

    <hr>

    <!-- POST METHOD -->
    <h2>Form Using POST Method</h2>

    <form method="POST">

        Name:
        <input type="text" name="postName" required>
        <br><br>

        Course:
        <input type="text" name="postCourse" required>
        <br><br>

        <input type="submit" value="Submit Using POST">

    </form>

    <?php

    // HANDLE POST DATA
    if (isset($_POST["postName"])) {

        echo "<h3>POST Form Data</h3>";

        echo "Name: " . htmlspecialchars($_POST["postName"]) . "<br>";
        echo "Course: " . htmlspecialchars($_POST["postCourse"]) . "<br>";

    }

    ?>

</body>
</html>
