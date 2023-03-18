<?php
// Initialize variables
$name = $_POST['name'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];
$grade = "";
$remarks = "";

// Calculate grade and remarks based on marks
switch ($marks) {
    case ($marks >= 90 && $marks <= 100):
        $grade = "A+";
        $remarks = "Excellent";
        break;
    case ($marks >= 80 && $marks < 90):
        $grade = "A";
        $remarks = "Very Good";
        break;
    case ($marks >= 70 && $marks < 80):
        $grade = "B";
        $remarks = "Good";
        break;
    case ($marks >= 60 && $marks < 70):
        $grade = "C";
        $remarks = "Average";
        break;
    case ($marks >= 50 && $marks < 60):
        $grade = "D";
        $remarks = "Below Average";
        break;
    case ($marks >= 40 && $marks < 50):
        $grade = "E";
        $remarks = "Poor";
        break;
    default:
        $grade = "F";
        $remarks = "Fail";
}

// Output marksheet
echo "<h1>Mark Sheet</h1>";
echo "<p>Name: $name</p>";
echo "<p>Subject: $subject</p>";
echo "<p>Marks: $marks</p>";
echo "<p>Grade: $grade</p>";
echo "<p>Remarks: $remarks</p>";
?>
