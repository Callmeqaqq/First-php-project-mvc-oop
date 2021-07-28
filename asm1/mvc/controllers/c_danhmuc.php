<?php
    class c_danhmuc extends connectController{
        public $modelUser;
        public $time;
        public function __construct()
        {
            $this->modelUser = $this->callModel("m_danhmuc");
            $this->time = $this->callModel("m_time");
        }
        public function firstAction(){
            $currentTime = $this->time->LucNayLa();
            $this->callView("master1", [
                "page"=>"products",
                "time"=>$currentTime
            ]);
        }
    }
?>