
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="./css/account.css">
    <title>Account</title>
</head>
<body>
    <div id="account">

        <!-- phần bên trái --->  
        <div class="nav_info">

            <div class="avt_mini">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5l2O8BTelip4YZbleZY-jVhigUcQws27JWw&usqp=CAU" alt="">
               <p>Name</p>
            </div>

            <div class="nav_left">
                <ul class="nav">
                    <li><i class="fas fa-user-circle"></i> 
                        <a href="">Tài Khoản Của Tôi</a>
                       <ul class="sub_nav">
                          <li><a href="">Thông tin đăng nhập</a></li>
                          <li><a href="">Thông tin định danh</a></li>
                          <li><a href="">Sổ địa chỉ</a></li>
                          <li><a href="">Ngân hàng/thẻ tín dụng</a></li>
                          <li><a href="">Quản lý tổ chức</a></li>
                       </ul>
                    </li>
                    <li>
                        <i class="fab fa-first-order"></i>
                        <a href="">Đơn mua</a>
                    </li>
                    <li>
                        <i class="fas fa-bell"></i>
                        <a href="">Thông báo</a>
                    </li>
                    <li>
                        <i class="fas fa-dollar-sign"></i>
                        <a href="">Điểm tích luỹ</a>
                    </li>
                    <li>
                        <i class="fas fa-handshake"></i>
                        <a href="">Giới thiệu bạn bè</a></li>
                    <li>
                        <i class="fas fa-book-open"></i>
                        <a href="">Voucher</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- phần giũa  --->   

        <div class="infomation">
        <form>
            <div class="pers_inf">
                <div class="name_inf">
                    <label>Tên đăng nhập:</label>
                </div>

                <div class="inf">
                    <div>nghh290000</div>
                </div>
            </div>
            
            <div class="pers_inf">
                <div class="name_inf">
                    <label>Tên đầy đủ:</label>
                </div>

                <div class="inf">
                    <div>Nguyễn Huy Hoàng</div>
                    <button>Thay đổi</button>
                </div>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Email:</label>
                </div>

                <div class="inf">
                    <div>ngh*****@gmail.com</div>
                    <button>Thay đổi</button>
                </div>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Số điện thoai:</label>
                </div>

                <div class="inf">
                    <div>0*******505</div>
                    <button>Thay đổi</button>
                </div>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Mật khẩu:</label>
                </div>

                <div class="inf">
                    <div>************</div>
                    <button>Thay đổi</button>
                </div>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Địa chỉ:</label>
                </div>

                <div class="inf">
                    <div>Đông Hòa, Dĩ An, Bình Dương</div>
                    <button>Thay đổi</button>
                </div>
            </div>

            <div class="pers_inf">
                <p style="color: red">Để có thể thực hiện mua hàng, vui lòng xác thực tài khoản bằng 
                cách điền đầy đủ thông tin dưới đây:
                </p>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Số CMND/CCCD:</label>
                </div>

                <div class="inf">
                    <div class="input_valu">
                        <input type="text">
                    </div>
                </div>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Ngày cấp:</label>
                </div>

                <div class="inf">
                    <div class="input_valu">
                        <input type="date">
                    </div>
                </div>
            </div>

            <div class="pers_inf">
                <div class="name_inf">
                    <label>Nơi cấp:</label>
                </div>

                <div class="inf">
                    <div class="input_valu">
                        <input type="text">
                    </div>
                </div>
            </div>
            
            <div class="pers_inf">
                <div class="img_front">
                    <div class="img">
                        <p>ảnh mặt trước</p>
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8PDw8PDw8VDw8PDw8PDxUPDw8PFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFQ8PFSsdFR0rLS0tKy0rLSstLSstLS0tLS0rLSsrKy0tKy0rLS0tNzctLTc3Ky0tLTc3LTcrNy0tN//AABEIAOEA4QMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAAAQIDBAUG/8QAJhABAQEAAgEDAwQDAAAAAAAAAAERAhJhIVGhAzGBBBPw8UFikf/EABsBAQEBAAIDAAAAAAAAAAAAAAABAgMFBAYH/8QAHxEBAQABAwUBAAAAAAAAAAAAABEBEjEyAgNBUYEE/9oADAMBAAIRAxEAPwD8ppojoH2NaWiAspqKBqylSINbScqzK1OQkZt+6aqRWmonKlREXfJDDVFtTQA1dRQZ01bEFXtU0AJTQA1qVkBrsMgkWoIKogDUGQI0hEBVjICwQBVjIC2iANSDOroLCoaC6iAKVAVYgAKgCiAgAqgABDQQAFAAAAAAAAAAAAAAAAAAAAAAAEAAABQBUEAUAEAAAFBBTBEXPRZGrhSuYUFAFAFxETQIAKCIANAABBQSgoIAAKAgqAEAFJBqCLGbGhGWKi1FbAAWKcSoyyCxVRQAAgJRrPRACgAAALUoIqKAYABgIKtQEaie4gJUWoqgoCxKQQSqVYCC4AIEBdQAUQUU0REWVAooaCilqCAKYC6GKIIFREqLUVooAGrUgAsqEBoQESGoKq0QBRAF0QBRAAAVdNQEWUtQCLqxlUGtTU0EhqaCtC6gC6gAKiiAAIGgoAAC0EAAAAAAAAAAAAAAAAoAAAgCgfz7CAlABoAAVFEEAUAADQAF0RABQAAFlEQLQAAAEUABE1TVCAqIoCgSLSLYIwANAAAAFAAAAAARQQAAAFAAAAAURBUFFQBqFqJRAAUAUAAAEAAFQAABAAUAAAAABr09/hGuk94DNZMAUwwACQICKAIoAgqACrIDJjrx4L1Spqc5xXo36T+2LyEucp1SxdSq1hBYAgoCAKoqLUQwADrTrXTpfJON8pWa55TG+t8l43yVax1p1dOMvlnL5KVnrTrW8vk60pWOtXrWspl8lKx1pOLp64mUqVrj9L3W5GOvLydan1Pq3l4Ztq9b5TL5VWetOtayk48vJVqTjUvGt9b5LxvkpWOtOtbkv8qb5+SlZ6nWr+fk/PytKmGVr8z/AKSeflKVnqda6T6XL2q/tc/bl8rWdePbl18Dp+3y/wBhKa8e3piUHG4AoAIA1gAVQAFICCwARFADiQAOT1/pgXp3cXd4vt/oX3v0qDse14er/r5Pqcf8PR9EHldO7revZ3jtwQbeLl6Pprz+4I4c8mQBt//Z" alt="">
                    </div>
                    <button>Chọn ảnh</button>
                </div>

                <div class="img_back">
                    <div class="img">
                        <p>ảnh mặt sau</p>
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8PDw8PDw8VDw8PDw8PDxUPDw8PFRUWFhUVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OFQ8PFSsdFR0rLS0tKy0rLSstLSstLS0tLS0rLSsrKy0tKy0rLS0tNzctLTc3Ky0tLTc3LTcrNy0tN//AABEIAOEA4QMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAAAQIDBAUG/8QAJhABAQEAAgEDAwQDAAAAAAAAAAERAhJhIVGhAzGBBBPw8UFikf/EABsBAQEBAAIDAAAAAAAAAAAAAAABAgMFBAYH/8QAHxEBAQABAwUBAAAAAAAAAAAAABEBEjEyAgNBUYEE/9oADAMBAAIRAxEAPwD8ppojoH2NaWiAspqKBqylSINbScqzK1OQkZt+6aqRWmonKlREXfJDDVFtTQA1dRQZ01bEFXtU0AJTQA1qVkBrsMgkWoIKogDUGQI0hEBVjICwQBVjIC2iANSDOroLCoaC6iAKVAVYgAKgCiAgAqgABDQQAFAAAAAAAAAAAAAAAAAAAAAAAEAAABQBUEAUAEAAAFBBTBEXPRZGrhSuYUFAFAFxETQIAKCIANAABBQSgoIAAKAgqAEAFJBqCLGbGhGWKi1FbAAWKcSoyyCxVRQAAgJRrPRACgAAALUoIqKAYABgIKtQEaie4gJUWoqgoCxKQQSqVYCC4AIEBdQAUQUU0REWVAooaCilqCAKYC6GKIIFREqLUVooAGrUgAsqEBoQESGoKq0QBRAF0QBRAAAVdNQEWUtQCLqxlUGtTU0EhqaCtC6gC6gAKiiAAIGgoAAC0EAAAAAAAAAAAAAAAAoAAAgCgfz7CAlABoAAVFEEAUAADQAF0RABQAAFlEQLQAAAEUABE1TVCAqIoCgSLSLYIwANAAAAFAAAAAARQQAAAFAAAAAURBUFFQBqFqJRAAUAUAAAEAAFQAABAAUAAAAABr09/hGuk94DNZMAUwwACQICKAIoAgqACrIDJjrx4L1Spqc5xXo36T+2LyEucp1SxdSq1hBYAgoCAKoqLUQwADrTrXTpfJON8pWa55TG+t8l43yVax1p1dOMvlnL5KVnrTrW8vk60pWOtXrWspl8lKx1pOLp64mUqVrj9L3W5GOvLydan1Pq3l4Ztq9b5TL5VWetOtayk48vJVqTjUvGt9b5LxvkpWOtOtbkv8qb5+SlZ6nWr+fk/PytKmGVr8z/AKSeflKVnqda6T6XL2q/tc/bl8rWdePbl18Dp+3y/wBhKa8e3piUHG4AoAIA1gAVQAFICCwARFADiQAOT1/pgXp3cXd4vt/oX3v0qDse14er/r5Pqcf8PR9EHldO7revZ3jtwQbeLl6Pprz+4I4c8mQBt//Z" alt="">
                    </div>
                    <button>Chọn ảnh</button>
                </div>
            </div>

            <div class="pers_inf" style="font-size: 16px">Đảm bảo hình ảnh rõ nét và không bị mất góc.</div>

            <div class="save_change">
                <button class="save">LƯU THAY ĐỔI</button>
            </div>
        </form> 
        </div>

        <!-- phần bên phải  --->  
        <div class="avatar_right">
            <div class="img">
                <img src="https://tongkhoalu.com/wp-content/uploads/2016/11/ev2017xam.jpg" alt="">
            </div>

            <button>Chọn ảnh mới</button>

            <div style="color: #898888; margin-top: 20px">Dung lượng file tối đa 1 MB</div>
            <div style="color: #898888">Định dạng: .JPEG, .PNG </div>
        </div>
    </div>
</body>
</html>