<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-lienhe">
    <div class="lienhe">
        <div class="banner-bg">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 breadcrumb">
                    <h1 class="banner-title">Liên hệ</h1>
                    <div class="content">
                        <div class="contact-us">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-left">
                                        <p><i class="fa fa-circle" aria-hidden="true"></i>
                                            <label>Thắc mắc & góp ý: </label>
                                            <span>19008***</span>
                                        </p>
                                        <p><i class="fa fa-circle" aria-hidden="true"></i>
                                            <label>Liên hệ hóa đơn: </label>
                                            <span>19008*** - 19008***</span>
                                        </p>
                                        <p><i class="fa fa-circle" aria-hidden="true"></i>
                                            <label>Liên hệ đặt vé nội địa: </label>
                                            <span>19008***</span>
                                        </p>
                                        <p><i class="fa fa-circle" aria-hidden="true"></i>
                                            <label>Liên hệ hợp tác: </label>
                                            <span>028.3715.0068</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><i class="fa fa-circle" aria-hidden="true"></i>
                                        <label>Phàn nàn khiếu nại: </label>
                                        <span>19008***</span>
                                    </p>
                                    <p><i class="fa fa-circle" aria-hidden="true"></i>
                                        <label>Liên hệ thanh toán: </label>
                                        <span>19008*** - 19008***</span>
                                    </p>
                                    <p><i class="fa fa-circle" aria-hidden="true"></i>
                                        <label>Liên hệ đặt vé quốc tế: </label>
                                        <span>19008***</span>
                                    </p>
                                    <p><i class="fa fa-circle" aria-hidden="true"></i>
                                        <label>Liên hệ khác: </label>
                                        <span>028.3715.0068</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-infor">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="contact-address">Địa chỉ văn phòng tại TP.Hồ Chí Minh</h5>
                                    <tbody>
                                        <td class="contact-spacing">
                                            <p class="contact-office">Lầu 1, Phòng 205, Tòa Nhà SBI, Lô 6B, Đường Số
                                                3,
                                                Công
                                                Viên Phần Mềm Quang Trung, Phường Tân Chánh Hiệp, Quận 12, Thành phố
                                                Hồ
                                                Chí
                                                Minh</p>
                                            <b class="phone-office">Điện thoại: </b>(+028).3715.0068<br>
                                            <b class="phone-office">Fax:</b> (+028).3715.0068 <br>
                                            <b class="phone-office">Email: </b>ntan@keri.vn
                                        </td>
                                    </tbody>
                                    <h5 class="contact-address">Địa chỉ văn phòng tại TP.Hà Nội</h5>
                                    <tbody>
                                        <td class="contact-spacing">
                                            <p class="contact-office">Lầu 1, Phòng 205, Tòa Nhà SBI, Lô 6B, Đường Số
                                                3,
                                                Công
                                                Viên Phần Mềm Quang Trung, Phường Tân Chánh Hiệp, Quận 12, Thành phố
                                                Hồ
                                                Chí
                                                Minh</p>
                                            <b class="phone-office">Điện thoại: </b>(+028).3715.0068<br>
                                            <b class="phone-office">Fax:</b> (+028).3715.0068 <br>
                                            <b class="phone-office">Email: </b>ntan@keri.vn
                                        </td>
                                    </tbody>
                                </div>
                                <div class="col-md-6">
                                    <p class="title-name">Liên hệ với chúng tôi</p>
                                    <div class="contact-form">
                                        <form>
                                            <label for="name">Tên người gửi:</label> <span class="require">( *
                                                )</span><br>
                                            <input type="text" id="name" name="name" placeholder="Tên..."><br>
                                            <label for="email">Email:</label><span class="require">( * )</span><br>
                                            <input type="email" id="email" name="email" placeholder="Email...">
                                            <br><label for="sđt">Số điện thoại:</label><span class="require">( *
                                                )</span><br>
                                            <input type="phone" id="phone" name="phone"
                                                placeholder="Số điện thoại..."><br>
                                            <label for="w3review">Nội dung gửi:</label><span class="require">( *
                                                )</span>
                                            <textarea id="w3review" name="text" rows="4" cols="50"> </textarea>
                                        </form>
                                        <input class="submit" type="submit" value="Gửi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-navigation">
                        <h3 class="sidebar-title">Thông tin liên hệ</h3>
                        <div class="sidebar-navigation_link">
                            <a href="#">Liên hệ</a>
                        </div><br>
                        <div class="sidebar-navigation_link1">
                            <a href="#">Đăng ký nhận tin</a>
                        </div>
                    </div>
                    <h5 class="news-title"> Theo dõi tin tức </h5>
                    <div class="icon1">
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>