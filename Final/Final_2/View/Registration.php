<?php

include "../Controller/RegistrationController.php";
?>
<!DOCTYPE html>
<html>
<body>
    <form method="post" action="../Controller/RegistrationController.php">
        <table>
            <tr>
                <td><label>User Name:</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>