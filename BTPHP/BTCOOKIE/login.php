<?php
if (isset($_POST['username'])) {
    setcookie("username", $_POST['username'], time() + 600, "/");
    header("Location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Đăng nhập</h2>

<form method="post">
    Tên đăng nhập:
    <input type="text" name="username" required>
    <br><br>
    <button type="submit">Đăng nhập</button>
</form>

</body>
</html>
