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
$sass = file_get_contents("sass/thongtinkhachhang.scss");
$style = $scss->compile($sass);
file_put_contents("css/thongtinkhachhang.css",$style);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thông tin khách hàng</title>
    <!-- bootstrap -->
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawesome -->
    <link href="<?php echo $url_path ?>/libs/fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/libs/family-font/Roboto-Black.ttf" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--swiper  -->
    <link href="<?php echo $url_path ?>/libs/swiper-5.4.1/package/css/swiper.css" rel="stylesheet" />
    <script src="<?php echo $url_path ?>/libs/swiper-5.4.1/package/js/swiper.js"></script>
    <link href="<?php echo $url_path ?>/libs/swiper-5.4.1/package/css/swiper.min.css" rel="stylesheet" />
    <script src="<?php echo $url_path ?>/libs/swiper-5.4.1/package/js/swiper.min.js"></script>

    <!-- css -->
    <link href="<?php echo $url_path ?>/css/master.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/thongtinkhachhang.css">
    <!-- js -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiperJS.js"></script> <!-- swiper js -->
</head>


<body>
<?php
  include "./master/header.php";
  include './thongtinkhachhang-content.php';
  include "./master/new-content.php";
  include "./master/footer.php";
?>
</body>

</html>