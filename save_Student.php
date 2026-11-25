<?php

include("db.php");

$reg_no = $_POST['reg_no'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];

$sql = "INSERT INTO students
(reg_no, full_name, email)
VALUES
('$reg_no','$full_name','$email')";

if(mysqli_query($conn,$sql))
{
    echo "Student Registered Successfully";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>