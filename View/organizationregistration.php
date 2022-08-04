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
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Tên tổ chức" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="Tên đăng nhập" required>
                    </div>  
                    <div class="form-group">
                        <input type="text" name="Telephone" class="form-control" placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Địa chỉ" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="re-password" class="form-control" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="form-group space">
                        <input type="checkbox" Chấp nhận điều khoản của trang web required> Chấp nhận điều khoản của trang web
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
                        <h5> &nbsp;&nbsp;&nbsp;&nbsp; Đối với tổ chức</h5>
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
    <script type="text/javascript">
        function validation (){
            var form = document.getElementById("form");
            var email = document.getElementById("email").value;
            var text = form.getElementsById("text");
            var pattern = /^[^]+@[^]+\.[a-z]{2, 3}$/;
    
            if (email.match(pattern)) {
                form.classList.add("valid");
                text.innerHTML = " Your Email Address in Valid.";
                text.style.color = "#00ff00";
            }
            else {classList.remove("valid");
                form.classList.add("invalid");
                text.innerHTML = " Please Enter Your Email Address";
                text.style.color = "#ff00";
            }
            if (email == "") {
                form.classList.add("valid");
                text.innerHTML = " Your Email Address in Valid.";
                text.style.color = "#00ff00";
            }
        }
    </script>
</body>
</html>
