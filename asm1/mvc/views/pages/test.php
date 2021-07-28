<?php
            // if ($data['list']==NULL) echo "Chưa có dữ liệu";
            // else foreach ($data['list'] as $row) {
            //     echo "<p>",$row['tenSP'],"</p>";
            // }

        ?>
<form method="post" action="../c_admin/addnew">
    <p><input name="TenNSX" type="text" placeholder="Tên loại"></p>
    <p><input name="ThuTu" type="text" placeholder="Thứ tự"></p>
    <p><input name="AnHien" type="text" placeholder="Ẩn Hiện"></p>
    <p><button name="nutsave" type="submit"> LƯU </button> </p>
</form>