<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style-fp.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div id="contain">
        <form action="" method="post">
            <h3>Vui lòng nhập mã xác nhận</h3>
            <p>Mã xác minh sẽ được gửi đến email</p>
            <div class="form-group">
                <input type="text" name="" id="" class="form-control" placeholder="Mã xác minh gồm 6 chữ số" aria-describedby="helpId">
            </div>
            <div class="text-list">
                <div class="text active">
                    <p>Mã sẽ được gửi trong vòng 60s.
                        <script>
                        </script>
                    </p>
                </div>
                <div class="text">
                    <p>Bạn vẫn chưa nhận được</p>
                    <p><a href="#">Gửi lại</a> hoặc <a href="#">thử bằng phương pháp khác</a>.</p>
                </div>
            </div>
            <div class="nav">
                <button>Trở về bước trước</button>
                <input type="submit" value="Tiếp theo">
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        after60s();

        function after60s() {
            setTimeout(function() {
                const textList = document.querySelectorAll(".text");
                //console.log(textList);
                textList.forEach((text, index) => {
                    document.querySelector(".text.active").classList.remove("active");
                    textList[1].classList.add("active");
                });
            }, 2000);
        }
    </script>
</body>

</html>