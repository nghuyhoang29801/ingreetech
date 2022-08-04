<?php
    session_start();
    require_once __DIR__ . '/../Controller/dangKy/index.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: white;
            background-size: cover;
            background-position: center;
        }
        .login-box {
            max-width: 700px;
            float: one;
            margin: 150px auto;
        }
        .login-left {
            background: rgba(211, 211, 211, 0.5);
            padding: 30px;
        }
        .login-right {
            background: rgba(211, 211, 211, 0.75);
            padding: 15px;
        }
        .form-control {
            background-color: white; 
        }
        
    </style>
</head>
<body>
    <p>Trang chủ / Đăng nhập / Đăng kí</p>
    <div class="container"> 
        <div class="row">
            <div class="col-md-6 login-left"> 
                <h2>ĐĂNG KÍ</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Họ và tên" required>
                        <?php if(isset($errors['name'])):?>
                            <small><?= $errors['name'] ?></small>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" required>
                        <?php if(isset($errors['username'])):?>
                            <small><?= $errors['username'] ?></small>
                        <?php endif;?>
                    </div>
                    <!-- <div class="form-group">
                        <input type="optional" name="usercapacity" class="form-control" placeholder="Bạn chọn tư cách tổ chức hay cá nhân" required>
                    </div> -->
                    <div class="form-group">
                        <input type="text" name="telephone" class="form-control" placeholder="Số điện thoại" required>
                        <?php if(isset($errors['telephone'])):?>
                            <small><?= $errors['telephone'] ?></small>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <input type="email" name="useremail" class="form-control" placeholder="Email" required>
                        <?php if(isset($errors['useremail'])):?>
                            <small><?= $errors['useremail'] ?></small>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="userpassword" class="form-control" placeholder="Mật khẩu" required>
                        <?php if(isset($errors['userpassword'])):?>
                            <small><?= $errors['userpassword'] ?></small>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="userrepassword" class="form-control" placeholder="Nhập lại mật khẩu" required>
                        <?php if(isset($errors['userrepassword'])):?>
                            <small><?= $errors['userrepassword'] ?></small>
                        <?php endif;?>
                    </div>
                    <div class="form-group space">
                        <input type="checkbox" name="agree" value="yes" required> Chấp nhận điều khoản của trang web
                        <?php if(isset($errors['agree'])):?>
                            <small><?= $errors['agree'] ?></small>
                        <?php endif;?>
                    </div>
                   <div>
                    <button type="submit" class="btn btn-primary, sign" style="text-align: center"> ĐĂNG KÍ</button>
                   </div>
                </form>   
                <div class="sign">
                        <a> Quay về </a>
                </div>
            </div>
            <div class="col-md-6 login-right"> 
                <h2 style="text-align: center;">HƯỚNG DẪN ĐĂNG KÍ</h2>
                <br>
                <br>
                <form action="validation.php" method="post">
                    <div> 
                        <h5> &nbsp;&nbsp;&nbsp;&nbsp; Đối với cá nhân</h5>
                        <p></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                </form>
            </div>
        </div>
    </div>
    <script>
        let sign  = document.querySelector('.sign');
        let telephone = document.querySelector('.telephone');
        let text = document.querySelector('.text');

        let regex = /^[\d, \s, \+, \-]{5, 20}/
        check.addEventListener('sign',()=> {
        if(form-control.value==''){
            text.innerText = "Please enter your phone number";
            text.style.color ='#fff';
        }
        else if (form-control.match(regex)){
            text.innerText = " Congrats! You Enter A Valid Phone Number";
            text.style.color = "rgba(4,125,9,1)";
        }
        else
        {
            text.innerText = "Oops! Your Phone Number Is Invalid "
            TextDecoder.style.color = '#da3400';
        }
    });
    </script>
</body>
</html>
