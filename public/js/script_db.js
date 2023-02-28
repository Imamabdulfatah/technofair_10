const sdUtama = document.querySelector("#sidedb");
const sdTable = document.querySelector("#sidetb");
const sdPembayaran = document.querySelector("#sidepb");
const sdBerkas = document.querySelector("#sidebk");

// sdUtama.classList.add("bg-white");

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
