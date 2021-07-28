<?php
    class c_admin extends connectController{
        public $modelUser;
        public $time;
        public function __construct()
        {
            $this->modelUser = $this->callModel("m_admin");
            $this->time = $this->callModel("m_time");
        }

        public function firstAction(){
            $list = $this->modelUser->listrecords();
            $this->callView("master2", [
                "page"=>"admin_sp",
                "list"=>$list,
            ]);
        }

        public function admin_sp(){
            $this->callView("master2", [
                "page"=>"admin_sp",
            ]);
        }

        // public function index(){
        //     $list = $this->modelUser->listrecords();
        //     $this->callView("master2", [
        //                             "page"=>"admin_products",
        //                             "list"=>$list
        //                         ]);
        //     echo __METHOD__;
        // }

        public function addnew(){
            $this->callView("master2",["page"=>"admin_addnew"]);
            echo __METHOD__;
        }

        public function store(){
            if(isset($_POST['btn-save'])){
                $maSP = $_POST['maSP'];
                $tenSP = $_POST['tenSP'];
                $ngayNhap = $_POST['ngayNhap'];
                $donViSP = $_POST['donViSP'];
                $soLuong = $_POST['soLuong'];
                $maDM = $_POST['maDM'];
                if (isset($_FILES['hinhAnh'])) {
                     $file = $_FILES['hinhAnh'];
                     $file_name = $file['name'];
                     move_uploaded_file($file['tmp_name'],'/public/img/'.$file_name);
                }
                $ketqua = $this->modelUser->store($maSP,$tenSP,$ngayNhap,$donViSP,$soLuong,$maDM,$file_name);

                $this->callView("master2", [ 
                    "page"=>"admin_sp",
                    "resultaddnew"=>$ketqua,
                ]);
            }
            echo __METHOD__;
        }

        public function edit(){
            $this->callView("master2",["page"=>"edit"]);                
        }

        public function update(){
            echo __METHOD__;
        }

        public function delete(){
            echo __METHOD__;
        }
    }
?>