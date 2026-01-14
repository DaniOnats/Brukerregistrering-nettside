<?php
session_start();
include "db.php";

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM data WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        $feil = "Feil e-post";
    } else {
        if (!password_verify($password, $user["password"])) {
            $feil = "Feil passord";
        } else {
            $_SESSION["logout"] = true;
            $_SESSION["username"] = $user["username"];

            header("Location: medlem.php");
            exit();
        }        
    }
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Logg inn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Logg in</h1>

        <?php if (isset($feil)): ?>
            <p class="feil"><?php echo $feil; ?></p>
        <?php endif; ?>

        <form action="" method="post">
            <label for="">E-post:</label><br>
            <input type="email" name="email" placeholer="E-post" required><br><br>

            <label for="">Passord:</label><br>
            <input type="password" name="password" placeholer="Passord" required><br><br>

            <button type="submit" name="login">Logg inn</button>
        </form>

        <h3> Ikke medlem? <a href="index.php">Registrer her</a></h3>

    </div>
</body>
</html>