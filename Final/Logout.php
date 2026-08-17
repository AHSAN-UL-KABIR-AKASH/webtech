<?php

session_start();

unset($_SESSION["student_name"]);
unset($_SESSION["student_id"]);

header("Location: Dashboard.php");

exit();
?>