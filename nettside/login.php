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
        if ($user && password_verify($password, $user["password"])) {
            $feil = "Feil e-post eller passord";
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
<html lang="en">
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
            <input type="email" name="email" placeholer="E-post" required>
            <input type="password" name="password" placeholer="Passord" required>
            <button type="submit" name="login">Logg inn</button>
        </form>
    </div>
</body>
</html>