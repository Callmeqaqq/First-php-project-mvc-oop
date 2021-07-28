
    <style>
        .form-register{
            background-color: whitesmoke;
            padding: 2rem;
            border-radius: 16px;
            margin: 2rem 0;
        }

        h1{
            margin-top: 1rem;
            font-weight: bold;
        }

        .form-label{
            font-weight: bold;
            font-style: italic;
            font-size: 1.1rem;
        }

        h3{
            color: darkseagreen;
            font-style: italic;
        }

    </style>
    <div class="container">
        <h1 style="text-align: center;">Đăng nhập</h1>
        <form class="form-register" action="../c_register/khachHangDangNhap" method="POST">
            
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="login-username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên đăng nhập">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="login-password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                <input class="form-check-input" type="checkbox" onclick="myFunction()" id="showPass">
                <label class="form-check-label" for="showPass" style="font-size: 1rem; font-style: italic; color: darkblue;">Hiện mật khẩu</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" >Lưu tài khoản</label>
            </div>
            <?php
                if(isset($data['resultLogin'])){
                    if ($data['resultLogin'] == true) {
                        echo "<h3>Đăng nhập thành công với <span style='color:darkorange'>".$data['currentUser']."</span></h3>";
                    } else {
                        echo "<h3>Đăng nhập thất bại</h3>";
                    }
                }
            ?>
            <button type="submit" name="btn-login" class="btn btn-primary">Đăng nhập</button>
        </form>




<!-- Đăng ký -->

        <h1 style="text-align: center;">Bạn chưa có tài khoản?<?php $_POST['input-username']; ?></h1>
        <h1 style="text-align: center;">Đăng ký để trở thành thành viên của chúng tôi</h1>
        <form action="../c_register/KhachHangDangKy" method="POST" class="form-register">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input name="input-username" placeholder="Nhập tên đăng nhập" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="input-password" placeholder="Nhập mật khẩu" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="input-email" placeholder="Nhập địa chỉ E-mail" type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Họ tên</label>
                <input name="input-hoten" placeholder="Nhập họ và tên" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Địa chỉ</label>
                <input name="input-diachi" placeholder="Nhập địa chỉ" type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">SĐT</label>
                <input name="input-sdt" placeholder="Nhập số điện thoại" type="text" class="form-control">
            </div>
            <?php
                if(isset($data['resultRegister'])){
                    if ($data['resultRegister'] == true) {
                        echo "<h3>Đăng ký thành công với <span style='color:darkorange;'>".$data['currentUser']."</span></h3>";
                    } else {
                        echo "<h3>Đăng ký thất bại</h3>";
                    }
                }
            ?>
            <button type="submit" name="btn-register" class="btn btn-primary">Đăng ký</button>
        </form>
            


    </div>
