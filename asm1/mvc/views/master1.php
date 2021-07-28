<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/master1.css">
    <link rel="icon"
        href="img/105931075-illustration-vector-of-women-silhouette-icon-fashion-style-on-white-background.jpg">
    <script src="https://kit.fontawesome.com/0ce02f9503.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/public/css/blog.css">
    <link rel="stylesheet" href="/public/css/news.css"> -->
</head>
<body>
    <div class="container-master1">
        <header>
            <?php
                require_once "./mvc/views/blocks/header.php";
            ?>
        </header>
        <nav>
            <?php
                require_once "./mvc/views/blocks/nav.php";
            ?>
        </nav>
        <main>
            <?php 
                require_once "./mvc/views/pages/".$data["page"].".php" 
            ?>
         </main>
        <footer>
            <?php
                require_once "./mvc/views/blocks/footer.php";
            ?>
        </footer>
    </div>
</body>
</html>