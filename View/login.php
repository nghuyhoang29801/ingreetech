<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <p> Trang chủ    /     Đăng nhập</p>
    <div class="bg-img">
        <div class="content">
            <header>ĐĂNG NHẬP</header>
            <form action="#">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Tên đăng nhập">
                </div>
                <div class="field space ">
                    <span class="fa fa-clock"></span>
                    <input type="password" class="password" required placeholder="Mật khẩu">
                    <div class="show">hiện</div>
                </div>
                <div class="pass">
                    <a href="#">Quên mật khẩu</a>
                </div>
                <div class="field">
                    <input type="submit" value="ĐĂNG NHẬP">
                </div>
                <div class="login"> ----    HOẶC    ----</div>
                <div class="link"> 
                    <div class="facebook"> 
                        <i class="fab fa-facebook"><span>Facebook</span></i>
                    </div>
                    <div class="google"> 
                        <i class="fab fa-google"><span>Google</span></i> 
                    </div>
                </div>
                <div class="signup">Bạn mới biết đến chúng tôi?
                    <a> Đăng kí </a>
                </div>
            </form>
        </div>
    </div>
    <script> 
        const pass_field = document.querySelector('.password');
        const show_btn = document.querySelector('.show');
        pass_field.addEventListener('click', function() {
            if(pass_field.type === "password"){
                pass_field.type = "text";
                show_btn.style.color = "#3498db";
                show_btn.textContent = "Ẩn"; 
            } else {
                pass_field.type = "password";
                show_btn.style.color = "#222"; 
                show_btn.textContent = "Hiện";
            }
        }); 
    </script>
</body>
</html>
