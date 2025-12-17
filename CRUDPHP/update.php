<?php
include "db.php";

if (!isset($_GET['masv'])) {
    header("Location: list.php");
    exit;
}

$masv = $_GET['masv'];
$result = mysqli_query($conn, "SELECT * FROM sinhvien WHERE masv='$masv'");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    header("Location: list.php");
    exit;
}

$error = "";

if (isset($_POST['submit'])) {
    $hoten = trim($_POST['hoten']);
    $email = trim($_POST['email']);

    if ($hoten == "" || $email == "") {
        $error = "Không được để trống";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không đúng định dạng";
    } else {
        mysqli_query($conn,
            "UPDATE sinhvien SET hoten='$hoten', email='$email' WHERE masv='$masv'");
        header("Location: list.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sửa sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>SỬA SINH VIÊN</h2>

<form method="post">
    Mã SV:<br>
    <input type="text" value="<?php echo $row['masv']; ?>" disabled><br><br>

    Họ tên:<br>
    <input type="text" name="hoten" value="<?php echo $row['hoten']; ?>"><br><br>

    Email:<br>
    <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

    <button type="submit" name="submit">Cập nhật</button>
</form>

<p style="color:red"><?php echo $error; ?></p>

</body>
</html>
