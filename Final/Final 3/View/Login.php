<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1 style="color:red">Login Page</h1>
    <form method="post" action="../Controller/LoginController.php">
        <table>
            <tr>
                <td><label>User Name:</label></td>
                <td><input type="text" name="name" placeholder="Enter your name"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" placeholder="Enter your password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>