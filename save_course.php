<?php

include("dp.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed.");
}

$student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
$course_id = filter_input(INPUT_POST, "course_id", FILTER_VALIDATE_INT);
$semester = trim($_POST["semester"] ?? "");

if ($student_id === false || $student_id === null || $student_id < 1
    || $course_id === false || $course_id === null || $course_id < 1
    || $semester === "" || strlen($semester) > 20) {
    http_response_code(400);
    exit("Please provide a valid student, course ID, and semester (up to 20 characters).");
}

$stmt = mysqli_prepare(
    $conn,
    "INSERT INTO registrations (student_id, course_id, semester) VALUES (?, ?, ?)"
);

if (!$stmt) {
    http_response_code(500);
    exit("Unable to prepare course registration.");
}

mysqli_stmt_bind_param($stmt, "iis", $student_id, $course_id, $semester);

if (mysqli_stmt_execute($stmt)) {
    echo "Course Registration Successful";
} else {
    http_response_code(400);
    echo "Unable to register course. Check that the student and course exist.";
}

mysqli_stmt_close($stmt);
?>