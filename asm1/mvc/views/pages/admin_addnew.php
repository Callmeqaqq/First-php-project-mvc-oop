<form method="post" action="../c_admin/store" enctype="multipart/form-data">
    <p><input name="maSP" type="text" placeholder="Mã SP"></p>
    <p><input name="tenSP" type="text" placeholder="tênSP"></p>
    <p><input name="ngayNhap" type="date" placeholder="Ngày nhập"></p>
    <p><input name="soLuong" type="number" placeholder="Số lượng"></p>
    <p><input name="donViSP" type="text" placeholder="Đôi/Chiếc"></p>
    <!-- <label for="hinhAnh">Ảnh mô tả</label> -->
    <select name="maSP" id="maSP">
        <option value="001">Giày</option>
        <option value="002">Nón - Áo</option>
    </select>
    <label for="hinhAnh">Hình Ảnh</label>
    <p><input name="hinhAnh" type="file"></p>
    <p><button name="btn-save" type="submit"> Thêm SP </button></p>
</form>