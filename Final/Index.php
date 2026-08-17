<!DOCTYPE html>
<html>

<head>

    <title>Student Registration</title>

</head>

<body>

    <h1>Student Registration System</h1>

    <hr>

    <form action="submit.php" method="POST">

        Student Name:

        <input
            type="text"
            name="name"
            placeholder="Enter your name">

        <br><br>

        Student ID:

        <input
            type="text"
            name="id"
            placeholder="Enter your ID">

        <br><br>

        Email:

        <input
            type="email"
            name="email"
            placeholder="Enter your email">

        <br><br>

        Department:

        <input
            type="text"
            name="department"
            placeholder="Enter your department">

        <br><br>

        <button type="Submit" name="Submit">
            Register
        </button>

    </form>

</body>

</html>
