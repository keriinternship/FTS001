<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-new">
    <div class="container">
        <div class="row">
            
            <div class="col-sx-2 col-md-3 col-sm-2">
                <p class="title">
                    Trong nước
                </p>
                <div class="content">
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Huế </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Hà Nội</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Vinh </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Đà Lạt</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Đà Nẵng</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Hải Phòng</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Nha Trang</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Phú Quốc</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Sài Gòn</h4>
                    </a>
                </div>

            </div>
            <div class="col-md-3">
                <p class="title">
                    Quốc tế
                </p>
                <div class="content">
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Sydney </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi London</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Paris </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Bắc Kinh</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Tokyo</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Bangkok</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi New York</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Seoul</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Singopore</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <p class="title">
                    Quốc gia
                </p>
                <div class="content">
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Mỹ </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Úc</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Anh </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Pháp</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Trung Quốc</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé máy bay đi Hàn Quốc</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Nhật Bản</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Thái Lan</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé máy bay đi Malaysia</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <p class="title">
                    Hãng bay
                </p>
                <div class="content">
                    <a href="#">
                        <h4 class="title-seo">Vé hãng Vietnam Airline </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé hãng Vietjet Air</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé hãng Jetstar </h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé hãng Tiger Airways</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé hãng United Airlines</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo"> Vé hãng Cathay Pacific Airways</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé Qatar Airways</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé Air asia</h4>
                    </a>
                    <a href="#">
                        <h4 class="title-seo">Vé Air France</h4>
                    </a>
                </div>
            </div>
           
        </div>
    </div>
</div>
