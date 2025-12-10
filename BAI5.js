document.getElementById("btnDangKy")
    .addEventListener("click", function () {

        let ten = document.getElementById("inputTen").value.trim();
        let hodem = document.getElementById("inputHodem").value.trim();
        let email = document.getElementById("inputEmail").value.trim();
        let sdt = document.getElementById("inputSdt").value.trim();
        let thanhpho = document.getElementById("selectThanhPho").value;
        let tinh = document.getElementById("selectTinh").value;
        let ghichu = document.getElementById("inputGhichu").value.trim();

        console.log(" THÔNG TIN USER ");
        console.log("Họ tên: " + hodem + " " + ten);
        console.log("Email: " + email);
        console.log("Số điện thoại: " + sdt);
        console.log("Thành phố: " + thanhpho);
        console.log("Tỉnh: " + tinh);
        console.log("Ghi chú: " + ghichu);
});
