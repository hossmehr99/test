<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, name, password) VALUES ('$username', '$name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "ثبت‌نام موفقیت‌آمیز بود";
    } else {
        echo "خطا: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
