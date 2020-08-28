<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<footer>
    <div class="footer">
        <div class="container">
            
            <div class="row">
                <div class="col-md-2">
                    <h5>CATEGORIES</h5>
                    <p>Gift Packs </p>
                    <p>Red Wines </p>

                </div>
                <div class="col-md-2">
                    <h5>HELP</h5>
                    <p>Guarantee </p>
                    <p> Terms & Conditions of Use</p>
                </div>
                <div class="col-md-4">
                    <h5>CONTACT INFORMATION</h5>
                    <p class="f2-3">Công viên Phần mềm Quang Trung, 1 Tô Ký, Tân Hưng Thuận, Quận 12, Hồ Chí Minh
                    </p>
                    <a class="mail" href="#">Email: NgocPhuong@gmail.com</a>
                </div>
                <div class="col-md-4">
                    <h5>FOLLOW US</h5>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-pinterest"></i>
                    </div>

                    <b>
                        <h4>TOLL FREE: (123) 456-7890</h4>
                    </b>
                </div>
            </div>
        </div>

    </div>
</footer>