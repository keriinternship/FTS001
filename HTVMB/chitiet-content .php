<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-chitiet">
    <div class="container">
        <div class="row">
            <div class="col-md-8 max-title ">
                <h3 class="title-sg">Sài gòn</h3>
                <p>
                    <strong>
                        Nhanh tay đặt mua cho mình
                        <a href="#">Vé máy bay</a>
                        đi Sài Gòn giá rẻ keri nhé !
                    </strong>
                </p>
                <p class="justify">
                    <span>
                        &nbsp; &nbsp; &nbsp; Sài Gòn là một trong hai thành phố lớn nhất cả nước sau thủ đô Hà Nội. Với
                        vị trí trọng yếu ,
                        diện tích rộng lớn, Sài Gòn là nơi hội tụ nhiều yếu tố phát triển, là trung tâm của kinh tế, văn
                        hóa, chính trị, dân cư. Sài Gòn là trọng tậm để đẩy mạnh phát triển các vùng đồng bắng Sông Cửu
                        Long cũng như của cả vùng diện tích phía Nam của Tổ quốc.
                    </span>
                </p>
                <p class="justify1">
                    <span>
                        &nbsp; &nbsp; &nbsp; Hòa mình vào không khí vô cùng náo nhiệt, nơi hội tụ những sắc màu văn hóa
                        đa dạng, đầy phóng
                        khoáng của Sài Gòn là niềm mong mỏi của bạn bấy lâu nay? Tài chính là một trong những vấn đề
                        khiến bạn đau đầu? Thay vì phải chi thêm tiền mua vé máy bay bạn có thể thả ga mua sắm tại chợ
                        Bến Thành hay thỏa sức thưởng thức ẩm thực đường phố Sài Gòn khi đặt mua vé máy bay đi Sài Gòn
                        giá rẻ tại Keri!
                    </span>
                </p>
                <p class="img-sg">
                    <span>
                        <img src="./images/sg.png" alt="">
                    </span>
                </p>
                <p class="cmt-sg">
                    Sài Gòn được mệnh danh là Hòn Ngọc Viễn Đông
                </p>
                <p class="cellpass-sg">
                    <strong>Đặt ngay vé máy bay đi Sài Gòn giá rẻ tại website Keri.vn</strong>
                </p>
                <p class="justify1">
                    <span>
                        &nbsp; &nbsp; &nbsp; Hiện tại có 2 hãng hàng không nội địa khai thác các đường bay đến Sài Gòn.
                        Mỗi ngày hãng có
                        khoảng 10 chuyến bay, vào dịp cao điểm sẽ tăng cường đến mấy chục chuyến mỗi ngày. Chuyến bay
                        đầu tiên khởi hành lúc 06h00 và chuyến cuối cùng khởi hành lúc 20h20. Tần suất các chuyến bay
                        dày đặc nên bạn có thể dễ dàng lựa chọn cho mình lịch trình phù hợp để đặt vé ngay từ bây giờ.
                        <strong>Để đặt vé máy bay đi Sài Gòn</strong> bạn có thể tham khảo giá vé máy bay vào những ngày
                        cao điểm du lịch hè của một số hành trình trọng điểm như sau:
                    </span>
                </p>

                <table class="table-content">
                    <tbody>
                        <tr>
                            <td>
                                <p class="role-title"><span> Chặng bay </span>
                                </p>
                            </td>
                            <td>
                                <p> <span> Hãng hàng không</span>
                                </p>
                            </td>
                            <td>
                                <p> <span> Giá vé rẻ nhất (VNĐ)
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="role-title"><span> Hà Nội – Sài Gòn </span>
                                </p>
                            </td>
                            <td>
                                <p> <span>Vietnam Airlines <br>
                                        Jetstar</span>
                                </p>
                            </td>
                            <td>
                                <p> <span> 1,150,000 <br>790,000
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="role-title"><span> Đà Nẵng – Sài Gòn </span>
                                </p>
                            </td>
                            <td>
                                <p> <span>Vietnam Airlines <br>
                                        Vietjet Air</span>
                                </p>
                            </td>
                            <td>
                                <p> <span> 680,000 <br>399,000
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="role-title"><span> Vinh – Sài Gòn </span>
                                </p>
                            </td>
                            <td>
                                <p> <span>Vietnam Airlines <br>
                                        Vietjet Air</span>
                                </p>
                            </td>
                            <td>
                                <p> <span>1,350,000 <br>799,000
                                    </span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table><br>
                <p class="justify">
                    <span>
                        <u>Lưu ý</u>
                        : Giá vé máy bay đi Sài Gòn trên đây là giá vé một chiều, tính ở thời điểm hiện tại, chưa bao
                        gồm
                        thuế và phụ phí.
                    </span>
                </p>
                <p class="img-sg-book">
                   <a href="#"><img src="./images/datve.png" alt=""></a> 
                </p>
                <p class="cellpass-sg">
                    <strong>Đại lý vé máy bay đi Sài Gòn giá rẻ cùng bạn du ngoạn khắp Sài Gòn</strong>
                </p>
                <p class="justify1">
                    <span>
                        &nbsp; &nbsp; &nbsp; Sở hữu trong tay tấm vé máy bay đi Sài Gòn giá rẻ bạn chắc chắn sẽ được tự
                        mình ngăm nhìn, trải
                        nghiệm những địa điểm trước đây chỉ được thấy qua truyền hình, báo đài. Bạn sẽ được đến với Hầm
                        Thủ Thiên, đường hầm đâu tiên ở Việt Nam được đặt dưới lòng sông Sài Gòn, sẽ đến với hồ Con Rùa
                        – một trong những địa điểm được các bạn trẻ Sài Thành lui tới mỗi khi có thời gian và sẽ còn
                        nhiều còn nhiều địa điêm khác đang đợi bạn bước gót lui tới như Dinh Độc Lập, phố đi bộ Nguyễn
                        Huệ….
                    </span>
                </p>
                <p class="justify1">
                    <span>
                        &nbsp; &nbsp; &nbsp; Sài Gòn sở hữu tài nguyên du lịch phong phú, một vùng đất gắn liền với lịch
                        sử đấu tranh giành
                        độc lập của dân tộc. Bởi lẽ đó mà các di tích cách mạng chính là điểm thu hút khách du lịch khi
                        đến với Hồ Chí Minh. Những điểm đến nổi bật có thể kể đến như: Nhà hát Thành phố, Đền tưởng niệm
                        liệt sĩ Bến Dược, nhà thờ Đức Bà, chùa Vĩnh Nghiêm... cùng rất nhiều khu vui chơi giải trí như
                        Đầm Sen, Kỳ Hoà, Suối Tiên.
                    </span>
                </p>
                <p class="justify1">
                    <span>
                        &nbsp; &nbsp; &nbsp; Bạn có thể thỏa sức mua sắm tại những trung tâm mua sắm sôi động như chợ
                        Bến Thành, chợ Bình Tây
                        hay các trung tâm thương mại lớn như: Diamond Plaza, Parkson, Vincom, Saigon Centre, các con phố
                        thời trang Nguyễn Trãi, Hai Bà Trưng, Lê Văn Sỹ…
                    </span>
                </p>
                <p class="justify1">
                    <span>
                        &nbsp; &nbsp; &nbsp; Đến Sài Gòn, đừng quên thưởng thức ẩm thực đậm chất Sài thành như: Bánh mì,
                        canh chua, các món
                        ăn dân dã như lẩu cá kèo, chuột đồng rô ti. Đây cũng là nơi hội tụ những nét ẩm thực phong phú
                        của các vùng miền trong nước cũng như giao thoa ẩm thực của các nước trên thế giới với một số
                        món ăn như: phở Hà Nội, bún bò Huế, hủ tiếu Nam Vang.
                    </span>
                </p>
                <p class="img-sg">
                    <span>
                        <img src="./images/cho.png" alt="">
                    </span>
                </p>
                <p class="cmt-sg">
                    Chợ Bến Thành chụp vào buổi đêm - nơi tập trung lớn các mặt hàng thủ công mỹ nghệ, dệt may, áo dài,
                    lưu niệm...
                </p>
            </div>
            <div class="col-md-4 max-view">
                <div class="category">
                    Vé máy bay nội địa
                </div>
                <div class="list-landing">
                    <a href="#" class="bmt">Vé máy bay đi Buôn Ma Thuột</a>
                    <a href="#" class="bmt">Vé máy bay đi Cà Mau</a>
                    <a href="#" class="bmt">Vé máy bay đi Nha Trang</a>
                    <a href="#" class="bmt">Vé máy bay đi Đà Lạt</a>
                    <a href="#" class="bmt">Vé máy bay đi Đà Nẵng</a>
                    <a href="#" class="bmt">Vé máy bay đi Điện Biên</a>
                    <a href="#" class="bmt">Vé máy bay đi Hà Nội</a>
                    <a href="#" class="bmt">Vé máy bay đi Hải Phòng</a>
                    <a href="#" class="bmt">Vé máy bay đi Huế</a>
                    <a href="#" class="bmt">Vé máy bay đi Kon Tum</a>
                    <a href="#" class="bmt">Vé máy bay đi Phan Thiết</a>
                    <a href="#" class="bmt">Vé máy bay đi Phú Quốc</a>
                    <a href="#" class="bmt">Vé máy bay đi Pleiku</a>
                    <a href="#" class="bmt">Vé máy bay đi Tuy Hòa</a>
                    <a href="#" class="bmt">Vé máy bay đi Thanh Hóa</a>
                    <a href="#" class="bmt">Vé máy bay đi Tam Kỳ</a>
                    <a href="#" class="bmt">Vé máy bay đi Quy Nhơn</a>
                    <a href="#" class="bmt">Vé máy bay đi Cần Thơ</a>
                    <a href="#" class="bmt">Vé máy bay đi Chu Lai</a>
                    <a href="#" class="bmt">Vé máy bay đi Côn Đảo</a>
                    <a href="#" class="bmt">Vé máy bay đi Đồng Hới</a>
                    <a href="#" class="bmt">Vé máy bay đi Vinh</a>
                    <a href="#" class="bmt">Vé máy bay đi Rạch Giá</a>
                    <a href="#" class="bmt">Vé máy bay đi Quảng Ngãi</a>
                    <a href="#" class="bmt">Vé máy bay đi Sài Gòn</a>
                </div>
                <div class="category">
                    Tin liên quan
                </div>
                <div class="category1">
                    <a href="#"> <b> Vietjet rải vé siêu rẻ chặng Vinh – Sài Gòn tháng 5 chi 599k</b></a>
                    <div class="row">
                        <div class="col-xs-12 pad10">
                            <div class="col-xs-6">
                                <img src="./images/51.png" alt="" width="145.656" height="100">
                            </div>
                            <div class="col-xs-6">
                                <div class="desc">Các chế ở Vinh muốn bay vào Sài Gòn với giá siêu tiết kiệm thì mau
                                    tham khảo thông tin dưới đây rồi nhanh tay đặt vé nha.</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="category1">
                    <a href="#"> <b> Bay từ Nha Trang- Sài Gòn 4 chỉ cùng Vietjet Air chỉ 99k</b></a>
                    <div class="row">
                        <div class="col-xs-12 pad10">
                            <div class="col-xs-6">
                                <img src="./images/21.png" alt="" width="145.656" height="100">
                            </div>
                            <div class="col-xs-6">
                                <div class="desc">
                                    Mùa hè du lịch thả ga với chương trình khuến mãi cực đã của Malaysia Airlines. Cơ
                                    hội vi vu đến các miền đất xa như: Thái</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category1">
                    <a href="#"> <b> Sài Gòn lọt vào top 30 thành phố có nền ẩm thực nhất nhì thế giới</b></a>
                    <div class="row">
                        <div class="col-xs-12 pad10">
                            <div class="col-xs-6">
                                <img src="./images/22.png" alt="" width="145.656" height="100">
                            </div>
                            <div class="col-xs-6">
                                <div class="desc">
                                    TP HCM của Việt Nam là 1 trong top 30 thành phố trở thành địa điểm đến lý tưởng cho
                                    những người mê ẩm thực. Nơi đây</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="category1">
                    <a href="#"> <b>Đã có bảng vé bay đi Sài Gòn Tháng 12</b></a>
                    <div class="row">
                        <div class="col-xs-12 pad10">
                            <div class="col-xs-6">
                                <img src="./images/23.png" alt="" width="145.656" height="100">
                            </div>
                            <div class="col-xs-6">
                                <div class="desc">
                                    “Sài Gòn chưa xa đã nhớ” là câu đầu tiên trong bản nhạc “Tình ca phố”, mà nhạc sĩ
                                    Quốc Bảo như thay lời muốn nói của rất</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>