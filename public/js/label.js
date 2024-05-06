const statusButton = document.getElementById("status-button");
const statusMenu = document.getElementById("status-menu");
const openBox = document.getElementById("open-box");
const closeBox = document.getElementById("close-box");
const announcementBox = document.getElementById("announcement-box");

statusButton.addEventListener("click", function () {
    statusMenu.classList.toggle("hidden");
    statusMenu.classList.toggle("block");
});

document.querySelectorAll("[data-status]").forEach(function (item) {
    item.addEventListener("click", function () {
        const selectedStatus = item.getAttribute("data-status");

        if (selectedStatus === "open") {
            openBox.classList.remove("hidden");
            closeBox.classList.add("hidden");
            announcementBox.classList.add("hidden");
        } else if (selectedStatus === "close") {
            openBox.classList.add("hidden");
            closeBox.classList.remove("hidden");
            announcementBox.classList.add("hidden");
        } else {
            openBox.classList.add("hidden");
            closeBox.classList.add("hidden");
            announcementBox.classList.remove("hidden");
        }

        statusButton.textContent = item.textContent;
        statusMenu.classList.add("hidden");
        statusMenu.classList.remove("block");
    });
});
