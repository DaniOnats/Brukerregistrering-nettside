<?php
session_start();
include "db.php";

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM data WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
    } else {
        echo "<p>Ingen bruker med denne e-posten</p>";
    }

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["innloget"] = true;
        $_SESSION["username"] = $user["username"];

        header("Location: medlem.php");
        exit();
    } else {
        $feil = "Feil e-post eller passord";
    }
}

?>