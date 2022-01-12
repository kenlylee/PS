<?php
include 'config.php';
$user = [];
$user = mysqli_query($coon,"SELECT * FROM user WHERE 5");
//$user = [];
$user = (isset($_SESSION['user']))? $user = $_SESSION['user']: [];
 if($user == []){
     header('location: dangky.php');
 }

//$user = $_SESSION['user'];
mysqli_close($coon);
?>
<html>
    <head>
        <title>Thông Tin Cá Nhân</title>
    </head>
    <body>
        <p>Tên của bạn: <?php echo $user['name']; ?></p>
        <p>Số dư: <?php if($user['coin']== ''){echo "0 đ";}else{echo $user['coin']." đ";} ?></p>
        <p><a href="./logout.php">Đăng xuất</a></p>
</body>
</html>