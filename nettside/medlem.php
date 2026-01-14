<?php 
session_start();

if (!isset($_SESSION["logout"])) {
    header("Location: index.php");
    exit();
}

if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
    echo '<a href="admin.php">Admin Panel</a>';
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Medlemsområdet</title>
</head>
<body>
    <div class="container">
        <h1>Velkommen til medlemsområdet</h1>
        <p>Du har fullført testen og fått tillgang.</p>
        <p> Systemet lover en belønning på slutten. <strong>The cake is a lie.</strong></p>

        <p>
            <em>Gåte:</em><br>
            Hvis et system alltid lover belønning,
            men aldri leverer hvem er det egentlig som blir testet?
        </p>

        <form action="logout.php" method="post">
            <button type="submit">Logg ut</button>
        </form>

        <h3> Tror du at du har tilgang? <a href="admin.php">Admin panel</a></h3>

    </div>
</body>
</html>