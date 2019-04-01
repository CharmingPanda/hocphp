<?php

$conn = new mysqli('localhost', 'root', '', 'new_info');

if ($conn->connect_error) {
die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "INSERT INTO News (title, content)
VALUES ('tieu de', 'noi dung'), ('tieu_de_8', 'noi dung 8'), ('tieu_de_9', 'noi dung 9'), ('tieu_de_10', 'noi dung 10'), ('tieu_de_11', 'noi dung 11')";


//$sql = "DELETE FROM news WHERE title='tieu_de_8' title='tieu_de_10', title='tieu_de_11'";

//if ($conn->query($sql)) {
//    echo "Add record thành công";
//} else {
//    echo "error: " . $sql . "<br>" . $conn->error;
//}
$sql = "SELECT * FROM new_info ORDER BY id";
$result = $conn->query($sql);

if ($result) {
    while ($row=$result->fetch_assoc()) {
        if($row['id'] == 8 || $row['id'] == 9 ) {
            $sql = "DELETE FROM new_info WHERE id=".$row['id'];
            echo "<br>";
            echo $sql;
            if ($conn->query($sql)) {
                echo "xoa record thành công <br>";
            } else {
                echo "error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    mysqli_free_result($result);
}

//if ($conn->query($sql)) {
//echo "Thêm record thành công";
//} else {
//echo "error " . $sql . "<br>" . $conn->error;
//}

// Ngắt kết nối
$conn->close();

?>
