<?php
$conn = new mysqli("localhost", "root", "","freettusdemo");
if ($conn -> connect_error){
    die ("kết nối thất bại".$conn->connect_error);
}
echo "kết nối thành công";

$sql = "INSERT INTO News (title, content)
        VALUES ('tieu_de_1', 'noi_dung_1');";
$sql .= "INSERT INTO News (title, content)
        VALUES ('tieu_de_2', 'noi_dung_2');";


if ($conn->multi_query($sql)) {
    echo "thanh cong them ID";
} else {
    echo "error"."<br>".$conn->error;
}

$conn->close();


