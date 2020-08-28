<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-thongtinkhachhang">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 box-banner">
                    <div class="title">
                        <h3 class="passenger"><i class="fa fa-fighter-jet" aria-hidden="true"></i>Thông tin chuyến
                            bay
                        </h3>
                        <div class="informattion">
                            <div class="contentleftinrow">Chuyến bay:</div>
                            <div class="contentrightinrow">
                                <b> Một chiều </b>
                            </div>
                        </div>
                        <div class="contentleftinrow">Số lượng hành khách :</div>
                        <div class="contentrightinrow">
                            <b> 1 người lớn,</b>
                        </div>
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <td>
                                    <b>Lượt đi</b>
                                    <br>
                                    <img src="./images/vj.gif" alt="">
                                </td>
                                <td><b>Hồ Chí Minh(SGC)</b><br>
                                    24/07/2020 , <b>05:59</b>
                                </td>
                                <td><b>Hà Nội (HN)</b><br>
                                    26/07/2020 , <b>03:59</b> </td>
                                <td>Mã chuyến: <b>VJ120</b><br>
                                    Loại vé: <strong> Eco-Phổ thông</strong> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pass2-title">
                        <h3 class="passenger"><i class="fa fa-user" aria-hidden="true"></i>
                            Thông tin hành khách</h3>
                    </div>
                    <div class="infocus">
                        <div class="contentcustom">
                            <i class="fa fa-user"></i>
                            <b style="font-size: 15px;"> Người lớn</b>
                        </div><br>
                        <div class="forminfocus">
                            <form>
                                <b for="name"> Họ và tên: </b>
                                <span class="textcolor"> *</span>
                                <input type="text" id="name" name="name" placeholder=" Nguyen Van A">
                            </form>
                        </div><br>
                        <div class="build">
                            <b>Giới tính:</b>
                            <input type="radio" id="vehicle1" name="vehicle1" value="Nam">
                            <label for="vehicle1"> Nam</label>
                            <input type="radio" id="vehicle2" name="vehicle2" value="Nu">
                            <label for="vehicle2"> Nữ</label><br>
                            <p>Được mang 7kg xách tay và 20kg hành lý ký gửi</p>
                        </div>
                    </div>
                    <div class="pass2-title">
                        <h3 class="passenger"><i class="fa fa-phone" aria-hidden="true"></i>
                            Thông tin liên hệ</h3>
                    </div>
                    <div class="domail">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <b for="name">Họ và tên: </b>
                                    <span class="textcolor"> *</span>
                                    <input type="text" id="name1" name="name"><br><br>
                                </form>
                                <form>
                                    <b for="fname">Điện thoại: </b>
                                    <span class="textcolor"> *</span>
                                    <input type="text" id="phone" name="phone"><br><br>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <b for="email">Email: </b>
                                    <input type="text" id="email" name="email"><br><br>
                                </form>
                                <form>
                                    <b for="email">Ký gửi: </b>
                                    <input type="text" id="text" name="text"><br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="requesr-title">
                        <h3 class="request">
                            Yêu cầu</h3>
                        <div class="comment">
                            <form action="/action_page.php">
                                <textarea name="message" rows="10"
                                    cols="30">The cat was playing in the garden.</textarea>
                            </form>
                        </div>
                    </div>
                    <div class="checkbutton">
                        <button type="button">
                            <a href="http://localhost//ThucTap/HTVMB/Thanhtoan.php"> Đặt vé <i
                                    class="fa fa-chevron-circle-right" aria-hidden="true"></i> </a>
                        </button>

                    </div>
                </div>
                <div class="col-md-4 information">
                    <div class="find bg-white">
                        <form action="search.php" method="get">
                            <h3 class="find-banner" style="color: red;"><i class="fa fa-plane" aria-hidden="true"
                                    style="color: blue;"></i> Tìm kiếm chuyến bay</h3>
                            <div class="select">
                                <p class="find-select">
                                    <input name="direction" id="loaive_r" value="1" type="radio" class="loaive"> <label
                                        for="loaive_o">Khứ hồi</label></p>
                                <p class="find-select1">
                                    <input name="direction" id="loaive_l" value="1" type="radio" class="loaive"> <label
                                        for="loaive_o">Một chiều</label></p>
                            </div>
                            <div class="cars ">
                                <label for="cars">Điểm đi và điểm đến</label>
                                <select id="search" type="text" placeholder="Mã chuyến bay" name="key">
                                    <option value="Select School">---Chọn---</option>
                                    <!-- <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['code'] . "'>" . $row['name_city'] . "(" . $row['code'] . ")"."</option>";
                        }
                        ?> -->
                                </select>
                                <br><br>

                            </div>
                            <div class="text-right  ">

                                <i class="fa fa-search" aria-hidden="true"></i>

                                <input class="btn submit" id="submit" type="submit" value="Tìm kiếm">
                            </div>

                    </div><br>
                    <div class="bg-white">
                        <h3 class="buil-title">Điều kiện vé</h3>
                        <div class="jerry">
                            <p>Hoàn vé: Không được phép</p>
                            <p>Đổi Tên Hành Khách: Được phép - Thu phí: 374.000 VND + Giá vé chênh lệch (nếu có)</p>

                            <p>Đổi Hành Trình: Được phép - Thu phí: 374.000 VND + Giá vé chênh lệch (nếu có). Đổi đồng
                                hạng hoặc nâng hạng tương ứng của hành trình mới.</p>

                            <p>Đổi Ngày Giờ Chuyến Bay: Được phép - Thu phí: 374.000 VND + Giá vé chênh lệch (nếu có).
                            </p>
                            <p>Bảo lưu: Không được phép</p>

                            <p>Thời hạn thay đổi (bao gồm thay đổi tên, ngày/chuyến bay): Trước giờ khởi hành 12 tiếng.
                            </p>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="nature" src="./images/jt.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="nature" src="./images/qh.gif">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="nature" src="./images/vj.png">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="nature" src="./images/vn.png">
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>