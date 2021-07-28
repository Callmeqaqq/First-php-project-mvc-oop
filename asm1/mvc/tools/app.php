<?php 
    class App{

        protected $controller="c_home";
        protected $action="firstAction";
        protected $param=[];

        function __construct()
        {
            //Xu ly chuoi url -> tach thanh mang
            //domain/controller/action/param
            $breakArr = $this->XuLyURL();
            //Array ( [0] => controller [1] => action [2] => param1 [3] => param2)

            
            //Xu ly controller, kiem tra form co ton tai hay khong moi require
            if(file_exists("./mvc/controllers/".$breakArr[0].".php")){
                $this->controller = $breakArr[0];
                unset($breakArr[0]);//sau khi da lay dc controller thi huy mang di -> tao param
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            //sau khi đã tạo connect controller và extends, khởi tạo đối tượng controller là controller hiện tại
            $this->controller = new $this->controller;
        
            //Xu ly action, kiem tra array[1]-action cua class controller
            if(isset($breakArr[1])){
                //kiem tra ham ton tai, tham so la object or class(controller) va function(action)
                //kiem tra tra ve boolean
                if(method_exists($this->controller, $breakArr[1])){
                    $this->action = $breakArr[1];

                }
                //bo ra ngoai dieu kien kiem tra ton tai, neu truong hop action khong ton tai action khong duoc thay the nen khong unset dc
                unset($breakArr[1]);//sau khi da lay dc controller thi huy mang di -> tao param
            }


            //Xu ly param
            //goi param,           (? = neu) mang ton tai thi param = array values(mang)
            //                                             (: = nguoc lai thi) param rong~
            $this->param = $breakArr?array_values($breakArr):[];
            call_user_func_array([$this->controller,$this->action], $this->param);
        }

        function XuLyURL()
        {
            if (isset($_GET["url"])) {
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>