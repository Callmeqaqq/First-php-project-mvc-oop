<?php
    class c_register extends connectController{
        //chạy tức thì construct
        public $modelHD;
        public $modelUser;
        public $time;
        public function __construct()
        {
            $this->modelUser = $this->callModel("m_users");
            //Không được gõ view vào đây
            $this->time = $this->callModel("m_time");
        }

        public function firstAction(){
            $currentTime = $this->time->LucNayLa();
            $this->callView("master1", [
                "page"=>"register",
                "time"=>$currentTime
            ]);
        }

        public function khachHangDangNhap(){
            $currentTime = $this->time->LucNayLa();
            if (isset($_POST['btn-login'])) {
                $username = $_POST['login-username'];
                $password = $_POST['login-password']; 
            }
            $ketqua = $this->modelUser->dangNhap($username, $password);
            $_SESSION['username'] = $username;
            $this->callView("master1", [ 
                "page"=>"register",
                "resultLogin"=>$ketqua,
                "time"=>$currentTime,
                "currentUser"=>$username,
            ]);
        }
            
        public function KhachHangDangKy(){
            $currentTime = $this->time->LucNayLa();
            //getdata
            // echo "<script>alert('a')</script>";
            if(isset($_POST['btn-register'])){
                $username = $_POST['input-username'];
                $password = $_POST['input-password'];
                $password = password_hash($password, PASSWORD_DEFAULT);
                $email = $_POST['input-email'];
                $hoten = $_POST['input-hoten'];
                $diachi = $_POST['input-diachi'];
                $sdt = $_POST['input-sdt'];

                //insertDB
                $ketqua = $this->modelUser->NhapUserMoi($username, 
                                                        $password, 
                                                        $email, 
                                                        $hoten, 
                                                        $diachi, 
                                                        $sdt);
            }
            //thong bao
                $this->callView("master1", [ 
                    "page"=>"register",
                    "resultRegister"=>$ketqua,
                    "currentUser"=>$username,
                    "time"=>$currentTime
                ]);
        }

    }
?>