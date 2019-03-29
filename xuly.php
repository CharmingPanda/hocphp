<?php
$conn = mysqli_connect('localhost', 'root', '', 'freetutsemo');
echo var_dump();
// Kiểm tra kết nối
if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
}
?>