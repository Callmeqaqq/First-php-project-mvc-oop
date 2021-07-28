<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "./mvc/views/blocks/slider.php"
    ?>
    <style>
        a:hover{
            color: orange;
        }
        p{
            font-size: 1.2rem;
        }
    </style>
    <!-- banner nhỏ -->
    <div class="sanpham mini-banner">
        <section class="sp-row1">
            <img class="mo" src="/public/img/IMG_9453_retouch-600x331.jpg" alt="">
            <a href="#" style="text-decoration: none;">MÀU ĐEN CHÂN ÁI</a>
            <p>Mặc dù được ứng dụng rất nhiều, nhưng sắc đen lúc nào cũng toát lên một vẻ huyền bí không nhàm chán.</p>
        </section>
        <section class="sp-row1">
            <img class="mo" src="/public/img/Banner_Sale-off-1.jpg" alt="">
            <a href="#" style="text-decoration: none;">GIẢM GIÁ</a>
            <p>Danh mục những sản phẩm bán tại "giá tốt hơn" chỉ được bán kênh online - Online Only, chúng đã từng làm
                mưa làm gió một thời gian và hiện đang rơi vào tình trạng bể size, bể số.</p>
        </section>
    </div>
</body>
</html>