<?php
include './config.php';
include './php/function/time.php';
if(isset($_POST['email'])){
    $err = [];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $coin = 0;
    $date_crate = $today;
    $status = 0;
    $sql = "SELECT * FROM user WHERE username ='$username'";
    $query = mysqli_query($coon,$sql);
    $data = mysqli_fetch_assoc($query);
    $checkUsername = mysqli_num_rows($query);
    if($checkUsername == 1){
        $err['username'] = 'Tài khoản đã tồn tại';
    }
    if(empty($name)){
        $err['email'] = 'Bạn chưa nhập tên';
    }
    if(empty($email)){
        $err['email'] = 'Bạn chưa nhập email';
    }
    if(empty($password)){
        $err['password'] = 'Bạn chưa nhập password';
    }elseif(strlen($password) < 5){
        $err['password'] = 'Password không được ngắn hơn 8 ký tự';
    }
    if(empty($username)){
        $err['username'] = 'Bạn chưa nhập tài khoản';
    }
    if($rpassword != $password or empty($rpassword)){
        $err['rpassword'] = 'Mật khẩu nhập lại không đúng';
    }
    if(empty($err)){
        $pass = password_hash($password,PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO user(username,password,email,coin,date_crate,status,name) VALUE ('$username','$pass','$email','$coin','$date_crate','$status','$name')";
        $query = mysqli_query($coon,$sql);
        if($query){
            header('location: dangnhap.php');
        }
        mysqli_close($coon);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fontawesome-web/fontawesome/css/all.min.css">
    <title>Đăng Ký</title>
    <style>
        a{ 
            color: white;
            text-decoration: none;
        }
        .err_input{
            
            color:red;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <div class="home__login">
        <div class="login__background">

        </div>
        <div class="login__container">
            
            <div class="login-container__content">
                <div class="login__back">
                    <a href="./index.php" class="login__back-btn"><i class="fas fa-arrow-left login__back-btn-icon"></i></a>
                </div>
               <div class="login-container-content__heading"> 
                    <a href="./dangky.php" class="login-container-content-heading__btn js-btn-register active">ĐĂNG KÝ</a>
                    <a href="./dangnhap.php" class="login-container-content-heading__btn js-btn-login">ĐĂNG NHẬP</a>
                </div>
                <form action="" class="login-form" method="POST" role="form">
                    <input id="name_user" type="text" name="name" class="login-form__input" placeholder="Tên của bạn"  maxlength="100">
                    <span class="err_input">
                        <sup><?php  echo (isset($err['name']))?$err['name']:'' ?></sup>
                    </span>
                    <input id="user" type="text" name="username" class="login-form__input" placeholder="Tên tài khoản"  maxlength="20">
                    <span class="err_input">
                        <sup><?php  echo (isset($err['username']))?$err['username']:'' ?></sup>
                    </span>
                    <input id="email" type="email" name="email" class="login-form__input" placeholder="Email"  maxlength="100">
                    <span class="err_input">
                        <sup><?php  echo (isset($err['email']))?$err['email']:'' ?></sup>
                    </span>
                    <input id="password" type="password" name="password" class="login-form__input" placeholder="Mật khẩu"  maxlength="15">
                    <span class="err_input">
                        <sup><?php  echo (isset($err['password']))?$err['password']:'' ?></sup>
                    </span>
                    <input id="Rpassword" type="password" name="rpassword" class="login-form__input" placeholder="Nhập lại mật khẩu"  maxlength="15">
                    <span class="err_input">
                        <sup><?php  echo (isset($err['rpassword']))?$err['rpassword']:'' ?></sup>
                    </span>
                    <input id="submit" type="submit" value="Xác nhận" class="login-form__input">
                </form>
                <span class="seperate">OR</span>
                <div class="login__social">
                    <div class="login-social__facebook">
                        <a href="" class="login-social__link"><i class="fab fa-facebook-f"></i> Facebook</a>
                    </div>

                    <div class="login-social__google">
                        <a href="" class="login-social__link"><i class="fab fa-google"></i> Google</a>
                    </div>

                    <div class="login-social__twitter">
                        <a href="" class="login-social__link"><i class="fab fa-twitter"></i> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>