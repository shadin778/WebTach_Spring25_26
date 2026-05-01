<!DOCTYPE html>
<html>
<body>
    <h1 style='color:red'>Login Page</h1>
    <form method="post" action="../Controller/LoginController.php">
        <table>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"/></td>
            </tr>
        </table>
    </form>
</body>
</html>