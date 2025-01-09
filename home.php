<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>صفحه شخصی شما</title>
    <link rel="stylesheet" type="text/css" href="home_style.css">
</head>
<body>
    <h1>خوش آمدید, <?php echo $_SESSION['name']; ?></h1>
    <p>این مکان برای شخصی شما است!</p>
    <a href="logout.php">خروج</a>
</body>
</html>
