<?php
include "db.php";
$error = "";

if (isset($_POST['submit'])) {
    $masv = trim($_POST['masv']);
    $hoten = trim($_POST['hoten']);
    $email = trim($_POST['email']);

    if ($masv == "" || $hoten == "" || $email == "") {
        $error = "Không được để trống dữ liệu";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không đúng định dạng";
    } else {
        $check = mysqli_query($conn, "SELECT * FROM sinhvien WHERE masv='$masv'");
        if (mysqli_num_rows($check) > 0) {
            $error = "Mã sinh viên đã tồn tại";
        } else {
            mysqli_query($conn,
                "INSERT INTO sinhvien VALUES ('$masv', '$hoten', '$email')");
            header("Location: list.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>THÊM SINH VIÊN</h2>

<form method="post">
    Mã SV:<br>
    <input type="text" name="masv" value="<?php echo $masv ?? ''; ?>"><br><br>

    Họ tên:<br>
    <input type="text" name="hoten" value="<?php echo $hoten ?? ''; ?>"><br><br>

    Email:<br>
    <input type="text" name="email" value="<?php echo $email ?? ''; ?>"><br><br>

    <button type="submit" name="submit">Thêm</button>
</form>

<p style="color:red"><?php echo $error; ?></p>

</body>
</html>
