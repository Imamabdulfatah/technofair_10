// navbar fixed
// window.onscroll = function () {
//     const header = document.querySelector("header");
//     const fixedNav = header.offsetTop;

//     const toTop = document.querySelector("#to-top");

//     if (window.pageYOffset > fixedNav) {
//         header.classList.add("navbar-fixed");
//         toTop.classList.remove("hidden");
//         toTop.classList.add("flex");
//     } else {
//         header.classList.remove("navbar-fixed");
//         toTop.classList.remove("flex");
//         toTop.classList.add("hidden");
//     }
// };

// hamburger
// mendefinisikan sebagai selector /pemilih #hamburger=id
const hamburger = document.querySelector("#garis");
const navMenu = document.querySelector("#nav-menu-utama");

// jika diclick maka
hamburger.addEventListener("click", function () {
    // toogle ini jika ada kelasnya biarkan kalau belum tambahin
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// https://tailwindcss.com/docs/dark-mode#toggling-dark-mode-manually

function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
}

// untuk sidebar
// const sdUtama = document.querySelector("#sidebd");
// const sdTable = document.querySelector("#sidetb");
// const sdPembayaran = document.querySelector("#sidepb");
// const sdBerkas = document.querySelector("#sidebk");

// sdUtama.classList.add("bg-white");

// sdUtama.addEventListener("click", () => {
//     sdUtama.classList.add("bg-white");
//     sdTable.classList.remove("bg-white");
//     sdPembayaran.classList.remove("bg-white");
//     sdBerkas.classList.remove("bg-white");
// });

// sdTable.addEventListener("click", () => {
//     sdUtama.classList.remove("bg-white");
//     sdTable.classList.add("bg-white");
//     sdPembayaran.classList.remove("bg-white");
//     sdBerkas.classList.remove("bg-white");
// });

// sdPembayaran.addEventListener("click", () => {
//     sdUtama.classList.remove("bg-white");
//     sdTable.classList.remove("bg-white");
//     sdPembayaran.classList.add("bg-white");
//     sdBerkas.classList.remove("bg-white");
// });

// sdBerkas.addEventListener("click", () => {
//     sdUtama.classList.remove("bg-white");
//     sdTable.classList.remove("bg-white");
//     sdPembayaran.classList.remove("bg-white");
//     sdBerkas.classList.add("bg-white");
// });

/**
 * Back to top button
 */
// let backtotop = select(".back-to-top");
// if (backtotop) {
//     const toggleBacktotop = () => {
//         if (window.scrollY > 100) {
//             backtotop.classList.add("active");
//         } else {
//             backtotop.classList.remove("active");
//         }
//     };
//     window.addEventListener("load", toggleBacktotop);
//     onscroll(document, toggleBacktotop);
// }
