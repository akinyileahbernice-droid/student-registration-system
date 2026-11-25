<?php

include("db.php");

$result = mysqli_query(
$conn,
"SELECT * FROM students"
);

?>

<!DOCTYPE html>
<html>

<head>
<title>Students</title>
</head>

<body>

<h2>Registered Students</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Reg No</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['student_id']; ?></td>
<td><?php echo $row['reg_no']; ?></td>
<td><?php echo $row['full_name']; ?></td>
<td><?php echo $row['email']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>