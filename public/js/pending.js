// 2. UNTUK ALL DAN PENDING ACCOUNT

const btnAll = document.getElementById("all");
const btnPending = document.getElementById("pending");
const boxPending = document.getElementById("table1");
const boxAll = document.getElementById("table2");

boxPending.style.display = "block";
boxAll.style.display = "none";

btnAll.addEventListener("click", function () {
    boxAll.style.display = "block";
    boxPending.style.display = "none";
});

btnPending.addEventListener("click", function () {
    boxAll.style.display = "none";
    boxPending.style.display = "block";
});
