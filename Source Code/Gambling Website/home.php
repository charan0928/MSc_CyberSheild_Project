<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - Online Gambling</title>
</head>
<body>
    <h2>Hi, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Place your bets!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
