<link rel="stylesheet" href="./aseets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
    <div class="container">
        <div>
            <span>Thay đổi mật khẩu</span>
        </div>
        <form class="color">
            <div class="form-group">
                <label for="InputOldPassword">Mật khẩu cũ</label>
                <input type="password" class="form-control col-md-5" id="InputOldPassword" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="InputNewPassword">Mật khẩu mới</label>
                <input type="password" class="form-control col-md-5" id="InputNewPassword" placeholder="">
            </div>
            <div class="form-group">
                <label for="ConfirmNewPassword">Nhập lại mật khẩu</label>
                <input type="password" class="form-control col-md-5" id="ConfirmNewPassword" placeholder="">
            </div>
            <button class="btn btn-success badge-pill col-md-5">Cập nhật mật khẩu</button>
        </form>
    </div>
</body>
