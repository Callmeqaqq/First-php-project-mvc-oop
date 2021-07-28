<?php //tạo kết nối giữa controller và model để sau này có thể sử dụng lại
    class connectController{

        public function callModel($model){
            require_once "./mvc/models/".$model.".php";
            //kết nối với một model và tạo đối tượng model đó bằng return new model
            return new $model;
        }
                                        //data là để nhận giá trị khi gọi view
                                        //1 trang có nhiều data nên đặt vào mảng
        public function callView($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
            //kết nối với một model và tạo đối tượng model đó bằng return new model
            return new $view;
        }
    }
?>