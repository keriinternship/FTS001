<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<header>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="img-logo text-center">
                        <img src="./images/logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-8 ">
                    <h1 class=" name text-center">Vé Máy Bay Online</h1>
                    <div class="formlogin">
                        <button class="login">
                            <a href="#" id="login">
                                Đăng nhập
                            </a>
                        </button>

                        <button class="login">
                            <a href="#" id="singin">
                                Đăng ký
                            </a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-nav">
        <div class="container">
            <div class="nav">
                <nav class="a navbar-expand-sm navbar-light">
                    <button class="navbar-toggler d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="http://localhost//ThucTap/HTVMB/Trangchu.php">
                                    Home
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost//ThucTap/HTVMB/VeNoiDia.php">
                                    Vé nội địa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost//ThucTap/HTVMB/VeQuocTe.php">
                                    vé quốc tế
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost//ThucTap/HTVMB/gioithieu.php">
                                    Giới Thiệu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost//ThucTap/HTVMB/lienhe.php">
                                    Liên Hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>