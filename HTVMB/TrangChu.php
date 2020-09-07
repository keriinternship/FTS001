<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

    require_once "libs/scss.inc.php";

    use ScssPhp\ScssPhp\Compiler;

    $scss = new Compiler();

    $scss->setImportPaths('sass/');

    $styles = $scss->compile('@import "master.scss";');

    $css = fopen('css/master.css','w');
    
    fwrite($css,$styles);

    
    $styles3 = $scss->compile('@import "trangchu.scss";');

    $css3 = fopen('css/trangchu.css','w');
    
    fwrite($css3,$styles3);

   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ</title>
    <!-- bootstrap -->
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawesome -->
    <link href="<?php echo $url_path ?>/libs/fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/libs/family-font/Roboto-Black.ttf" rel="stylesheet" />
    <!--swiper  -->
    <link href="<?php echo $url_path ?>/libs/swiper-5.4.1/package/css/swiper.css" rel="stylesheet" />
    <script src="<?php echo $url_path ?>/libs/swiper-5.4.1/package/js/swiper.js"></script>
    <link href="<?php echo $url_path ?>/libs/swiper-5.4.1/package/css/swiper.min.css" rel="stylesheet" />
    <script src="<?php echo $url_path ?>/libs/swiper-5.4.1/package/js/swiper.min.js"></script>

    <!-- css -->
    <link href="<?php echo $url_path ?>/css/master.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/trangchu.css" rel="stylesheet" type="text/css" />
    

    <!-- js -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/swiperJS.js"></script> <!-- swiper js -->

</head>

<body>

    <?php
        include "./master/header.php";
        include "./trangchu-content.php";
        include "./master/footer.php";
        
   ?>
</body>

</html>