
<?php
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$number = $_POST["phone"];
$password = $_POST["password"];
$job = $_POST["job"];

echo "$full_name <br> $email <br> $number <br> $password <br> $job <br>";




$connection = new mysqli('localhost', 'root', '', 'new_info');

if ($connection->connect_error) {
    die("Kết nối thất bại: " . $connection->connect_error); }




$sql = "INSERT INTO new_info (full_name, email, phone_number, password, job)
        VALUES ('$full_name', '$email', '$number', '$password', '$job')";

    if ($connection->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công"; }
    else {
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }

?>