<!doctype html>
<html lang="en">

<head>
    <title>Voucher</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=".css/style-invoice.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="https://kit.fontawesome.com/2071acf2f2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php
        echo '<link rel="stylesheet" href="./css/style-invoice.css">';
    ?>
</head>

<body>
    <div id="header"></div>
    <div id="link"></div>
    <div id="content">
        <div class="left nav_info">
            <div class="avt_mini">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5l2O8BTelip4YZbleZY-jVhigUcQws27JWw&usqp=CAU" alt="">
                <p>Name</p>
            </div>
            <div class="nav_left">
                <ul class="nav">
                    <li class="active"><i class="fas fa-user-circle"></i>
                        <a href="#">Tài Khoản Của Tôi</a>
                        <ul class="sub_nav">
                            <li class="active"><a href="#">Thông tin đăng nhập</a></li>
                            <li><a href="#">Thông tin định danh</a></li>
                            <li><a href="#">Sổ địa chỉ</a></li>
                            <li><a href="#">Ngân hàng/thẻ tín dụng</a></li>
                            <li><a href="#">Quản lý tổ chức</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="fab fa-first-order"></i>
                        <a href="#">Đơn mua</a>
                    </li>
                    <li>
                        <i class="fas fa-bell"></i>
                        <a href="#">Thông báo</a>
                    </li>
                    <li>
                        <i class="fas fa-dollar-sign"></i>
                        <a href="#">Điểm tích luỹ</a>
                    </li>
                    <li>
                        <i class="fas fa-handshake"></i>
                        <a href="#"> Giới thiệu bạn bè</a>
                    </li>
                    <li>
                        <i class="fas fa-book-open"></i>
                        <a href="#">Voucher</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="tabs">
                <div class="tab-item active">
                    Tất cả
                </div>
                <div class="tab-item">
                    Chờ xác nhận
                </div>
                <div class="tab-item">
                    Chờ lấy hàng
                </div>
                <div class="tab-item">
                    Đang giao
                </div>
                <div class="tab-item">
                    Đã giao
                </div>
                <div class="tab-item">
                    Đã huỷ
                </div>
                <div class="line"></div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="invoice">
                        <div class="state">
                            <div class="print">In hoá đơn<i class="fa-solid fa-print"></i></div>
                            <div class="state-invoice">Đã giao thành công</div>
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <div class="item-image">
                                    <img src="./images/macbook-1.jpeg" alt="">
                                </div>
                                <div class="item-description">
                                    <div class="item-name">Tên sản phẩm</div>
                                    <div class="item-type">Phân loại sản phẩm</div>
                                    <div class="item-amount">Số lương: </div>
                                </div>
                                <div class="item-money">Tiền</div>
                            </div>
                            <div class="item-sub-content">
                                <div class="accum-point">Số điểm tích luỹ bạn nhận được: 20.000đ</div>
                                <div class="total-money">TỔNG SỐ TIỀN: </div>
                            </div>
                            <div class="item-button">
                                <div class="button active"><a href="#">Mua lại</a></div>
                                <div class="button"><a href="#">Đánh giá</a></div>
                                <div class="button"><a href="#">Liên hệ</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice">
                        <div class="state">
                            <div class="print">In hoá đơn<i class="fa-solid fa-print"></i></div>
                            <div class="state-invoice">Đang giao</div>
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <div class="item-image">
                                    <img src="./images/macbook-1.jpeg" alt="">
                                </div>
                                <div class="item-description">
                                    <div class="item-name">Tên sản phẩm</div>
                                    <div class="item-type">Phân loại sản phẩm</div>
                                    <div class="item-amount">Số lương: </div>
                                </div>
                                <div class="item-money">Tiền</div>
                            </div>
                            <div class="item-sub-content">
                                <div class="accum-point">Số điểm tích luỹ bạn nhận được: 20.000đ</div>
                                <div class="total-money">TỔNG SỐ TIỀN: </div>
                            </div>
                            <div class="item-button">
                                <div class="button"><a href="#">Huỷ đơn</a></div>
                                <div class="button"><a href="#">Liên hệ</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice">
                        <div class="state">
                            <div class="print">In hoá đơn<i class="fa-solid fa-print"></i></div>
                            <div class="state-invoice">Đã huỷ</div>
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <div class="item-image">
                                    <img src="./images/macbook-1.jpeg" alt="">
                                </div>
                                <div class="item-description">
                                    <div class="item-name">Tên sản phẩm</div>
                                    <div class="item-type">Phân loại sản phẩm</div>
                                    <div class="item-amount">Số lương: </div>
                                </div>
                                <div class="item-money">Tiền</div>
                            </div>
                            <div class="item-sub-content">
                                <div class="accum-point">Số điểm tích luỹ bạn nhận được: 20.000đ</div>
                                <div class="total-money">TỔNG SỐ TIỀN: </div>
                            </div>
                            <div class="item-button">
                                <div class="button active"><a href="#">Mua lại</a></div>
                                <div class="button"><a href="#">Liên hệ</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane">Lọc đơn mua đang chờ xác nhận</div>
                <div class="tab-pane">Lọc đơn mua đang chờ lấy hàng</div>
                <div class="tab-pane">Lọc đơn mua đang giao</div>
                <div class="tab-pane">Lọc đơn mua đã giao</div>
                <div class="tab-pane">Lọc đơn mua đã huỷ</div>
            </div>
        </div>
    </div>
    </div>
    <div id="footer"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/javascript-invoice.js"></script>
</body>

</html>