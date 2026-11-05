
<!DOCTYPE html>
<html>
<head>
    <title>COVID-19 Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>COVID-19 Information Portal</h1>
    <h2>User Registration</h2>

    <form action="signup.php" method="POST">

        <label>Full Name</label>
        <input type="text" name="fullname"
               placeholder="Enter your full name" required>

        <label>Email Address</label>
        <input type="email" name="email"
               placeholder="Enter your email" required>

        <label>Mobile Number</label>
        <input type="text" name="mobile"
               placeholder="Enter 10 digit mobile number"
               maxlength="10" required>

        <label>Date of Birth</label>
        <input type="date" name="dob" required>

        <label>Password</label>
        <input type="password" name="password"
               placeholder="Enter password" required>

        <button type="submit">Register</button>

    </form>

</div>

</body>
</html>
