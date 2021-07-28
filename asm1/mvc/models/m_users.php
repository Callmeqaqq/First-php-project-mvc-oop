<?php
    //model không nên dùng để lấy post hoặc get về, chỉ dùng để truyền tham số và xử lý với DB
    class m_users extends connect_db{
        public function NhapUserMoi($username, 
                                    $password, 
                                    $email, 
                                    $hoten, 
                                    $diachi, 
                                    $sdt){
                                                        //id A.I nên null
                $queryRegister = "INSERT INTO users VALUES(NULL, '$username', '$password', '$email', '$hoten', '$diachi', '$sdt')";
                $result = false;
                if(mysqli_query($this->con, $queryRegister) ){
                    $result = true;
                }                  
                return json_encode($result);
            }

        public function dangNhap($username, $password){
            //cau truy van
            $queryLogin = "SELECT username, pass FROM users WHERE username='$username' and pass='$password'";
            //thuc hien truy van, tham so 1 la connect, tham so 2 la cau truy van
            $check = mysqli_query($this->con, $queryLogin);
            //kiem tra so hang tra ve, neu truy van dc nhieu hon 0 thi da tim thay ket qua tuong xung
                $result = false;
            if (mysqli_num_rows($check) > 0) {
                $result = true;
            }
            return json_encode($result);
        }    
    }
?>