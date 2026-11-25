<?php

include("dp.php");

$result = mysqli_query($conn, "SELECT student_id, full_name FROM students");

if (!$result) {
    die("Unable to load students.");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Course Registration</title>
</head>
<body>

<h2>Course Registration</h2>

<form action="save_coarse.php" method="POST">

<select name="student_id">

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<option value="<?php echo htmlspecialchars($row['student_id'], ENT_QUOTES, "UTF-8"); ?>">
<?php echo htmlspecialchars($row['full_name'], ENT_QUOTES, "UTF-8"); ?>
</option>

<?php
}
?>

</select>

<br><br>

Course ID:
<input type="number" name="course_id" min="1" required>

<br><br>

Semester:
<input type="text" name="semester" maxlength="20" required>

<br><br>

<button type="submit">
Register Course
</button>

</form>

</body>
</html>