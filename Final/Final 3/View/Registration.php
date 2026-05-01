<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1 style="color:blue">Registration Page</h1>
    <form method="post" action="../Controller/RegistrationController.php">
        <table>
            <tr>
                <td><label>User Name:</label></td>
                <td><input type="text" name="name" placeholder="Min 5 characters"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" placeholder="Min 4 characters"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>