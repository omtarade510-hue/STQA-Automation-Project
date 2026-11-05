
<?php

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    // Regular Expression validation
    if (!preg_match("/^[A-Za-z ]+$/", $fullname)) {
        die("Invalid name!");
    }

    if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email)) {
        die("Invalid email!");
    }

    if (!preg_match("/^[6-9][0-9]{9}$/", $mobile)) {
        die("Invalid mobile number!");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data
    $stmt = $conn->prepare(
        "INSERT INTO users (fullname, email, mobile, dob, password)
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "sssss",
        $fullname,
        $email,
        $mobile,
        $dob,
        $hashedPassword
    );

    if ($stmt->execute()) {
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Your details have been saved successfully.</p>";
        echo '<a href="index.php">Back to Registration</a>';
    } else {
        echo "Registration failed. Email may already exist.";
    }

    $stmt->close();
    $conn->close();
}
?>
