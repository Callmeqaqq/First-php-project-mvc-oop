<?php
    class m_admin extends connect_db{
        function store($maSP,$tenSP,$ngayNhap,$donViSP,$soLuong,$maDM,$filename){
            $sql = "INSERT INTO sanpham VALUES('$maSP','$tenSP','$ngayNhap','$donViSP','$soLuong','$maDM','$filename');";
            $result = false;
                if(mysqli_query($this->con, $sql) ){
                    $result = true;
                }                  
                return json_encode($result);
        }

        function update($if){

        }

        function delete($id){

        }

        function listrecords(){
            $query = "SELECT * FROM sanpham";
            $sanpham = mysqli_query($this->con, $query);
            return json_encode($sanpham);
        }

        function detailrecord($id){

        }
    }
?>