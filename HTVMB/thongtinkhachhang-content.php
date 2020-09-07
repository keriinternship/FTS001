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
            <div class="custommer">
                <div class="row">
                    <div class="col-md-7 box-banner">
                        <h3 class="passenger"> <i class="fa fa-fighter-jet" aria-hidden="true"></i>Thông tin chuyến
                            bay
                        </h3>
                        <div class="title">
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
                                <input id="ctl00_UcRightV31_RbRoundTrip" type="radio" name="ctl00$UcRightV31$RoundTrip"
                                    value="RbRoundTrip" checked="checked">
                                <label for="vehicle1"> Nam</label>
                                <input id="ctl00_UcRightV31_RbOneWay" type="radio" name="ctl00$UcRightV31$RoundTrip"
                                    value="RbOneWay">
                                <label for="vehicle2"> Nữ</label><br>

                            </div>
                        </div>
                        <div class="pass2-title">
                            <h3 class="passenger"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                Thông tin hành lý</h3>
                        </div>
                        <div class="infocus">
                            <div class="contentcustom">
                                <label for="#"><strong> Hành lý lượt đi</strong></label>
                                <p>Được mang 7Kg xách tay </p>
                            </div>
                            <div class="forminfocus">
                                <label for="cars">Hành lý lượt đi:</label>
                                <select id="cars">
                                    <option value="volvo">Không mang theo hành lý</option>
                                    <option value="saab">Thêm 15Kg hành lý 220,000 VND</option>
                                    <option value="opel">Thêm 20Kg hành lý 250,000 VND</option>
                                    <option value="audi">Thêm 25Kg hành lý 350,000 VND</option>
                                    <option value="saab">Thêm 30Kg hành lý 450,000 VND</option>
                                    <option value="opel">Thêm 35Kg hành lý 480,000 VND</option>
                                    <option value="audi">Thêm 40Kg hành lý 620,000 VND</option>
                                </select>

                            </div><br>

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
                            <h3 class="passenger"><i class="fa fa-paint-brush" aria-hidden="true"></i> Yêu cầu</h3>
                            <div class="comment">
                                <form action="/action_page.php">
                                    <textarea name="message" rows="10" placeholder="The cat was playing in the garden."
                                        cols="30"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="checkbutton">
                            <button type="button">
                                <a href="ThanhToan.php"> Đặt vé <i
                                        class="fa fa-chevron-circle-right" aria-hidden="true"></i> </a>
                            </button>

                        </div>
                    </div>
                    <div class="col-md-5 lulla">
                        <?php
                        include "./frm-timve.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>