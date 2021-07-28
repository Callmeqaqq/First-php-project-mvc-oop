<?php
    class m_time{
        public function LucNayLa() { // Chuyển giờ hệ thống sang tiếng Việt
            $anh = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun","am","pm",":"); 
            $viet = array ("Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy", "Chủ nhật", " phút, sáng", " phút, chiều", " giờ " ); 
            $timenow = gmdate("D, d/m/Y - g:i a", time() + 7*3600); 
            $t = str_replace( $anh, $viet, $timenow); 
            return $t;
         }
    }
?>