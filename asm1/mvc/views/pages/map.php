<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dứa - Fashion</title>
    <link rel="stylesheet" href="CSS/Asm2_maps.css">
    <link rel="icon"
        href="img/105931075-illustration-vector-of-women-silhouette-icon-fashion-style-on-white-background.jpg">
    <script src="https://kit.fontawesome.com/0ce02f9503.js" crossorigin="anonymous"></script>
    <script>
        function thongbao(message) {
            alert(message);
        }
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">


</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution="setup_tool" page_id="102288638589462" theme_color="#ee6f57"
        logged_in_greeting="Hi! How can we help you?" logged_out_greeting="Hi! How can we help you?">
    </div>
    <!-- <div class="fixed">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
        </ul>
    </div> -->
    <!-- header pc -->


    <!-- phần marquee -->
    <!-- Hết phần header -->

    <section class="maps">
        <div class="title">
            <h1>
                HỆ THỐNG CỬA HÀNG CHÍNH THỨC
            </h1>
        </div>
        <div class="search-location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1589.4146776221976!2d106.69819295928755!3d10.791893496234728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175298445da6a6d%3A0x5fd9e34856a096fb!2zQW5hbmFzIE1haSBUaOG7iyBM4buxdQ!5e0!3m2!1svi!2s!4v1614492489620!5m2!1svi!2s"
                width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <!-- <section class="geo">
        <h1 style="margin-left: 20px;">Kiểm tra vị trí của bạn ở đâu dưới đây</h1>
        <button onclick="getLocation()" style="margin-left: 20px; padding: 5px 10px; color: orange; font-weight: bold; font-size: 20px; border-radius: 10px;">Kiểm tra vị trí</button>

        <p id="demo" style="margin: 0 auto;"></p> -->

        <!-- <script>
            var x = document.getElementById("demo");

            function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation không hỗ trợ trình duyệt này.";
            }
            }

            function showPosition(position) {
            x.innerHTML = "Vĩ độ: " + position.coords.latitude + 
            "<br>Kinh độ: " + position.coords.longitude;
            }
        </script> -->
    </section>
 
</body>

</html>