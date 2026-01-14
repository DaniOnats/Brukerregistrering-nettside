<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', __DIR__ . '/php_errors.log');
error_reporting(E_ALL);

include "db.php";

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO data (username, email, password)
            VALUES ('$username', '$email', '$hash')";
    
    if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    exit();
    } else {
        echo "<p>Feil " . mysqli_error($conn) . "</p>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brukerregistrering</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Velkommen til Brukerregistrering nettside</h1>
        <p>Dette er enkelt nettside for å demonstrere Brukerregistrering op påloggning. </p>
        <p>Vennligst registrer deg eller log inn for å få tilgang til medlemsområdet. </p>

        <div class="skjema">
            <form action="" method="post">
                <label for="">Navn:</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="">E-post:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="">Passord:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit" name="register">Registrer</button>
            </form>
        </div>

        <h3> Allerede medlem? <a href="login.php">Logg in her</a></h3>

    </div>
</body>
</html>