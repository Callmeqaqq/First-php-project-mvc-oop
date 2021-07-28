<?php
    class m_hoadon extends connect_db{
        public function testcheck(){
            return "testcheck";
        }

        public function getHD(){
            $qrSP = "SELECT * FROM danhmuc";
            return mysqli_query($this->con, $qrSP);
        }
    }
?>