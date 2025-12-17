<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM sinhvien");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>DANH SÁCH SINH VIÊN</h2>
<a href="add.php">Thêm sinh viên</a><br><br>

<table>
    <tr>
        <th>Mã SV</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['masv']; ?></td>
        <td><?php echo $row['hoten']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <a href="update.php?masv=<?php echo $row['masv']; ?>">Sửa</a> |
            <a href="delete.php?masv=<?php echo $row['masv']; ?>" 
               onclick="return confirm('Bạn có chắc chắn xóa?')">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
