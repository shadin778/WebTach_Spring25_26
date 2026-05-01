<!DOCTYPE html>
<html>
<body>

<form method="post">
    <h1 style="color:red;">LogIn Page</h1>

    User Name: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<h3>Output:</h3>";
    echo "Username: $username <br>";
    echo "Password: $password";
}
?>

</body>
</html>
