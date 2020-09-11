// Hàm kiểm tra dữ liệu form tìm kiếm vé
function validate_frmtimve() {
    var diemdi = document.getElementById("diemdi");
    var diemden = document.getElementById("diemden");
    var ngaydi = document.getElementById("ngaydi");
    if (diemdi.value == "") {
        alert("Cần chọn nơi đi");
        diemdi.focus();
        return false;
    }
    if (diemden.value == "") {
        alert("Cần chọn nơi đến");
        diemden.focus();
        return false;
    }
    if (ngaydi.value == "") {
        alert("Cần chọn ngày đi");
        ngaydi.focus();
        return false;
    }
    return true;
}

//Hàm kiểm tra dữ liệu form nhận thông tin khách hàng
function validate_frmThongtinKhach() {
    var Hotenkhach = document.getElementById("diemdi");
    var hotenll = document.getElementById("diemden");
    var sdt = document.getElementById("ngaydi");
    if (Hotenkhach.value == "") {
        alert("Vui lòng nhập Họ Tên Khách Hàng");
        Hotenkhach.focus();
        return false;
    }
    if (hotenll.value == "") {
        alert("Vui lòng nhập Họ Tên người liên lạc");
        hotenll.focus();
        return false;
    }
    if (sdt.value == "") {
        alert("Vui lòng nhập Số Điện Thoại");
        sdt.focus();
        return false;
    }
    return true;
}