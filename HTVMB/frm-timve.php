<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!-- tìm vé -->

<div class="find bg-white">
    <h3 class="find-banner"><i class=" icplane fa fa-plane" aria-hidden="true"></i>
        Tìm kiếm chuyến bay</h3>
    <form action="#" method="get">
        <div class="select">
            <p class="find-select">
                <input name="direction" id="loaive_r" value="1" type="radio" class="loaive"> <label for="loaive_o">Khứ
                    hồi</label>
            </p>
            <p class="find-select1">
                <input name="direction" id="loaive_l" value="1" type="radio" class="loaive" checked="checked">
                <label for="loaive_o">Một chiều</label>
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="cars">
                    <label for="cars">Điểm đi
                        <select id="search" type="text" placeholder="Mã chuyến bay" name="key" class="diadiem">
                            <option value="Select School">---Chọn---</option>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['code'] . "'>" . $row['name_city'] . "(" . $row['code'] . ")"."</option>";
                            }
                            ?>
                        </select>
                    </label>
                </div>
                <div class="cars">
                    <label for="cars">Điểm đến
                        <select id="search" type="text" placeholder="Mã chuyến bay" name="key" class="diadiem">
                            <option value="Select School">---Chọn---</option>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['code'] . "'>" . $row['name_city'] . "(" . $row['code'] . ")"."</option>";
                            }
                            ?>
                        </select>
                    </label>
                </div>

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
            </div>
            <div class="col-md-6">
                <div class="date-time">
                    <table>
                        <tr>
                            <label class="font-balck">Ngày đến <a href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i></a>
                                <form class="form3">
                                    <form action="/action_page.php">
                                        <input type="date" id="date" name="date" class="w">
                                    </form>
                                </form>
                            </label>
                        </tr>
                    </table>
                </div>
                <div class="date-time">
                    <table>
                        <tr>
                            <label class="font-white">Ngày đi <a href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i></a>
                                <form class="form3">
                                    <form action="/action_page.php">
                                        <input type="date" id="birthday" name="birthday" class="w">

                                    </form>
                                </form>
                            </label>
                        </tr>
                    </table>
                </div>
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
            </div>
        </div>
        <div class="button"> <button class="submit" type="submit" form="nameform" value="Submit"><i class="fa fa-search"
                    aria-hidden="true"></i> Tìm chuyến bay</button>
        </div>
    </form>
</div>

<!-- Điều kiện vé -->
<div class="bg-pd">
    <div class="text-center">
        <h3 class="title-buil"><i class="fa fa-address-book-o" aria-hidden="true"></i> Điều kiện
            vé</h3>
    </div>
    <div class="jerry">
        <p>Hoàn vé: Không được phép</p>
        <p>Đổi Tên Hành Khách: Được phép - Thu phí: 374.000 VND + Giá vé chênh lệch (nếu có)</p>

        <p>Đổi Hành Trình: Được phép - Thu phí: 374.000 VND + Giá vé chênh lệch (nếu có). Đổi
            đồng
            hạng hoặc nâng hạng tương ứng của hành trình mới.</p>

        <p>Đổi Ngày Giờ Chuyến Bay: Được phép - Thu phí: 374.000 VND + Giá vé chênh lệch (nếu
            có).
        </p>
        <p>Bảo lưu: Không được phép</p>

        <p>Thời hạn thay đổi (bao gồm thay đổi tên, ngày/chuyến bay): Trước giờ khởi hành 12
            tiếng.
        </p>
    </div>
</div>
<!-- Hãng bay -->
<div class="bg-two">
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
            </div>
        </div>
    </div>
</div>