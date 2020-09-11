<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-vequocte">
    <div class="container">
        <div class="lulla">
            <div class="row">
                <div class="col-md-6 mutte">
                    <div class="find bg-hende">
                        <h3 class="find-banner"><i class="fa fa-plane" aria-hidden="true"></i> Đặt
                            vé
                            máy bay quốc tế</h3>
                        <div class="select">
                            <p class="find-select">
                                <input class="loaive" id="ctl00_UcRightV31_RbRoundTrip" type="radio"
                                    name="ctl00$UcRightV31$RoundTrip" value="RbRoundTrip" checked="checked"> <label
                                    for="loaive_o">Khứ hồi</label>
                            </p>
                            <p class="find-select1">
                                <input class="loaive" id="ctl00_UcRightV31_RbOneWay" type="radio"
                                    name="ctl00$UcRightV31$RoundTrip" value="RbOneWay"> <label for="loaive_o">Một
                                    chiều</label>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form class="form1">
                                    <label for="cars">Người lớn(trên 12) </label>
                                    <select name="cars" id="cars" style="color:#000">
                                        <option value="volvo">13</option>
                                        <option value="saab">14</option>
                                        <option value="opel">15</option>
                                        <option value="audi">16</option>
                                        <option value="volvo">17</option>
                                        <option value="saab">18</option>
                                        <option value="opel">19</option>
                                        <option value="audi">20</option>
                                        <option value="volvo">21</option>
                                        <option value="saab">22</option>
                                        <option value="opel">23</option>
                                        <option value="audi">24</option>
                                    </select>
                                </form>
                                <div class="date-time">
                                    <table>
                                        <tr>
                                            <label class="font-white">Ngày đi <a href="#"><i class="fa fa-calendar"
                                                        aria-hidden="true" style="color: white"></i></a>
                                                <form class="form3">
                                                    <form action="/action_page.php">
                                                        <input class="birthday" type="date" id="birthday1"
                                                            name="birthday">
                                                    </form>
                                                </form>
                                            </label>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <div class="cars">
                                    <label for="cars">Điểm đi</label>
                                    <select id="search" type="text" placeholder="Mã chuyến bay" name="key"
                                        style="color:#000">
                                        <option value="Select School">---Chọn---</option>
                                        <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['code'] . "'>" . $row['name_city'] . "(" . $row['code'] . ")"."</option>";
                            }
                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="form2">
                                    <label for="cars"> Trẻ em(0-12)</label>
                                    <select name="cars" id="cars1" style="color:#000">
                                        <option value="volvo">1</option>
                                        <option value="saab">2</option>
                                        <option value="opel">3</option>
                                        <option value="audi">4</option>
                                        <option value="volvo">5</option>
                                        <option value="saab">6</option>
                                        <option value="opel">7</option>
                                        <option value="audi">8</option>
                                        <option value="volvo">9</option>
                                        <option value="saab">10</option>
                                        <option value="opel">11</option>
                                        <option value="audi">12</option>
                                    </select>
                                </form><br>
                                <div class="date-time">
                                    <table>
                                        <tr>
                                            <label class="font-white">Ngày đến <a href="#"><i class="fa fa-calendar"
                                                        aria-hidden="true" style="color: white"></i></a>
                                                <form class="form3">
                                                    <form action="/action_page.php">
                                                        <input class="birthday" type="date" id="birthday"
                                                            name="birthday">
                                                    </form>
                                                </form>
                                            </label>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <div class="cars">
                                    <label for="cars">Điểm đến</label>
                                    <select id="search" type="text" placeholder="Mã chuyến bay" name="key"
                                        style="color:#000">
                                        <option value="Select School">---Chọn---</option>
                                        <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['code'] . "'>" . $row['name_city'] . "(" . $row['code'] . ")"."</option>";
                            }
                            ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="button"> <button class="submit" type="submit" form="nameform" value="Submit"><i
                                    class="fa fa-search" aria-hidden="true"></i> Tìm chuyến bay</button></div>
                    </div><br>
                </div>
                <div class="col-md-6">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="./images/vequocte/hongkong.png" alt="" width="100%">
                            </div>
                            <div class="swiper-slide"><img src="./images/vequocte/quata.png" alt="" width="100%"></div>
                            <div class="swiper-slide"><img src="./images/vequocte/singapore.png" alt="" width="100%">
                            </div>
                            <div class="swiper-slide"> <img src="./images/vequocte/vietnam.png" alt="" width="100%">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="cphWidget_pnlService">
            <div class="row">
                <div class="col-md-8">
                    <div class="service-methodLP">
                        <h1 class="ticket">Đặt mua vé máy bay quốc tế giá rẻ</h1>
                        <p>Nếu như trước đây, bạn phải mất hàng giờ truy cập website từng hãng hàng không để tìm kiếm
                            tấm vé phù
                            hợp cho chuyến đi của mình, thì giờ đây, với KERI.vn bạn hoàn toàn có thể sở hữu vé máy bay
                            đi quốc
                            tế chỉ trong vòng 1 phút.</p>
                        <div class="img-f"> <img src="./images/vequocte/datmuavequocte.png" alt="" width="80%"><br><br>
                            <a href="http://localhost:82/maybay/vequocte.php"><em>Đặt mua vé máy bay quốc tế</em></a>
                        </div>

                        <h3 class="ticket1"><strong>Hành trình bay quốc tế từ Việt Nam</strong></h3>

                        <p>Tại Việt Nam có 10 sân bay quốc tế thực hiện hành trình bay tới các châu lục: Á, Âu, Mỹ, Phi…
                        </p>
                        <p>Cụ thể: </p>
                        <p>Sân bay quốc tế Cần Thơ (Cần Thơ) <br>
                            Sân bay quốc tế Cam Ranh (Khánh Hòa) <br>
                            Sân bay quốc tế Đà Nẵng (Đà Nẵng) <br>
                            Sân bay quốc tế Phú Quốc (Kiên Giang) <br>
                            Sân bay quốc tế Cát Bi (Hải Phòng) <br>
                            Sân bay quốc tế Chu Lai (Quảng Nam) <br>
                            Sân bay quốc tế Nội Bài (Hà Nội) <br>
                            Sân bay quốc tế Vinh (Nghệ An) <br>
                            Sân bay quốc tế Tân Sơn Nhất (Tp Hồ Chí Minh)<br>
                            Sân bay quốc tế Phú Bài (Thừa Thiên - Huế)<br>
                            Sân bay quốc tế Vân Đồn (Quảng Ninh)<br>
                            Sân bay quốc tế Liên Khương (Đà Lạt)</p>
                        <p>Trong đó Nội Bài và Tân Sơn Nhất hiện là 2 cảng hàng không lớn nhất, khai thác nhiều đường
                            bay đi
                            quốc tế
                            nhất.</p>
                        <h3 class="ticket1"><strong>Các hãng hàng không khai thác đường bay quốc tế từ Việt Nam</strong>
                        </h3>
                        <p>Tại Việt Nam, từ các cảng hàng không trên, bạn có thể thực hiện hành trình bay tới các nước
                            trên thế
                            giới
                            với tấm vé máy bay của hơn 350 hãng hàng không quốc tế và 3 hãng hàng không nội địa.</p>
                        <p>- Hãng hàng không nội địa: Tính đến thời điểm này 3 hãng hàng không nội địa là: <a
                                href="#">Vietnam Airlines</a>,<a href="#">Vietjet Air</a> và <a href="#">Jetstar</a> đều
                            có đường bay đi
                            quốc
                            tế.
                        <div class="img-f"> <img src="./images/vequocte/airline.png" alt="" width="80%"></div>
                        </p>
                        <p>+ Vietnam Airlines là hãng hàng không nội địa có mặt trên hầu hết trên khắp các đường bay
                            quốc tế tới Châu Á, Châu Âu, Châu Mỹ, Châu Phi…
                        </p>
                        <p>+ Jetstar: Hiện hãng này đang phục vụ đường bay tới 14 nước trên thế giới: Úc, Campuchia,
                            Trung Quốc, Hongkong, Indonexia; Malaysia, Myanmar, Nhật Bản, New Zealand; Philippine;
                            Singapore; Đài Loan; Thái Lan, Ma Cau.</p>
                        <p>+ Vietjet Air là hãng hàng không có ít đường bay quốc tế nhất. Hiện hãng mới có đường bay tới
                            Bangkok (Thái Lan), Singapore, Đài Loan, Seoul (Hàn Quốc), Siem Riep (Campuchia).</p>
                        <h3 class="ticket1"><strong>Lưu ý khi đặt mua vé máy bay quốc tế</strong></h3>
                        <p>Vé máy bay quốc tế thường chia ra thành 2 mùa: mùa thấp điểm và mùa cao điểm. Mùa cao điểm
                            thường rơi vào dịp hè, dịp trước/sau Tết và khi du học sinh nhập học. Mùa thấp điểm thường
                            rơi vào dịp tháng 9,10 hằng năm. Để đặt vé giá tốt bạn nên chọn mùa thấp điểm, thời điểm các
                            hãng hay tung ra chương trình khuyến mãi kích cầu. Nếu bay vào mùa cao điểm bạn có thể lựa
                            chọn các hãng hàng không giá rẻ và nên đặt vé ít nhất trước 1 tháng để sở hữu những tấm vé
                            giá tốt. Mỗi điểm đến sẽ có những hãng hàng không ruột. Như vé quốc tế đi Úc và New Zealand
                            có Qantas, Jetstar, Singapore Airlines… Vé quốc tế đi Nhật Bản có ANA, Japan Airlines; Hàn
                            Quốc thì có Korean Air; Đài Loan có China Southern Airlines; Châu Âu có Qatar Airways,
                            Etihad…</p>
                        <h3 class="ticket1"><strong>Chặng bay quốc tế phổ biến</strong></h3>
                        <p><a href="#">Vé máy bay</a> quốc tế đi Châu Á:
                            Các điểm đến quốc tế có lượng hành khách bay nhiều nhất hiện nay gồm có: Bangkok, Singapore,
                            Kuala Lumpur, Guangzhou, Taipei, Seoul, Los Angeles, Tokyo, Hong Kong, Vientiane, Sydney,
                            Phnom Penh...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-HD">
                        <div class="category">
                            Tin vé quốc tế
                        </div>
                        <div class="category1">
                            <a href="#"> <b> Đắm chìm trong sắc thu nước Nhật với loạt vé máy bay giá chỉ từ 421
                                    USD</b></a>
                            <div class=" pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/vequocte/nhat.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">Đặt ngay loạt vé máy bay có giá khởi điểm chỉ từ 421 USD/chiều
                                            cho hành trình bay từ Việt Nam đến Tokyo (Nhật Bản) vào tháng 10/2020, các
                                            bạn sẽ có cho mình hàng loạt trải ...</div>
                                    </div>
                                </div>
                            </div>
                            <div class="category1">
                                <a href="#"> <b>
                                        Vietnam Airlines mở bán vé bay quốc tế MỘT CHIỀU chặng Hà Nội – Taipei (Đài
                                        Loan) &
                                        Hà Nội – Frankfurt (Đức)</b></a>
                                <div class="pad10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="./images/vequocte/duc.png" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="desc">
                                                Mới đây, hãng hàng không quốc gia Vietnam Airlines đã thông báo mở bán
                                                vé
                                                máy bay cho các chặng bay thẳng quốc tế đến Đức và Đài Loan khởi hành
                                                ngay
                                                trong tháng 8/2020.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category1">
                                <a href="#"> <b> Lên lịch trình, đặt vé sớm để được hưởng mức giá tốt trên hành trình
                                        đến
                                        Amsterdam (Hà Lan) tháng 10/2020</b></a>
                                <div class="pad10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="./images/vequocte/halan.png" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="desc">
                                                Đất nước Hà Lan xinh đẹp với loài hoa tulip cùng những chiếc cối xay
                                                gió
                                                khổng lồ… luôn là điểm dừng chân thú vị hấp dẫn bất kỳ ai. Nếu bạn
                                                đang có
                                                dự định ghé thăm quốc ...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category1">
                                <a href="#"> <b>Bay Đài Bắc (Đài Loan) vào tháng 9/2020 với loạt vé chỉ 254 USD</b></a>
                                <div class="pad10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="./images/vequocte/daibac.png" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="desc">
                                                Những tấm vé máy bay có mức giá được cho là khá tốt trên hành trình từ
                                                Việt
                                                Nam đến Đài Bắc (Đài Loan) vào tháng 09/2020 chắc chắn sẽ khiến nhiều
                                                người
                                                nức lòng khi đang ấp ủ ...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="category1">
                                <a href="#"> <b>Thu này, tới nước Nga khám phá xứ sở Bạch Dương đầy thơ mộng!</b></a>
                                <div class="pad10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="./images/vequocte/bachduong.png" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="desc">
                                                Nước Nga từ lâu đã là một trong những điểm hẹn quen thuộc của du khách
                                                Việt,
                                                không chỉ bởi phong cảnh hữu tình, thơ mộng mà còn bởi nơi đây gắn với
                                                nhiều
                                                kỉ niệm thân thương ...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category1">
                                <a href="#"> <b>Book sớm vé máy bay đi Amsterdam (Hà Lan) cho chuyến “đổi gió” dịp cuối
                                        năm</b></a>
                                <div class="pad10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="./images/vequocte/amterdam.png" alt="" width="100%">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="desc">
                                                Hà Lan nổi tiếng với vẻ đẹp nên thơ, lãng mạn tựa như những trang cổ
                                                tích
                                                huyền thoại diệu kì. Đến với Hà Lan, một trong những điểm dừng chân tiêu
                                                biểu nhất là thủ đô Amsterdam ...</div>
                                        </div>
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