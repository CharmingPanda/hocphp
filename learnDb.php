<?php

$conn = new mysqli('localhost', 'root', '', 'new_info');

if ($conn->connect_error) {
die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "INSERT INTO News (title, content)
VALUES ('tieu de', 'noi dung'), ('tieu_de_8', 'noi dung 8'), ('tieu_de_9', 'noi dung 9'), ('tieu_de_10', 'noi dung 10'), ('tieu_de_11', 'noi dung 11')";


$sql = "SELECT * FROM new_info ORDER BY id";
$result = $conn->query($sql);

//if ($conn->query($sql)) {
//echo "Thêm record thành công";
//} else {
//echo "error " . $sql . "<br>" . $conn->error;
//}

// Ngắt kết nối
$conn->close();

?>
