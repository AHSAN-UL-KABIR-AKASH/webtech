<?php

session_start();

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    if ($name != "" && $id != "" && $email != "" && $department != "") {

        // Session

        $_SESSION["student_name"] = $name;
        $_SESSION["student_id"] = $id;

        // Cookie

        setcookie(
            "student_name",
            $name,
            time() + 3600,
            "/"
        );

        header("Location: Dashboard.php");

        exit();
    } else {

        echo "All fields are required.";
    }
}

