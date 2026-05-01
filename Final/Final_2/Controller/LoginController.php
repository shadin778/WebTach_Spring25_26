<?php
session_start();

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST["name"];
    $password = $_POST["password"];

    if (!empty($name) && !empty($password)) {

        $_SESSION["UserName"] = $name;
        setcookie("UserName", $name, time() + 3600, "/");

      
        if (file_exists($datafile)) {
            $existdata = file_get_contents($datafile);
            $tempdata  = json_decode($existdata, true);
        } else {
            $tempdata = array();
        }

        if (!is_array($tempdata)) {
            $tempdata = array();
        }

        $tempdata[] = array("name" => $name, "password" => $password);
        $jsondata   = json_encode($tempdata, JSON_PRETTY_PRINT);
        file_put_contents($datafile, $jsondata);

        echo "<h2 style='color:green'>Login Successful! Welcome, " . $name . "</h2>";

    } else {
        echo "<h2 style='color:red'>Name and Password </h2>";
    }

} else {
    header("Location: ../View/Login.php");
}
?>