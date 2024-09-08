<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $enum = $_POST["enum"];
    $semester = $_POST["semester"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Display collected data
    echo "<h2>Registration Successful!</h2>";
    echo "<p>Firstname: $firstname</p>";
    echo "<p>Middlename: $middlename</p>";
    echo "<p>Lastname: $lastname</p>";
    echo "<p>Enrollment No: $enum</p>";
    echo "<p>Semester: $semester</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Current Address: $address</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Confirm Password: $confirm_password</p>";
} else {
    // Handle if form is not submitted properly
    echo "<h2>Error: Form not submitted!</h2>";
}
?>
