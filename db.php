<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "university_registration"
);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>