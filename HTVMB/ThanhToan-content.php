<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="content bg-light">
        <div class="row">
            <div class="col-md-8">
                <div class="information-content">
                    <div class="content">
                        <div class="heading">
                            <h3>Thanh Toán</h3>

                        </div>
                        <div class="payment-heading">
                            <div class="mesage">
                                <span>Quý khách vui lòng chuyển khoản ngay hoặc liên hệ phòng vé để thực hiện thanh
                                    toán. Vì vé đi trong vòng 24h chúng tôi <b>không đảm bảo về giá vé</b> (có thể tăng)
                                    và <b>đặt chỗ</b>
                                    (không còn chỗ) trước khi nhân được thanh toán của quý khách.(Xin lưu ý)</span>
                            </div>
                            <h2>Vui lòng chọn hình thức thanh toán</h2>


                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'nganhang')" id="defaultOpen">Chuyển
                                    khoản qua ngân hàng</button>
                                <button class="tablinks" onclick="openCity(event, 'vanphong')">Thanh toán tại văn
                                    phòng</button>

                            </div>

                            <div id="nganhang" class="tabcontent">
                                <h3>Thanh toán qua chuyển khoản</h3>
                                <p>Quý khách có thể thanh toán bằng cách chuyển tiền tới tài khoản của chúng tôi, hãy
                                    chọn ngân hàng mà quý khách tiện lợi nhất:</p>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="#" alt="" class="img-fuild"></td>
                                            <td>
                                                <p class="bankname">Ngân hamhg donga: Phòng giao dịch Gò Vấp - Hồ chí
                                                    minh</p>
                                                <p>Chủ Tài Khoản: <span class="un">Nguyễn Văn Hảo</span></p>
                                                <p> Số tài khoản: 09890980998</p>
                                            </td>
                                            <td> <button>Chọn tài khoản</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="#" alt="" class="img-fuild"></td>
                                            <td>
                                                <p class="bankname">Ngân hamhg donga: Phòng giao dịch Gò Vấp - Hồ chí
                                                    minh</p>
                                                <p>Chủ Tài Khoản: <span class="un">Nguyễn Văn Hảo</span></p>
                                                <p> Số tài khoản: 09890980998</p>
                                            </td>
                                            <td> <button>Chọn tài khoản</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="#" alt="" class="img-fuild"></td>
                                            <td>
                                                <p class="bankname">Ngân hamhg donga: Phòng giao dịch Gò Vấp - Hồ chí
                                                    minh</p>
                                                <p>Chủ Tài Khoản: <span class="un">Nguyễn Văn Hảo</span></p>
                                                <p> Số tài khoản: 09890980998</p>
                                            </td>
                                            <td> <button>Chọn tài khoản</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="vanphong" class="tabcontent">
                                <h3>Phòng vé KERI</h3>
                                <p><span class="text-danger font-weight-bold">ĐC: </span> Công viên phần mềm quang trung
                                </p>
                                <p> <span class="text-danger font-weight-bold">Call: </span>0987654321</p>
                                <p> <span class="text-danger font-weight-bold">Fax: </span>0987.345.344</p>
                                <div class="text-center">
                                    <button>Thanh Toán tại Văn Phòng</button>
                                </div>

                            </div>



                        </div>
                    </div>
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