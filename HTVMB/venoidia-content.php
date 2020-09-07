<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-venoidia">
    <div class="container">
        <div class="lulla">
            <div class="row">
                <div class="col-md-6 mutte">
                    <div class="find bg-hendder">
                        <h3 class="find-banner"><i class="fa fa-plane" aria-hidden="true"></i> Đặt
                            vé máy bay giá rẻ </h3>
                        <div class="select">
                            <p class="find-select">
                                <input name="direction" id="loaive_r" value="1" type="radio" class="loaive"
                                    checked="checked"> <label for="loaive_o">Khứ hồi</label>
                            </p>
                            <p class="find-select1">
                                <input name="direction" id="loaive_l" value="1" type="radio" class="loaive"> <label
                                    for="loaive_o">Một chiều</label>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form class="form1">
                                    <label for="cars">Người lớn(trên 12) </label>
                                    <select name="cars" id="cars">
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
                                                        aria-hidden="true" style="color:#fff"></i></a>
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
                                    <label for="cars">Điểm đi</label>
                                    <select id="search" type="text" placeholder="Mã chuyến bay" name="key">
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
                                    <select name="cars" id="cars1">
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
                                                        aria-hidden="true" style="color:#fff"></i></a>
                                                <form class="form3">
                                                    <form action="/action_page.php">
                                                        <input class="birthday" type="date" id="date" name="date">
                                                    </form>
                                                </form>
                                            </label>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <div class="cars">
                                    <label for="cars">Điểm đến</label>
                                    <select id="search" type="text" placeholder="Mã chuyến bay" name="key">
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
                            <div class="swiper-slide"><img src="./images/venoidia/vn.png" alt="" width="100%">
                            </div>
                            <div class="swiper-slide"><img src="./images/venoidia/vietj.png" alt="" width="100%"></div>
                            <div class="swiper-slide"><img src="./images/venoidia/bambo.png" alt="" width="100%">
                            </div>
                            <div class="swiper-slide"> <img src="./images/venoidia/jetta.png" alt="" width="100%">
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
                        <h1 class="ticket">Đặt mua vé máy bay giá rẻ đi tất cả các hãng </h1>
                        <p>Trang thông tin vé máy bay giá rẻ của VietJet Air, Jetstar, VietNam Airlines, Bamboo Airways.
                            Chỉ mất 2 phút để bạn có thể dễ dàng sở hữu được tấm vé máy bay giá rẻ đi Nội địa. Nào hãy
                            cùng chúng tôi khám phá!</p>

                        <h3 class="ticket1"><strong>1. Thông tin các hãng hàng không</strong>
                        </h3>
                        <p>Hiện tại Việt Nam có 4 hãng hàng không nội địa đang hoạt động là hãng hàng không quốc gia
                            Vietnam Airlines và 2 hãng hàng không giá rẻ Vietjet Air, Jetstar và hãng hàng không Bamboo
                            Airways.</p>
                        <p>- Hãng hàng không <a href="#">Vietnam Airlines</a>: Vietnam Airlines là hãng hàng không quốc
                            gia Việt Nam
                            được thành lập 01/1956, đánh dấu sự ra đời hàng không dân dụng Việt Nam. Hiện Vietnam
                            Airlines đã khai thác các chuyến bay tới 21 thành phố nội địa như Hà Nội, Điện Biên, Hải
                            Phòng, Thanh Hóa, Vinh, Huế, Đồng Hới, Đà Nẵng, Tam Kỳ, Pleiku, Tuy Hòa, Tp Hồ Chí Minh, Nha
                            Trang, Đà Lạt, Phú Quốc, Quy Nhơn, Cần Thơ, Côn Đảo, Buôn Mê Thuột, Rạch Giá, Cà Mau… Tại
                            nhiều đường bay tới các thành phố nội địa chỉ có hãng này khai thác.

                        </p>
                        <p> - Hãng hàng không <a href="#"> Vietjet Air</a>: thường xuyên cung cấp vé máy bay nội địa giá
                            rẻ tới cho khách
                            hàng. Hiện Vietjet Air đã và đang khai thác đường bay tới 15 thành phố nội địa: Tp Hồ Chí
                            Minh, Hà Nội, Đà Nẵng, Nha Trang, Hải Phòng, Huế, Vinh, Phú Quốc, Đà Lạt, Buôn Mê Thuột, Quy
                            Nhơn, Cần Thơ, Thanh Hóa, Đồng Hới, Chu Lai.
                        </p>
                        <p>- Hãng hàng không <a href="#"> Jetstar</a>: Jetstar Pacific là hãng hàng không giá rẻ đầu
                            tiên tại Việt Nam,
                            chính thức tham gia hoạt động cùng hệ thống Jetstar toàn cầu từ tháng 5 năm 2008. Hiện hãng
                            này khai thác đường bay tới 14 thành phố nội địa là Buôn Mê Thuột, Chu Lai, Đà Lạt, Đà Nẵng,
                            Đồng Hới, Hà Nội, Hải Phòng, Huế, Nha Trang, Phú Quốc, Quy Nhơn, Thanh Hóa, Tp Hồ Chí Minh,
                            Tuy Hòa.</p>
                        <p>- Hãng hàng không <a href="#"> Bamboo Airways</a> thuộc quyền sở hữu của công ty TNHH hàng
                            không Tre Việt
                            (Viet Bamboo Airlines) – là công ty con của tập đoàn FLC. Hãng có chuyến bay thương mại đầu
                            tiên vào ngày 16-01-2019. Hiện tại Bamboo Airways đang khai thác 37 đường bay kết nối đến
                            tất cả các thành phố lớn và điểm đến du lịch nổi tiếng tại Việt Nam. Bên cạnh các trục chính
                            như Hà Nội, Hồ Chí Minh, Đà Nẵng, các tuyến bay nội địa sẽ hướng tới các địa điểm du lịch
                            như Quảng Bình, Quảng Ninh, Hải Phòng, Thanh Hóa, Bình Định, Phú Quốc, Nha Trang,Vinh, Cần
                            Thơ, Pleiku, Đà Lạt.</p>
                        <h3 class="ticket1"><strong>3. Thông tin chặng bay phổ biến đi Nội Địa</strong></h3>
                        <div class="img-f"> <img src="./images/venoidia/tim.png" alt="" width="60%"><br>
                            <em>Đặt mua vé máy bay quốc tế</em></a>
                        </div>

                        <p> - Đường bay Hà Nội – Tp Hồ Chí Minh và chiều ngược lại là đường bay chủ lực trong tất cả
                            các đường bay. Trung bình 1 ngày có khoảng 46 chuyến bay từ Hà Nội – Tp Hồ Chí Minh và
                            khoảng 36 chuyến bay từ Tp Hồ Chí Minh – Hà Nội. Trong đó, Jetstar có khoảng 11 chuyến/
                            ngày; Vietjet Air có khoảng 18 chuyến bay/ ngày; Vietnam Airlines có khoảng 17 chuyến/ ngày.
                            Giá vé chặng này dao động trong khoảng từ 1.020.000đ – 1.550.000đ. Vietjet Air và Jetstar là
                            2 hãng hàng không đứng đầu danh sách có mức giá vé rẻ ở chặng bay này. </p>
                        <p>- Đường bay Hà Nội – Đà Nẵng và chiều ngược lại: Đây được coi là một trong những đường bay
                            cao điểm với lượng hành khách khá đông dù là dịp lễ tết hay ngày thường. Đường bay này được
                            khai thác bởi 3 hãng nội địa với khoảng 21 chuyến bay mỗi ngày. Trong đó Vietnam Airlines là
                            hãng có tần suất chuyến bay lớn nhất (12 chuyến/ ngày); đồng thời cũng là hãng hàng không có
                            giá vé cao nhất 1.200.000đ – 1.750.000đ. Vietjet Air đứng thứ 2 về tần suất khai thác chuyến
                            bay đến và đi Đà Nẵng với khoảng 7 chuyến bay. Giá vé hãng này mở bán dao động từ 580.000đ –
                            1.060.000đ. Jetstar trung bình có khoảng 2 chuyến/ ngày; giá vé dao động 550.000đ –
                            1.020.000đ.</p>
                        <p>- Đường bay Tp Hồ Chí Minh – Nha Trang cũng là 1 trong những đường bay có lượng hành khách
                            lớn. Trung bình mỗi ngày có khoảng 9 chuyến bay do 3 hãng nội địa khai thác. Jestar đưa mức
                            giá 360.000đ; Vietjet Air đưa mức giá 390.000đ và Vietnam Airlines vẫn là hãng mở bán với
                            mức giá cao nhất 1.200.000đ.</p>
                        <p>- Các đường bay như Hà Nội – Phú Quốc; Tp Hồ Chí Minh – Phú Quốc; Tp Hồ Chí Minh – Côn Đảo;
                            Hà Nội – Nha Trang; Hà Nội – Buôn Mê Thuột… tuy không phải là đường bay cao điểm nhưng lại
                            là những đường bay được lượng hành khách quan tâm khá nhiều. Bởi đây là một trong những điểm
                            du lịch hot nhất Việt Nam.</p>
                        <p>- Ở các đường bay ngắn hoặc đường bay giữa các thành phố nhỏ với nhau hầu như mới chỉ được
                            khai thác bởi hãng Vietnam Airlines. Có thể kể đến như Hà Nội – Huế; Hà Nội – Đồng Hới; Vinh
                            – Đà Nẵng; Tp Hồ Chí Minh – Côn Đảo…</p>
                        <h3 class="ticket1"><strong>4. Vé máy bay giá rẻ mang đến cho bạn những gì?</strong></h3>
                        <p>Những tấm vé máy bay giá rẻ sẽ giúp bạn tiết kiêm chi phí và rút ngắn hành trình một cách
                            nhanh chóng nhất. Nếu đi từ Bắc vào Nam bằng tàu hỏa bạn sẽ mất 15 – 20 tiếng mới tới nơi.
                            Còn với vé máy bay, hành trình Bắc – Nam của bạn chỉ gói gọn trong vòng 2 giờ bay.</p>
                        <div class="img-f"> <img src="./images/venoidia/bay.png" alt="" width="80%"><br>
                            <em>Hãng hàng không quốc gia Vietnam Airlines</em></a>
                        </div>
                        <p>Vé máy bay giá rẻ là ưu điểm vượt trội của Vietjet Air và Jetstar. Giá vé phải chăng đáp ứng
                            mặt bằng chung của người Việt. Vietnam Airlines luôn đưa ra mức giá vé cao nhất so với 3
                            hãng nội địa nhưng lại được đánh giá cao hơn hẳn về chất lượng dịch vụ hàng không. Vietnam
                            Airlines sẽ mang đến cho bạn trải nghiệm những dịch vụ chất lượng và đẳng cấp cùng tỷ lệ
                            chuyến bay đúng giờ cao nhất. Trong khi đó tỉ lệ chậm, hủy chuyến của Vietjet Air lại khá
                            cao.</p>
                        <p>Xét ở hạng ghế ngồi tương đương nhau, nếu bạn mua vé máy bay của các hãng giá rẻ, bạn sẽ
                            không được phép hoàn vé (trả lại vé) và các bữa ăn trên máy bay đều phải trả tiền. Ngược
                            lại, trên các chuyến bay của Vietnam Airlines bạn sẽ được phục vụ bữa sáng, trưa, tối và các
                            bữa ăn nhẹ miễn phí. Đồng thời, mua vé của Vietnam Airlines bạn sẽ có quyền được hoàn vé (có
                            mất phí). Tuy nhiên, đối với các hãng giá rẻ, nếu bạn chọn chỗ ngồi ở các hạng cao hơn, đồng
                            nghĩa với việc giá vé sẽ tăng lên một chút, bạn cũng sẽ được hưởng những dịch vụ chất lượng
                            không kém gì hãng hàng không quốc gia.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-HD">
                        <div class="category">
                            Tin vé máy bay giá rẻ
                        </div>
                        <div class="category1">
                            <a href="#"> <b> Liên danh Vietnam Airlines - Pacific Airlines mở bán vé Tết 2021 chỉ từ
                                    509.000 VNĐ</b></a>
                            <div class="pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/venoidia/liendanh.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">Nhằm đáp ứng một cách tốt nhất cho nhu cầu đi lại, đoàn viên
                                            của hành khách trong dịp Tết Nguyên đán, Vietnam Airlines triển khai mở bán
                                            vé Tết Tân Sửu 2021 với mức giá hấp dẫn ...</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="category1">
                            <a href="#"> <b>
                                    Cùng ABAY cập nhật giá vé Tết Nguyên Đán 2021 của Bamboo Airways trên một số chặng
                                    bay cao điểm</b></a>
                            <div class="pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/venoidia/nguyendan.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">
                                            Mới đây, hãng hàng không Tre Việt đã chính thức mở bán những tấm vé máy bay
                                            đầu tiên cho mùa Tết Nguyên Đán Tân Sửu 2021, để phục vụ sớm cho hành khách
                                            lên kế hoạch trở về ...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category1">
                            <a href="#"> <b>Cập nhật ngay loạt vé máy bay giá rẻ trên hành trình đến Huế vào tháng
                                    09/2020</b></a>
                            <div class="pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/venoidia/hue.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">
                                            Với những ai đang có dự định đặt vé máy bay trên hành trình đến Huế vào
                                            tháng 09/2020 hẳn sẽ “mở cờ trong bụng” khi bắt gặp loạt vé có giá chỉ 99k
                                            hiện đang được mở bán cho ...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category1">
                            <a href="#"> <b>Cập nhật giá vé máy bay Tết Nguyên Đán 2021 trên các đường bay trọng
                                    điểm</b></a>
                            <div class="pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/venoidia/capnhat.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">
                                            Khi còn khoảng 6 tháng nữa chúng ta mới bước vào kỳ nghỉ Tết Nguyên Đán Tân
                                            Sửu 2021, nhưng ở thời điểm hiện tại nhiều người đã rục rịch chuẩn bị cho
                                            mình và gia đình những ...</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="category1">
                            <a href="#"> <b>Set ngay “kèo” đi Đà Lạt với loạt vé máy bay giá chỉ 99k</b></a>
                            <div class="pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/venoidia/keo.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">
                                            Được coi là mức giá vé hiếm gặp trên hành trình Hà Nội đi Đà Lạt, những tấm
                                            vé máy bay có giá 99.000đ/chiều hiện xuất hiện tại ABAY.vn chắc chắn sẽ
                                            khiến cho những ai đang có ...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category1">
                            <a href="#"> <b>Từ 18/08/2020, Bamboo Airways mở bán vé Tết Tân Sửu 2021 trên các hành trình
                                    nội địa</b></a>
                            <div class="pad10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/venoidia/lich.png" alt="" width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="desc">
                                            Tin mới nhất từ Bamboo Airways cho biết, hãng hàng không Tre Việt chính thức
                                            mở bán những tấm vé Tết Nguyên Đán Tân Sửu 2021 đầu tiên kể từ ngày
                                            18/08/2020, nhằm giúp hành ...</div>
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