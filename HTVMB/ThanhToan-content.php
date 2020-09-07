<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="maincontent">
    <div class="container">
        <div class="content ">
            <div class="row">
                <div class="col-md-8 paytitle">
                    <div class="information-content">
                        <h3 class="title text-center"> Thanh Toán </h3>
                        <div class="payment-heading">
                            <div class="mesage">
                                <span>Quý khách vui lòng chuyển khoản ngay hoặc liên hệ phòng vé để thực hiện thanh toán. 
                                    Vì vé đi trong vòng 24h chúng tôi <b>không đảm bảo về giá vé</b>
                                    (có thể tăng) và <b>đặt chỗ</b> (không còn chỗ) trước khi nhân được thanh toán của quý khách.
                                    (Xin lưu ý)</span>
                            </div>
                            <div class="bor">
                                <h4>Vui lòng Chọnhình thức thanh toán</h4>
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'nganhang')">
                                    Chuyển  khoản qua ngân hàng</button>
                                    <br />
                                    <button class="tablinks" onclick="openCity(event, 'vanphong')">
                                    Thanh toán tại văn phòng
                                </button>

                                </div>

                                <div id="nganhang" class="tabcontent">
                                    <h5>Thanh toán qua chuyển khoản</h5>
                                    <p>- Nếu chuyển khoản qua Internet Banking quý khách vui lòng ghi Mã Đơn Hàng hoặc
                                        Số điện thoại liên lạc vào nội dung thanh toán.<br />
                                        - Nếu chuyển khoản qua ATM, sau khi chuyển khoản quý khách vui lòng gọi điện
                                        thoại thông báo cho chúng tôi.<br />
                                        - Gọi xác nhận thanh toán ngay sau khi chuyển khoản thành công.<br />
                                        Hãy <a href="XacNhan.php">Chọn</a> ngân hàng mà quý khách tiện lợi nhất:</p>
                                    <br />
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/DongA.png" alt="" class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">Dong A </p>

                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        Chí Minh</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon"> <a href="XacNhan.php">Chọn</a></button></td>
                                            </tr>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/acb.png" alt="" class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">ACB </p>
                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        chí minh</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon"> <a href="XacNhan.php">Chọn</a></button></td>
                                            </tr>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/Agribank.jpg" alt=""
                                                        class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">Agribank</p>
                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        chí minh</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon"> <a href="XacNhan.php">Chọn</a></button></td>
                                            </tr>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/bidv.png" alt="" class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">BIDV</p>
                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        chí minh</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon"> <a href="XacNhan.php">Chọn</a></button></td>
                                            </tr>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/sacombank.jpg" alt=""
                                                        class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">SACOMBANK</p>
                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        chí minh</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon"> <a href="XacNhan.php">Chọn</a></button></td>
                                            </tr>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/vietcom.jpg" alt=""
                                                        class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">VIETCOMBANK</p>

                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        chí minh</p>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon"> <a href="XacNhan.php">Chọn</a></button></td>
                                            </tr>
                                            <tr class="br">
                                                <td>
                                                    <img src="./images/logoNganhang/VIETINBANK.png" alt=""
                                                        class="img-fluid">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="bankname">VIETINBANK</p>

                                                                </td>
                                                                <td>
                                                                    <p>Phòng giao dịch Gò Vấp - Hồ
                                                                        chí minh</p>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>Chủ Tài Khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <p><span class="un">Nguyễn Văn Hảo</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p> Số tài khoản: </p>
                                                                </td>
                                                                <td>
                                                                    <strong>09890980998</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td> <button class="chon">
                                                        <a href="XacNhan.php">Chọn</a>
                                                    </button></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div id="vanphong" class="tabcontent">
                                    <h3>Phòng vé KERI</h3>
                                    <p><span class="text-danger font-weight-bold">ĐC: </span> Công viên phần mềm
                                        quang
                                        trung
                                    </p>
                                    <p> <span class="text-danger font-weight-bold">Call: </span>0987654321</p>
                                    <p> <span class="text-danger font-weight-bold">Fax: </span>0987.345.344</p>
                                    <div class="text-center">
                                        <button class="chon">Thanh Toán tại Văn Phòng</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 lulla">
                    <?php
                        include "./frm-timve.php";
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>