<?php
    class c_home extends connectController{
        //mỗi controller sẽ có firstaction
        public $time;
        public $logout;
        public function __construct()
        {
            $this->time = $this->callModel("m_time");
        }

        function firstAction(){
            $currentTime = $this->time->LucNayLa();

            $this->callView("master1",
                [
                    "header"=>"0",
                    "page"=>"sayhi",
                    "time"=>$currentTime
                ]
                );
        }

        public function logOut(){
            $currentTime = $this->time->LucNayLa();
            if (isset($_SESSION['username'])){
                unset($_SESSION['username']); // xóa session login
            }
            $this->callView("master1", [ 
                "page"=>"sayhi",
                "time"=>$currentTime
            ]);
        }

        public function map(){
            $currentTime = $this->time->LucNayLa();
            $this->callView("master1", [ 
                "page"=>"map",
                "time"=>$currentTime
            ]);
        }

        public function blog(){
            $currentTime = $this->time->LucNayLa();
            $this->callView("master1", [ 
                "page"=>"blog",
                "time"=>$currentTime
            ]);
        }

        public function news(){
            $currentTime = $this->time->LucNayLa();
            $this->callView("master1", [ 
                "page"=>"news",
                "time"=>$currentTime
            ]);
        }
    }

?>