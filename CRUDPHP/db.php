<?php
$conn = mysqli_connect("localhost", "root", "", "qlsv");

if (!$conn) {
    die("Kết nối thất bại");
}

mysqli_set_charset($conn, "utf8");
