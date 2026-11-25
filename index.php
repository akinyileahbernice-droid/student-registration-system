<!DOCTYPE html>
<html>
<head>
    <title>University Registration System</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="save_student.php" method="POST">

    Registration Number:
    <input type="text" name="reg_no" required><br><br>

    Full Name:
    <input type="text" name="full_name" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    <button type="submit">
        Register Student
    </button>

</form>

</body>
</html>