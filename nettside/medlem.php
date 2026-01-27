<?php 
session_start();

if (!isset($_SESSION["logout"])) {
    header("Location: index.php");
    exit();
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
        <p>Gratulerer! Du har fullført testen og fått tillgang.</p>
        <p>Nå kan du se på dette nydelige bildet.</p>
        <img src="https://preview.redd.it/whos-the-best-sidemen-or-your-favourite-v0-pak3gv2tcoef1.jpeg?auto=webp&s=ee35d1a1b879ef6767a942211298690e7ae7c8c9" style="max-width:75%; height:auto;">

        <form action="logout.php" method="post">
            <button type="submit">Logg ut</button>
        </form>

        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
            echo '<h3> Tror du at du har tilgang? <a href="admin.php">Admin panel</a></h3>';
            }
        ?>
    </div>
</body>
</html>
