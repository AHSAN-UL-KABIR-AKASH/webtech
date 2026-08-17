<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Dashboard</title>

</head>

<body>

    <h1>Student Dashboard</h1>

    <hr>

    <h2>Session Data</h2>

    <?php

    if (isset($_SESSION["student_name"])) {

        echo "Session exists.<br>";

        echo "Student Name: ";
        echo $_SESSION["student_name"];

        echo "<br>";

        echo "Student ID: ";
        echo $_SESSION["student_id"];
    } else {

        echo "No Session.";
    }

    ?>

    <hr>

    <h2>Cookie Data</h2>

    <?php

    if (isset($_COOKIE["student_name"])) {

        echo "Cookie exists.<br>";

        echo "Cookie Name: student_name<br>";

        echo "Cookie Value: ";
        echo $_COOKIE["student_name"];
    } else {

        echo "No Cookie.";
    }

    ?>

    <hr>

    <h2>Remove</h2>

    <a href="Logout.php">
        <button>Remove Session</button>
    </a>

    <a href="Remove_cookie.php">
        <button>Remove Cookie</button>
    </a>

</body>

</html>