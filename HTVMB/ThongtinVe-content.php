<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'qlplanes';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

/* Your query */
$result = $mysqli->query("SELECT `city_id`,`name_city`,`code` FROM `city_code` ORDER BY `city_id` DESC LIMIT  0,23") or die($mysqli->error);
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="mes clearfix">
                    <h2 class="mes-title">Lựa chọn chuyến bay</h2>
                    <div class="ce-title-line">&nbsp;</div>
                    <div class=" mes-im">
                        <div class="mes-left left">
                            <p>Ngày đi: <span>25/5/2020</span></p>

                        </div>
                        <div class="mes-right ">
                            <p>Số Hành khách: <span>2</span></p>
                        </div>
                    </div>
                    <div class="place">
                        <span>Hồ Chí Minh </span>
                        <i class="fa fa-arrow-right"></i>
                        <span> Hà Nội </span>
                    </div>
                </div>
                <div class="khoangcach ">
                </div>
                <!-- Tab links -->
                <div class="tab">
                    <?php
                            $ticket = new Ticket;
                            $getAllDay = $ticket->getAllDay();
                            foreach($getAllDay as $value)
                            {
                            ?>
                    <button class="tablinks" onclick="openCity(event,'T2')"><a class="nav-link"
                            href="index.php?ngaydi=<?php echo $value["ngaydi"]?>"><?php echo $value ["ngaydi"]?></a></button>

                    <?php }?>
                </div>
                <!-- Tab content -->

                <div class="frm-thongtin">
                    <form action="#" class="frmcustomer ">
                        <div class="result-out clearfix">
                            <table class="outbound">
                                <tbody>
                                    <?php
                                $ticket = new Ticket;
                                $ngaydi= $_GET['ngaydi'];
                                $getVeByDay= $ticket->getVeByDay($ngaydi);
                                foreach ($getVeByDay as $key=>$value)
                                {
                                ?>
                                    <tr class="itemfli">
                                        <td class="fli maplan">
                                            <span><?php echo $value['id']?></span>
                                        </td>
                                        <td class="fli nameplain">
                                            <img src="./public/images/logoHB/<?php echo $value['img']?>"
                                                alt="logoPlain">


                                        </td>
                                        <td class="fli maplan">
                                            <span><?php echo $value['name']?></span>
                                        </td>
                                        <td class="fli time">
                                            <span><?php echo $value['gioxp']?> - <?php echo $value['gioden']?></span>
                                        </td>
                                        <td class="fli price">
                                            <span><?php echo $value['giatien']?> VND</span>
                                        </td>

                                        <td class="fli check">

                                        </td>
                                        <td class="fli">
                                            <a class=" chon"
                                                href="thongtinkhachhang.php?id=<?php echo $value['id']?>">Chọn</a>
                                        </td>
                                        <?php } ?>


                                    </tr>
                                    <!-- bat dau tai day -->

                                </tbody>

                            </table>
                    </form>
                    <div class="checkbutton">
                        <button type="button">
                            <a href="http://localhost//ThucTap/HTVMB/Thongtinkhachhang.php"> Đặt vé <i
                                    class="fa fa-chevron-circle-right" aria-hidden="true"></i> </a>
                        </button>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="sort bg-white">
                <h3 class="big-title"> Sắp xếp theo giá</h3>
                <div class="list-sort">
                    <p>
                        <input type="radio" checked="checked" name="sort" id="priss1" value="pris">
                        <label for="priss">Giá cơ bản cho 1 người lớn</label>
                    </p>
                    <p>
                        <input type="radio" name="sorthour" id="hours1" value="hours">
                        <label for="hours">Giá đã bao gồm thuế & phí</label><br>
                    </p>
                </div>
            </div><br>
            <div class="filter bg-white">
                <h3 class="big-title"> Bộ lọc</h3>
                <div class="list-sort">
                    <h4 class="display-sort">Chế độ hiển thị</h4>
                    <p>
                        <input type="radio" checked="checked" name="sort" id="priss" value="pris">
                        <label for="priss">Giá cơ bản cho 1 người lớn</label>
                    </p>
                    <p>
                        <input type="radio" name="sorthour" id="hours" value="hours">
                        <label for="hours">Giá đã bao gồm thuế & phí</label><br>
                    </p>
                </div>
            </div>
            <?php
                        include "./frm-timve.php";
                        ?>
            <div class=" puil-service bg-white">
                <div class="service-header">
                    <h3 class="big-title">
                        <span> Các hình thức thanh toán</span>
                    </h3>
                    <div class="bank1">
                        <ul>
                            <li>
                                <a href="#"><span>Thanh toán tại trực tiếp văn phòng</span></a>
                                <p> Quý khách có thể đến văn phòng thanh toán trực tiếp.Sau khi đặt hàng thành công.
                                    Quý khách vui lòng đến văn phòng của phòng vé để thanh toán và nhận vé.
                                </p>
                            </li>
                            <li>
                                <a href="#"><span>Thanh toán chuyển khoản ngân hàng</span></a>
                                <p> Thanh toán vé qua chuyển khoản ngân hàng bằng thẻ ATM,Internetbanking hoặc ra
                                    các phòng giao dịch để thực hiện thanh toán.</p>
                            </li>
                            <li>
                                <a href="#"><span>Thanh toán online qua các cổng thanh toán</span></a>
                                <p> Đặt Vé Qua Website: Https://Www.Keri.Com Quý Khách Có Thể Thực Hiện Thanh Toán
                                    Online Qua Cổng...</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div> <br>
            <div class="big-font bg-white">
                <h3 class="big-title">

                    <span> Mua vé máy bay bằng hình thức</span>
                </h3>

                <div class="line1">
                    <img src="./images/bgNumber1.png" alt="">
                    <span class="inside1">Trực tiếp trên website KERI</span>
                </div>
                <div class="line2">
                    <img src="./images/bgNumber2.png" alt="">
                    <span class="inside1">Qua chat</span>
                    <div class="chatlist">
                        <a href="#" class="chat1"><img src="./images/messenger.png" alt=""></a>
                        <a href="#" class="chat1"><img src="./images/zalo.png" alt=""></a>
                        <a href="#" class="chat1"><img src="./images/viber.png" alt=""></a>
                        <a href="#" class="chat1"><img src="./images/skype.png" alt=""></a>
                    </div>
                </div>
                <div class="line3">
                    <img src="./images/bgNumber3.png" alt="">
                    <span class="inside1">Gọi điện cho tổng đài KERI</span>
                    <div class="phone">
                        <a href="#"><img src="./images/phone.png" alt=""></a> Tổng đài: <a href="#">19008***</a>

                    </div>
                </div>
                <div class="line4">
                    <img src="./images/bgNumber4.png" alt="">
                    <span class="inside1"> Đến trực tiếp văn phòng tại Hà Nội hoặc Sài Gòn</span>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
<div class="khoangcach ">
</div>