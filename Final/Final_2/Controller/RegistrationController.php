<?php
session_start();

$datafile = "../data.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST["name"];
    $password = $_POST["password"];

    if (!empty($name) && strlen($name) >= 5 && strlen($password) >= 4) {

        // Cookie ও Session set করো
        setcookie("UserName", $name, time() + 3600, "/");
        $_SESSION["UserName"] = $name;

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

        if (file_put_contents($datafile, $jsondata) !== false) {
            echo "Registration Successful! Data Saved.<br>";
        } else {
            echo "Error: Data could not be saved.";
        }

    } else {
        echo "Validation Failed! Name min 5 chars, Password min 4 chars.";
    }
}
?>