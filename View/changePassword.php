
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo '<link rel="stylesheet" href='.$rootDir.'"View/css/changePassword.css">';
    ?>
    
    <title>Document</title>
</head>
<body>
    <form>
        <div class="change_password">
            <div class="name_change">
                <label>Mật Khẩu Cũ:</label>
            </div>

            <div class="inf">
                <input type="text">
            </div>
        </div>

        <div class="change_password">
            <div class="name_change">
                <label>Mật Khẩu Mới:</label>
            </div>

            <div class="inf">
                <input type="text">
            </div>
        </div>

        <div class="change_password">
            <div class="name_change">
                <label>Nhập lại mật Khẩu mới:</label>
            </div>
            
            <div class="inf">
                <input type="text">
            </div>
        </div>

        <div class="change_password">
            <div class="name_change">
                <label>Nhập mã xác minh:</label>
            </div>
            
            <div class="inf">
                <input style="width: 205px; height: 35px; type="text">
                <button style="width: 120px; height: 35px; background-color: #C1BFBF;">Gửi</button>
            </div   >
        </div>

        <div style="margin-left: 150px; margin-top:20px;color: #C1BFBF ">Nhấn nút Gửi. <br> Mã xác minh sẽ gửi về điện 
        thoại bạn thông qua email mà bạn đã đăng ký
        </div>

        <div class="button">
            <button style="background-color: #D9D9D9">Trở về</button>
            <button style="background-color: #24619A">Lưu thay đổi</button>
        </div>
    </form>
</body>
</html>