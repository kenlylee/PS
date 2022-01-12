<?php
include './config.php';

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $err = [];
    $sql = "SELECT * FROM user WHERE username ='$username'";
    $query = mysqli_query($coon,$sql);
    $data = mysqli_fetch_assoc($query);
    $checkUsernamel = mysqli_num_rows($query);
    
    if($checkUsernamel == 1){
        $checkPas = password_verify($password,$data['password']);
        if($checkPas){
            $_SESSION['user'] = $data;
            header('location: index.php');
        }else{
            $err['password'] = 'Sai mật khẩu';
        }

    }else{
        $err['username'] = 'Tài khoản không tồn tại';
    }

    //var_dump($checkPas);



    mysqli_close($coon);
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
    <link rel="stylesheet" href="./assets/fontawesome-web/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <title>Đăng Nhập</title>
    <style>
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
            
               <div class="login-container-content__heading"> 
                    <a href="./dangky.php" class="login-container-content-heading__btn js-btn-register ">ĐĂNG KÝ</a>
                    <a href="./dangnhap.php" class="login-container-content-heading__btn js-btn-login  active">ĐĂNG NHẬP</a>
                </div>
                <form action="" class="login-form" method="POST" role="form">
                    <input id="user" type="text" name="username" class="login-form__input" placeholder="Tên tài khoản"  maxlength="20">
                    <span class="err_input">
                        <sup><?php  echo (isset($err['username']))?$err['username']:'' ?></sup>
                    </span>
                    <input id="password" type="password" name="password" class="login-form__input" placeholder="Mật khẩu"  maxlength="15">
                    <a href="" class="login__forgot-password">Quên mật khẩu?</a>
                    <input id="submit" type="submit" value="Xác nhận" class="login-form__input">
                </form>
                <span class="seperate">OR</span>
                <div class="login__social">
                    <div class="login-social__facebook">
                        <a href="" class="login-social__link"><i class="fab fa-facebook-f login-social__icon"></i> Facebook</a>
                    </div>

                    <div class="login-social__google">
                        <a href="" class="login-social__link"><i class="fab fa-google login-social__icon"></i> Google</a>
                    </div>

                    <div class="login-social__twitter">
                        <a href="" class="login-social__link"><i class="fab fa-twitter login-social__icon"></i> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>