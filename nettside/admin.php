<?php
session_start();
include "db.php";

if (!isset($_SESSION["logout"]) || $_SESSION["logout"] !== true) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    echo "<p> Du har ikke tilgang til denne siden.</p>";
    exit();
}

$sql = "SELECT id, username, email, role FROM data ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): { ?>
        <tr>
            <td><?php echo ($row['id']); ?></td>
            <td><?php echo ($row['username']); ?></td>
            <td><?php echo ($row['email']); ?></td>
            <td><?php echo ($row['role']); ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>