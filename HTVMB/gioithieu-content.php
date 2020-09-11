<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-gioithieu">
    <content>
        <div class="content-container">
        </div>
        <div class="container">
            <!-- <div class="row"> -->
            <div class="first-title">
                <div class="breadcrumb">
                    <h4 class="title-product">Hành trình của sự phát triển "Hơn cả một chuyến bay"</h4>
                    <p class="note">
                        &nbsp; &nbsp; &nbsp; Chúng tôi luôn mang đến những trải nghiệm tốt nhất đến với khách hàng.
                        Hoạt động theo mô hình Đại lý du lịch trực tuyến. Nhóm phát triển đã có nhiều năm kinh
                        nghiệm về thiết kế và thực hiện các ứng dụng web cao cấp.
                    </p>
                    <p class="note">
                        Nhằm cung cấp cho khách hàng những trải nghiệm tốt nhất. Vậy nên chúng
                        tôi đã quyết tâm tạo
                        ra một website đặt vé máy bay tốt nhất, ưu tiên hàng đầu và sự tiện lợi đối với người dùng.
                    </p>
                    <p class="note">
                        Về nội thất máy bay, với hàng ngàn chi tiết nhỏ được tổng hòa lại trên
                        tàu bay, chúng tôi tin rằng mọi yếu tố trong nội thất đều có thể mang lại
                        sự khác biệt cho hành khách. Từ khâu lựa chọn về màu sắc, loại ghế, chất vải, loại da cho
                        đến không gian thiết kế trên khoang hành khách và cách thức sắp xếp các hạng ghế… đều thể
                        hiện nỗ lực phục vụ và tạo nên cảm giác thoải mái, tiện nghi nhất cho khách hàng.

                    </p>

                    <!-- <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./images/halong.png" alt=""></div>
                                <div class="swiper-slide"><img src="./images/nhatrang.png" alt=""></div>
                                <div class="swiper-slide"><img src="./images/sapa.png" alt=""></div>
                            </div> -->
                    <div class="img-bg"><img src="./images/img13.png" alt=""></div>

                    <!-- </div> -->
                    <div class="note">
                        <ul>
                            <li>
                                Ngày 9/7/2018, Phó Thủ tướng Chính phủ Trịnh Đình Dũng đã ký thay Thủ tướng Chính
                                phủ chính thức cho phép thành lập hãng hàng không.</li>
                            <li> Ngày 12/11/2018, Bộ Giao thông Vận tải chính thức cấp giấy phép kinh doanh vận
                                chuyển hàng không cho Hãng Hàng không.</li>
                            <li>Ngày 08/01/2019, Cục Hàng không Việt Nam đã trao chứng chỉ nhà khai thác bay (Air
                                Operator Certificate – AOC) cho, chính thức đưa Hãng đi vào khai thác
                                trên thị trường hàng không Việt Nam
                            </li>
                        </ul>
                    </div>
                    <p class="note">
                        Với tất cả sự chuẩn bị trên, chúng tôi mong muốn mang tới những trải nghiệm hơn cả mong
                        đợi dành cho khách hàng, trở thành hãng hàng không mang chất lượng dịch vụ 5 sao đầu tiên
                        tại Việt Nam có khoang hạng nhất và tiến đến vị trí dẫn đầu ngành hàng không châu Á trong
                        chặng đường sắp tới.
                    </p>
                    <p class="note">
                        Khám phá Việt Nam và thế giới với mức giá hợp lý cùng dịch vụ thân thiện xuất phát từ lòng
                        hiếu khách cùng sự tỉ mỉ, tận tâm tuyệt đối chính là điều hành khách có thể kì vọng ởx. Và chúng tôi tin rằng điều đó mang ý nghĩa <b>“Hơn cả một chuyến bay!”</b>
                    </p>
                </div>
            </div>
            <h3> Văn phòng công ty</h3>
            <div class="map">

                <div id="googleMap">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52722.98514305742!2d106.64047429814178!3d10.837362442350223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a211822e6cf%3A0xd7fdb44c860c4312!2zVMOyYSBuaMOgIFNCSQ!5e0!3m2!1svi!2s!4v1597639838249!5m2!1svi!2s"
                        width="900" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe></div>


            </div>

        </div>
</div>
</content>
</div>
<!-- Swiper JS -->

<!-- Initialize Swiper -->
<script>
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

}
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3000,
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