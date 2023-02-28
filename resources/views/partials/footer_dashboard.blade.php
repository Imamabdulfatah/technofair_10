<footer class="pt-4">
    <div class="w-full px-6 mx-auto">
        <div
            class="flex flex-wrap items-center -mx-3 lg:justify-between"
        >
            <div
                class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none"
            >
                <div
                    class="leading-normal text-center text-sm text-slate-500 lg:text-left"
                >
                    ©
                    <script>
                        document.write(
                            new Date().getFullYear() + ","
                        );
                    </script>
                    made with <i class="fa fa-heart"></i> by
                    <a
                        href="https://www.creative-tim.com"
                        class="font-semibold text-slate-700"
                        target="_blank"
                        >TechnoFair Tim</a
                    >
                    for a better web.
                </div>
            </div>
            <div
                class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none"
            >
                <ul
                    class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end"
                >
                    <li class="nav-item">
                        <a
                            href="https://www.creative-tim.com"
                            class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                            target="_blank"
                            >TechnoFair Tim</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            href=""
                            class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                            target="_blank"
                            >About Us</a
                        >
                    </li>
                   
                    <li class="nav-item">
                        <a
                            href="https://www.creative-tim.com/license"
                            class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500"
                            target="_blank"
                            >License</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end cards -->
</main>

<!-- JavaScript untuk menampilkan form ketika tombol diklik -->
<script>
    const btnShowForm = document.getElementById('btn-show-form');
    const btnCloseForm = document.getElementById('btn-close-form');
    const formPendaftaran = document.getElementById('form-pendaftaran');
    const btnShowAg = document.getElementById('btn-show-ag');
    const btnCloseAg = document.getElementById('btn-close-ag');
    const formAg= document.getElementById('form-pendaftaran-ag');
  

    

    // Menampilkan form ketika tombol di klik
    btnShowForm.addEventListener('click', () => {
      formPendaftaran.classList.remove('hidden');
    });
  
    // Menyembunyikan form ketika tombol di klik
    btnCloseForm.addEventListener('click', () => {
      formPendaftaran.classList.add('hidden');
    });

     // Menampilkan form ketika tombol di klik
     btnShowAg.addEventListener('click', () => {
      formAg.classList.remove('hidden');
    });
  
    // Menyembunyikan form ketika tombol di klik
    btnCloseAg.addEventListener('click', () => {
      formAg.classList.add('hidden');
    });


    

  </script>
