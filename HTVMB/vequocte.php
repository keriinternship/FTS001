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
$sass = file_get_contents("sass/vequocte.scss");
$style = $scss->compile($sass);
file_put_contents("css/vequocte.css",$style);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vé quốc tế</title>
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
<!-- an -->
    <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap-theme.min.css"> -->
    <script type="text/javascript" src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $url_path ?>/js/swiper.min.js" type="text/javascript"></script>
    <!-- css -->
    <link href="<?php echo $url_path ?>/css/master.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/vequocte.css">

    <!-- js -->
    <script src="js/jquery-3.5.1.min.js"></script>
</head>

<body>

    <?php
      include "./master/header.php";
       include './vequocte-content.php';
      include "./master/footer.php";
    ?>
</body>

</html>