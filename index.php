<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css" >
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <?
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        include_once "pages/menu.php";
        ?>
    </nav>
</header>

<section>
    <?
    if (isset($_GET['page'])) {
        if ($page == 1) include_once "pages/about.php";
        if ($page == 2) include_once "pages/product.php";
        if ($page == 3) include_once "pages/contact.php";
        if ($page == 4) include_once "pages/like.php";
        if ($page == 5) include_once "pages/basket.php";
        if ($page == 6) include_once "pages/registration.php";

    }
    ?>
</section>

<footer>
    <?
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    include_once "pages/footer.php";
    ?>
</footer>

</body>
</html>
