<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập PHP</title>
</head>
<body>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        // Số chẵn: đậm + đỏ
        echo "<b style='color:red'>$i</b> ";
    } else {
        // Số lẻ: đậm + nghiêng + xanh
        echo "<b><i style='color:green'>$i</i></b> ";
    }
}
?>

</body>
</html>
