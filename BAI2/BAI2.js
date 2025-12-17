document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "" || pass === "") {
        document.getElementById("message").innerText =
            "Vui lòng nhập đủ thông tin";
    } else {
        document.getElementById("message").innerText =
            "Đăng nhập thành công";
    }
});
