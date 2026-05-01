<?php
session_start();

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST["name"];
    $password = $_POST["password"];

    if (!empty($name) && !empty($password)) {

        if (file_exists($datafile)) {
            $existdata = file_get_contents($datafile);
            $users     = json_decode($existdata, true);

            $found = false;
            foreach ($users as $user) {
                if ($user["name"] == $name && $user["password"] == $password) {
                    $found = true;
                    break;
                }
            }

            if ($found) {
                $_SESSION["UserName"] = $name;
                setcookie("UserName", $name, time() + 3600, "/");
                echo "<h2 style='color:green'>Login Successful! Welcome, " . $name . "</h2>";
            } else {
                echo "<h2 style='color:red'>Invalid username or password!</h2>";
                echo "<a href='../View/Login.php'>Back to Login</a>";
            }

        } else {
            echo "<h2 style='color:red'>No users registered yet! Please register first.</h2>";
            echo "<a href='../View/Registration.php'>Go to Registration</a>";
        }

    } else {
        echo "<h2 style='color:red'>Name and Password cannot be empty!</h2>";
        echo "<a href='../View/Login.php'>Back to Login</a>";
    }

} else {
    header("Location: ../View/Login.php");
}
?>