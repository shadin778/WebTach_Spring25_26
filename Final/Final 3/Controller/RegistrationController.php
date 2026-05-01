<?php
session_start();

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST["name"];
    $password = $_POST["password"];

    if (!empty($name) && strlen($name) >= 5 && strlen($password) >= 4) {

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

        header("Location: ../View/Login.php");
        exit();

    } else {
        echo "<h2 style='color:red'>Name must be at least 5 characters and Password at least 4 characters!</h2>";
        echo "<a href='../View/Registration.php'>Back to Registration</a>";
    }

} else {
    header("Location: ../View/Registration.php");
}
?>