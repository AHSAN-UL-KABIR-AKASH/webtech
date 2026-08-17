<?php

setcookie(
    "student_name",
    "",
    time() - 3600,
    "/"
);

header("Location: Dashboard.php");

exit();

?>