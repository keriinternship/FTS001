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
        <div class="row">
            <div class="col-md-8">
                <div class="information-content bg-white">
                    <div class="box-heading-h3">
                        <div class="header_left"></div>
                        <div class="box-heading box-heading-order large-title">

                            <h3 class="title "> Xác nhận đặt vé </h3>
                        </div>
                        <div class="header_right"></div>
                    </div>
                    <div class="payment-heading" style="padding:5px 10px">
                        <div class="message_selectpayment">
                            <span>Quý khách vui lòng chuyển khoản ngay hoặc liên hệ phòng vé để thực hiện thanh toán. Vì
                                vé đi trong vòng 24h chúng tôi <b>không đảm bảo về giá vé</b> (có thể tăng) và <b>đặt
                                    chỗ</b> (không còn chỗ) trước khi nhân được thanh toán của quý khách.(Xin lưu
                                ý)</span>
                        </div>

                        <div style="border-bottom:1px dashed;margin-top:5px;margin-bottom:5px"></div>
                    </div>
                    <!--payment-heading-->
                    <div class="des_success">
                        <div class="confirmbox">
                            <h2>Mã Số Đơn Hàng: <b>VNAL32359</b></h2>
                            <h3>***
                                Đơn hàng đang được xử lý. Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất.
                            </h3>
                            <p>
                                Booker sẽ liên hệ quý khách để xác thực thông tin và cố định giá vé.
                                Sau quá trình xác nhận này quý khách cần chuyển khoản thanh toán để bảo vệ giá.
                                Sau khi chuyển khoản xin vui lòng nhắn tin vào số <span class="bold"> 08 19006088 -
                                    028.62657027 -
                                    0938395797 </span>kèm theo mã số đơn hàng.
                                <br>
                                Chi tiết thông tin chuyến bay và mã vé sẽ được gửi tới email: <span
                                    class="bold">ngocphuong989898@gmail.com</span>
                            </p>
                        </div>
                        <h3 class="header-confirm"> Thông tin đơn hàng </h3>
                        <div class="field-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="150px;">Mã đơn hàng:</td>
                                        <td><strong>VNAL32359</strong></td>
                                        <td>Trạng thái:</td>
                                        <td><strong>Chưa xác nhận</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Chuyến bay:</td>
                                        <td><strong>
                                                một lượt</strong></td>
                                        <td>Số hành khách:</td>
                                        <td><strong>1 người lớn
                                            </strong></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đi:</td>
                                        <td><strong>04-09-2020</strong></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="fil-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="diadiem">
                                            <h2 class="d_title">
                                                Hà Nội (HAN) Đến Hồ Chí Minh (SGN)</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img
                                                src="https://vietnamairslines.com/image/air/VJ.png"><strong>VJ141</strong><br>
                                        </td>
                                        <td>199,000vnđ</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Cất cánh</td>
                                        <td>17:35 <i>04-09-2020</i> </td>
                                        <td>Tại: <strong>Hà Nội (HAN) </strong></td>
                                    </tr>
                                    <tr>
                                        <td>Hạ cánh</td>
                                        <td> 19:45 <i>04-09-2020</i></td>
                                        <td>Tại: <strong> Hồ Chí Minh (SGN)</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="confirm_info_total">
                            <span>Tổng cộng : </span><strong class="text-danger">929,900vnđ</strong>

                            <br>
                        </div>
                        <div class="confirm_info">
                            <p>
                                <span class="text-danger">Lưu ý ** : </span>
                                Nếu quý khách thanh toán bằng hình thức <strong>chuyển khoản</strong>, <i>vui lòng điền
                                    mã đơn hàng hoặc
                                    số điện thoại liên hệ trong nội dung giao dịch </i>
                                hoặc Sau khi <strong>thanh toán hoàn tất</strong> vui lòng gọi lại cho chúng tôi theo
                                số:<span class="hotline_confirm">08 19006088 - 028.62657027 - 0938395797</span>
                                Để chúng tôi kiểm tra giao dịch và xuất vé trong thời gian <strong>sớm nhất</strong> !
                            </p>
                            <br>
                            <p><strong>Nếu có bất kỳ thắc mắc nào, hãy liên hệ ngay với chúng tôi:</strong></p>
                            <ul>
                                <li>Qua số điện thoại: <strong>08 19006088 - 028.62657027 - 0938395797</strong></li>
                                <li>Hoặc truy cập trang <a class="text-danger"
                                        href="https://vietnamairslines.com/lienhe">Hỗ
                                        trợ khách
                                        hàng</a> để gửi yêu
                                    cầu. Chúng tôi sẽ phản hồi ngay khi nhận được yêu cầu.</li>
                            </ul>
                        </div>

                        <h2 class="thongbao
                        ">Quý khách vui lòng kiểm tra email để đảm bảo thông tin chính xác và chắc chắn giữ chổ.</h2>
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