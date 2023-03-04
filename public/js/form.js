const btnShowForm = document.getElementById("btn-show-form");
const btnCloseForm = document.getElementById("btn-close-form");
const formPendaftaran = document.getElementById("form-pendaftaran");
const btnShowAg = document.getElementById("btn-show-ag");
const btnCloseAg = document.getElementById("btn-close-ag");
const formAg = document.getElementById("form-pendaftaran-ag");
const btnShowFormEdit = document.getElementById("btn-show-form-edit");
const btnCloseFormEdit = document.getElementById("btn-close-form-edit");
const formPendaftaranEdit = document.getElementById("form-pendaftaran-edit");
const btnShowAgEdit = document.getElementById("btn-show-ag-edit");
const btnCloseAgEdit = document.getElementById("btn-close-ag-edit");
const agPendaftaranEdit = document.getElementById("ag-pendaftaran-edit");

// Menampilkan form ketika tombol di klik
btnShowForm.addEventListener("click", () => {
    formPendaftaran.classList.remove("hidden");
});

// Menyembunyikan form ketika tombol di klik
btnCloseForm.addEventListener("click", () => {
    formPendaftaran.classList.add("hidden");
});

// =================================================
// Menampilkan form ketika tombol di klik
btnShowAg.addEventListener("click", () => {
    formAg.classList.remove("hidden");
});

// Menyembunyikan form ketika tombol di klik
btnCloseAg.addEventListener("click", () => {
    formAg.classList.add("hidden");
});

// =================================================
// Menampilkan form ketika tombol di klik
btnShowFormEdit.addEventListener("click", () => {
    formPendaftaranEdit.classList.remove("hidden");
});

// Menyembunyikan form ketika tombol di klik
btnCloseFormEdit.addEventListener("click", () => {
    formPendaftaranEdit.classList.add("hidden");
});

// =================================================
// Menyembunyikan form ketika tombol di klik

// Menampilkan form ketika tombol di klik
btnShowAgEdit.addEventListener("click", () => {
    agPendaftaranEdit.classList.remove("hidden");
});

// Menyembunyikan form ketika tombol di klik
btnCloseAgEdit.addEventListener("click", () => {
    agPendaftaranEdit.classList.add("hidden");
});
