<html>
    <head></head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access username and password from the $_POST array
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example: Perform authentication logic (e.g., check credentials against database)

    if ($username === "bibhav" && $password === "46258") {
        echo "Login successful!";
        // Redirect to a secure page or perform further actions
        // header("Location: secure_page.php");
        // exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
<form  method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <button type="submit">Login</button>
</form>
</body>
</html>


