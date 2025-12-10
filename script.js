function changeText() {
    // 1. Đổi nội dung của thẻ H1
    let title = document.getElementById("title");
    title.innerHTML = "Nội dung đã thay đổi!";
    title.style.color = "blue";
    title.style.fontWeight = "bold";

    // 2. Lấy tất cả các p có class="description"
    let descList = document.getElementsByClassName("description");
    for (let i = 0; i < descList.length; i++) {
        descList[i].classList.add("highlight");
    }

    // 3. Đổi màu nền của phần tử <li> đầu tiên
    let firstItem = document.querySelector("#list li");
    firstItem.style.backgroundColor = "yellow";
}
