<?php
if (!isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

<h2>Xin chào <?php echo $_COOKIE['username']; ?></h2>

<a href="logout.php">Đăng xuất</a>

</body>
</html>
