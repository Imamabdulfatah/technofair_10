const scriptURL =
    "https://script.google.com/macros/s/AKfycbzF3QvjqxLvrATXWSDLR9cIa5WUd5c37CkoE9jL5MB1KOFi8j-T78QTDZurMp5FiXj8/exec";
const form = document.forms["evaluation-web-form"];
const btnKirim = document.querySelector(".btn-kirim");
const btnLoading = document.querySelector(".btn-loading");
const myAlert = document.querySelector(".my-alert");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    // ketika tombol submit di klik
    // tampilkan tombol loading, hilangkan tombol kirim

    btnLoading.classList.toggle("d-none");
    btnKirim.classList.toggle("d-none");

    fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => {
            // ketika tombol submit di klik
            // hilangkan tombol loading, tampilkankan tombol kirim
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            myAlert.classList.toggle("d-none");

            // reset formnya
            form.reset();

            console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
});
