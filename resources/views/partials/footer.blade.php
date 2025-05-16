{{-- Footer --}}
<footer class="bg-sky-950 mt-[100px] w-full px-4 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-4 lg:py-8 text-[white]">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="#" class="flex items-center">
                  <img src="{{ asset('images/logo-1.png')}}" class="h-16" alt="FlowBite Logo" />
                  <span class="self-center text-[20px] w-50 font-bold dark:text-white font-['Poppins']">UMKM Maritim  Kepulauan Riau</span>
              </a>
              <p class="self-center text-white w-75 mt-2 flex font-['Open Sans'] text-[16px] text-justify ">
                UMKM Maritim Kepulauan Riau adalah wadah promosi produk lokal maritim yang mengangkat budaya, rasa, dan kekayaan alam pesisir.
              </p>
          </div>
          <div>
            <h3 class="text-[18px] font-bold font-['Poppins'] mb-4">Overview</h3>
            <ul class="space-y-2 text-[normal] text-[14px] font-['Poppins']">
                <li><a href="#" class="hover:text-orange-500">Beranda</a></li>
                <div class="relative">
                  <button id="dropdownProdukButton" data-dropdown-toggle="dropdownProduk" class="text-white font-medium hover:text-yellow-400 inline-flex items-center">
                  Produk
                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                  </button>
  
                  <div id="dropdownProduk" class="hidden absolute z-10 bg-sky-950 divide-y divide-gray-100 rounded-lg shadow w-44">
                  <ul class="py-2 text-sm text-white">
                      <li><a href="#" class="block px-4 py-2 hover:bg-white text-yellow-400">Kuliner</a></li>
                      <li><a href="#" class="block px-4 py-2 hover:bg-white text-yellow-400">Hasil Laut</a></li>
                      <li><a href="#" class="block px-4 py-2 hover:bg-white text-yellow-400">Aksesoris</a></li>
                  </ul>
                  </div>
                </div>
                <li><a href="#" class="hover:text-orange-500">Galeri</a></li>
                <li><a href="#" class="hover:text-orange-500">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-orange-500 mb-4">Kontak</a></li>
            </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold font-['Poppins']">Jam Operasional</h3>
          <p class="text-xs font-['Open_Sans'] whitespace-pre-line">
              Senin – Jumat : 08.00 – 17.00 WIB
              Sabtu : 09.00 – 13.00 WIB
              Minggu & Hari Libur Nasional : Tutup
          </p>
          <div class="mt-6">
            <label for="message" class="text-xs font-['Poppins']"></label>
            <div class="mt-2 flex flex-col">
                <div class="relative w-full">
                    <i class="fa-solid fa-envelope absolute left-0 top-4 fa-lg text-black text-sm mr-2"></i>
                    <input type="text" id="message"class="w-full h-8 bg-transparent border-b border-black border-t-0 border-l-0 border-r-0 pl-6 text-sm font-['Poppins'] focus:outline-none ml-0 placeholder:text-gray-400" placeholder="  Masukkan Pesan anda">
                </div>
                <button class="mt-2 bg-orange-500 text-white text-xs font-semibold font-['Poppins'] px-4 py-2 rounded-sm hover:bg-orange-600 2 w-20 mb-4">Kirim</button>
            </div>
        </div>
      </div>
      <div>
        <h3 class="text-lg font-bold font-['Poppins'] mb-4">Hubungi Kami</h3>
        <div class="space-y-2 text-sm font-['Poppins']">
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-phone" style="color: #000000;"></i>
                <span>+08126xxxxxxxxx</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fa-solid fa-envelope" style="color: #000000;"></i>
                <span>umkmkepri@gmail.com</span>
            </div>
        </div>
        <div class="flex space-x-6 mt-[55px]">
          <a href="#" aria-label="Facebook"
              class="flex items-center justify-center rounded-md text-white text-2xl">
            <i class="fa-brands fa-square-facebook" style="color: #1180BB"></i>
          </a>
          <a href="#" aria-label="Instagram"
              class="flex items-center justify-center rounded-md text-2xl bg-gradient-to-br from-[#BB2924] to-[#8A1AB3] text-transparent bg-clip-text">
            <i class="fa-brands fa-instagram"></i>
            
          </a>
          <a href="#" aria-label="Twitter"
              class="w-5 h-4 flex items-center justify-center bg-white rounded-l mt-1 text-2xl">
            <i class="fa-brands fa-square-x-twitter" style="color: #000000"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="mt-12 border-t border-white pt-6 text-center">
      <p class="text-xs font-['Poppins']">© 2025 UMKM Maritim Kepulauan Riau</p>
  </div>
  </footer>

  <!-- Include Flowbite for carousel functionality -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      const navbar = document.getElementById('navbar');
      navbar.classList.toggle('hidden');
    });
  </script>
  <script>
      // Initialize Flowbite carousel
      document.addEventListener('DOMContentLoaded', function () {
          const carouselElement = document.getElementById('default-carousel');
          if (carouselElement) {
              new Flowbite.Carousel(carouselElement, {
                  interval: 5000,
                  pauseOnHover: true
              });
          }
      });
  </script>
  
  <style>
      @media (max-width: 640px) {
          #default-search {
              padding: 0.75rem 1rem 0.75rem 2.5rem;
              font-size: 0.875rem;
          }
      }
  </style>
</body>
</html>