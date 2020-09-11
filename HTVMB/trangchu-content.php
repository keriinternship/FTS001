<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!-- khung tìm chuyến bay -->

<div class="container">
    <div class="content">
        <div class="search-flight clearfix">
            <div class="form-search-flight">
                <div class="wrapfrm">
                    <div class="header-search ">
                        <h2 class="booking-title">
                            Tìm chuyến <i class="fas fa-plane"></i>
                        </h2>
                    </div>
                    <div class="tad-search ">
                        <form onsubmit="return validate_frmtimve()" action="ThongtinVe.php" method="post" class="black"
                            name="frmsearchfli">
                            <div class="headercheck clearfix">
                                <div class="select">
                                    <p class="input-left">
                                        <input name="direction" id="khuhoi" value="0" type="radio" class="loaive"
                                            checked="checked">
                                        <label for="loaive_o">Khứ hồi</label>
                                    </p>
                                    <p class="input-left">
                                        <input name="direction" id="motchieu" value="1" type="radio" class="loaive">
                                        <label for="loaive_o">Một chiều</label>
                                    </p>
                                </div>
                            </div>
                            <div class="first clearfix">
                                <div class="first-content">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="diemdi">
                                                    <div class="block-text">
                                                        <label>Điểm đi</label>
                                                        <input id="diemdi" type="text" class="from" aria-describedby="helpId"
                                                            placeholder="Điểm đi">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="diemden">
                                                    <div class="block-text">
                                                        <label>Điểm đến</label>
                                                        <input id="diemden" type="text" class="from" aria-describedby="helpId"
                                                            placeholder="Điểm đến">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="ngaydi">
                                                    <div class="block-text">
                                                        <label>Ngày Đi:</label>
                                                        <input type="date" id="ngaydi" name="ngaydi" value="22/3/2020">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="block-text">
                                                    <div class="ngayve">
                                                        <label>Ngày Về:</label>
                                                        <input type="date" id="ngayve" name="ngayve">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="first clearfix">
                                <div class="first-content">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="block-text">
                                                    <label for="cars">Người lớn (trên 12) </label>
                                                    <select name="cars" id="cars">
                                                        <?php for ($i= 13; $i <60 ; $i++) { ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="block-text">
                                                    <label for="cars"> Trẻ em (0-12)</label>
                                                    <select name="cars" id="cars1">
                                                        <?php for ($i= 0; $i <13 ; $i++) {  ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                        <?php }?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <div class="butonsearch ">
                                                    <input type="submit" id="cmdsearch" name="cmdsearch"
                                                        value="Tìm chuyến bay">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 1số thông tin mới -->
<div class="maincontent">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <!-- tin hot -->
                    <div class=" homeleft white">
                        <div class="content-box">
                            <div class="title">
                                <h5 class="text-center">
                                    Tin hot
                                    <img src="https://vietjet.net/includes/themes/flight/images/hot_price.gif" alt=""
                                        class="imghot" />
                                </h5>
                            </div>
                            <div class="padding">
                                <p>Săn vé máy bay giá rẻ khuyến mãi Vietjet, Jetstar, VietnamAirlines và Bamboo Airways.
                                    Giá vé máy bay trực tuyến 2020.<br />
                                    Tìm chuyến bay theo cách của bạn, đặt vé máy bay tết sớm để có giá tốt.
                                    Tổng đài vé máy bay phục vụ 24/7.<br />
                                    Đặt vé đoàn Vietnam Airlines cho các công ty du lịch chiết khấu lên đến 30%:
                                    1900 63 6060</p>
                                <div>
                                    <span class="text-left">
                                        <a href="#" class="links ">Hướng dẫn mua vé rẻ</a>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- video chuyen bay -->
                    <div class="video">
                        <div id="youtube-playlist">
                            <!-- <iframe class="yto" allow="autoplay; encrypted-media"
                                src="https://www.youtube.com/embed/j7iMohcHP8w" frameborder="0"
                                allowfullscreen=""></iframe> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- list ve re -->
                    <div class="latest-best-price">
                        <div class="title">
                            <h5>
                                Vé Rẻ Bất Ngờ
                            </h5>
                            <a href="#" class="xemthem">xem thêm</a>
                        </div>

                        <table class="data-list">
                            <tbody>

                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>Cần Thơ</strong> đi <strong>Hà
                                            Nội</strong> ngày <strong>13/8</strong></td>
                                    <td class="price">199000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="VCA" data-arv-code="HAN"
                                            data-dep-date="13/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>Quy Nhơn</strong> đi <strong>TP
                                            HCM</strong> ngày <strong>12/8</strong></td>
                                    <td class="price">299000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="UIH" data-arv-code="SGN"
                                            data-dep-date="12/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>Vinh</strong> đi <strong>TP
                                            HCM</strong> ngày <strong>26/8</strong></td>
                                    <td class="price">299000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="VII" data-arv-code="SGN"
                                            data-dep-date="26/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>TP HCM</strong> đi
                                        <strong>Vinh</strong> ngày <strong>18/8</strong>
                                    </td>
                                    <td class="price">299000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="SGN" data-arv-code="VII"
                                            data-dep-date="18/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>Hà Nội</strong> đi <strong>Cần
                                            Thơ</strong> ngày <strong>14/8</strong></td>
                                    <td class="price">199000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="HAN" data-arv-code="VCA"
                                            data-dep-date="14/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>Cần Thơ</strong> đi <strong>Hà
                                            Nội</strong> ngày <strong>14/8</strong></td>
                                    <td class="price">199000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="VCA" data-arv-code="HAN"
                                            data-dep-date="14/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>TP HCM</strong> đi
                                        <strong>Vinh</strong> ngày <strong>19/8</strong>
                                    </td>
                                    <td class="price">299000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="SGN" data-arv-code="VII"
                                            data-dep-date="19/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                                <tr style="display: table-row;">
                                    <td class="itinerary"> <strong>Hà Nội</strong> đi <strong>Cần
                                            Thơ</strong> ngày <strong>13/8</strong></td>
                                    <td class="price">199000 VND</td>
                                    <td class="action"> <button title="Đặt vé" data-dep-code="HAN" data-arv-code="VCA"
                                            data-dep-date="13/08/2020" class="btn-book-now" type="button"> <span>Đặt
                                                vé</span> </button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="img">
                        <img src="./images/trangchu/sdt.jpg" alt="logoPlain" class="imgsdt">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cmt -->
<div class="maincontent">
    <div class="container">
        <div class="content white">
            <div class="row ">
                <div class="col-md-6">
                    <div class="content-cmt">
                        <h2 class="title">
                            Ý kiến phản hồi
                        </h2>
                        <div class="list-aboutus ">
                            <ul>
                                <li>
                                    <p>"Rất chuyên nghiệp phục vụ tư vấn rất chu đáo. Quyền lợi khách hàng là số 1.."
                                        <br>
                                        <span class="text-right">Nguyễn Thị Minh Phương - 1234567890</span>
                                    </p>
                                </li>
                                <li>
                                    <p>"Rất chuyên nghiệp phục vụ tư vấn rất chu đáo. Quyền lợi khách hàng là số 1.."
                                        <br>
                                        <span class="text-right">Nguyễn Thị Minh Phương - 1234567890</span>
                                    </p>
                                </li>
                            </ul>
                            <a class="viewall" href="http://vebay365.com.vn/Khach-hang-noi-ve-chung-toi">Xem tiếp</a>

                            <div class=" form-aboutus">
                                <form action="#" method="get">
                                    <div class="form-group">
                                        <label for="lbname">Họ Tên: </label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                            placeholder="">

                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại: </label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId"
                                            placeholder="">
                                        <div class="form-group">
                                            <label>Nhận xét</label>
                                            <textarea class="form-control br" name="" id="" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn">GỬI</button>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-question">
                        <h2 class="title">
                            Câu hỏi thường gặp
                        </h2>
                        <div class="box-question">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="titile_news ">Vé máy bay Tết 202121</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="titile_news "> Những điều nên biết để bảo quản hành lý khi đi máy
                                            bay</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="titile_news "> ĐỘNG VẬT CẢNH CÓ ĐƯỢC VẬN CHUYỂN BẰNG ĐƯỜNG HÀNG
                                            KHÔNG?</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="titile_news "> Giá vé trẻ em</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="titile_news "> Hóa đơn ve máy bay</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="titile_news "> Thủ tục mua hộ vé máy bay</span>
                                    </a>
                                </li>
                            </ul>
                            <a class="viewall" href="http://vebay365.com.vn/Khach-hang-noi-ve-chung-toi">Xem tiếp</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- tiện ích -->
<div class="maincontent white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box-content text-center">
                    <a href="#" class="icons">
                        <i class="fa fa-tags"></i>
                    </a>
                    <h2 class="title">giá vé tốt nhất</h2>
                    <p>Cam kết luôn mang lại mức giá tốt nhất cho tất cả dịch vụ mà Keri.vn cung cấp!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-content text-center">
                    <a href="#" class="icons">
                        <i class="far fa-clock"></i>
                    </a>
                    <h2 class="title">dịch vụ 24/7</h2>
                    <p>Dịch vụ khách hàng hoạt động 24/7, đảm bảo luôn có mặt để phục vụ quý khách!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-content text-center">
                    <a href="#" class="icons">
                        <i class="fas fa-award"></i>
                    </a>
                    <h2 class="title">An toàn & tiện lợi</h2>
                    <p>Thao tác đặt dịch vụ đơn giản, xác nhận tức thời, vé điện tử cho nhiều loại hình dịch vụ!</p>
                </div>
            </div>
        </div>

        <!-- đối tác hàng không -->

        <div class="brder">
            <h2 class="title">
                đối tác hàng không
            </h2>
            <p>
                Những đối tác hàng không toàn cầu sẽ chắp cánh đưa bạn đến mọi địa điểm trên thế giới
            </p>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./images/logoHB/NOKAir.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/Jetstar.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/VNAirlines.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/VTAir.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/NOKAir.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/Jetstar.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/VNAirlines.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/VTAir.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/NOKAir.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/Jetstar.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/VNAirlines.PNG" alt="logoPlain">
                    </div>
                    <div class="swiper-slide">
                        <img src="./images/logoHB/VTAir.PNG" alt="logoPlain">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>