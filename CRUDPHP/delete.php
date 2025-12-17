<?php
include "db.php";

if (isset($_GET['masv'])) {
    $masv = $_GET['masv'];
    mysqli_query($conn, "DELETE FROM sinhvien WHERE masv='$masv'");
}

header("Location: list.php");
exit;
