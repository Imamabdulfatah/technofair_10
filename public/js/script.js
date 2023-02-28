// navbar fixed
window.onscroll = function () {
    // untuk mengambil tombol header
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    // untuk mengambil tombol back to top
    const toTop = document.querySelector("#to-top");

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");

        // ini digunakan untuk mengganti yang hidden
        toTop.classList.remove("hidden");
        // dengan flex
        toTop.classList.add("flex");
    } else {
        header.classList.remove("navbar-fixed");

        // menambahkan flex flex
        toTop.classList.remove("flex");
        // ini digunakan untuk mengganti yang hidden
        toTop.classList.add("hidden");
    }
};

// hamburger
// mendefinisikan sebagai selector /pemilih #hamburger=id
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

// jika diclick maka
hamburger.addEventListener("click", function () {
    // toogle ini jika ada kelasnya biarkan kalau belum tambahin
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// klik di luar hamburger atau dimanapun makan tampilan hamburger hilang
// window.addEventListener("click", function (e) {
//     if (e.target != hamburger && e.target != navMenu) {
//         hamburger.classList.toggle("hamburger-active");
//         navMenu.classList.add("hidden");
//     }
// });

// dark mode toggle
const darkToggle = document.querySelector("#dark-toggle");
const html = document.querySelector("html");

darkToggle.addEventListener("click", function () {
    if (darkToggle.checked) {
        html.classList.add("dark");
        // nanti akan dibuat local storage di aplication inspek
        localStorage.theme = "dark";
    } else {
        html.classList.remove("dark");
        localStorage.theme = "light";
    }
});

// pindahkan posisi toggle sesuai mode
if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    darkToggle.checked = true;
} else {
    darkToggle.checked = false;
}

// https://tailwindcss.com/docs/dark-mode#toggling-dark-mode-manually

function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
}

// untuk sidebar
const sdUtama = document.querySelector("#sidebd");
const sdTable = document.querySelector("#sidetb");
const sdPembayaran = document.querySelector("#sidepb");
const sdBerkas = document.querySelector("#sidebk");

sdUtama.classList.add("bg-white");

sdUtama.addEventListener("click", () => {
    sdUtama.classList.add("bg-white");
    sdTable.classList.remove("bg-white");
    sdPembayaran.classList.remove("bg-white");
    sdBerkas.classList.remove("bg-white");
});

sdTable.addEventListener("click", () => {
    sdUtama.classList.remove("bg-white");
    sdTable.classList.add("bg-white");
    sdPembayaran.classList.remove("bg-white");
    sdBerkas.classList.remove("bg-white");
});

sdPembayaran.addEventListener("click", () => {
    sdUtama.classList.remove("bg-white");
    sdTable.classList.remove("bg-white");
    sdPembayaran.classList.add("bg-white");
    sdBerkas.classList.remove("bg-white");
});

sdBerkas.addEventListener("click", () => {
    sdUtama.classList.remove("bg-white");
    sdTable.classList.remove("bg-white");
    sdPembayaran.classList.remove("bg-white");
    sdBerkas.classList.add("bg-white");
});
