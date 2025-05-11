<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKM - Maritim</title>
    <link rel="icon" href="{{ asset('images/logo-1.png')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Import Google Fonts: Poppins dan Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    {{-- Import Icon Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
<body>
    {{-- navbar --}}
    <nav class="bg-sky-950 border-b border-gray-200 px-2 py-3 shadow font-['Poppins']">
        <div class="container mx-auto flex items-center justify-between">
          
          {{-- logo --}}
          <a href="/" class="flex items-center">
            <img src="{{ asset ('images/logo-1.png')}}" alt="Logo" class="h-16 mr-2 ml-5" />
            <span class="self-center text-xl font-semibold whitespace-nowrap text-gray-800"></span>
          </a>
           <!-- Toggle button -->
           <button id="menu-toggle" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            {{--  Navbar link --}}
          <div class="hidden md:flex space-x-4" id="navbar">
            <a href="#" class="text-white hover:text-yellow-400 font-bold">Beranda</a>
            
            {{-- dropdwon produk --}}
            <div class="relative">
                <button id="dropdownProdukButton" data-dropdown-toggle="dropdownProduk" class="text-white font-medium hover:text-yellow-400 inline-flex items-center">
                Produk
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
                </button>

                <div id="dropdownProduk" class="hidden absolute z-10 bg-sky-950 divide-y divide-gray-100 rounded-lg shadow w-44 mt-2">
                <ul class="py-2 text-sm text-white">
                    <li><a href="#" class="block px-4 py-2 hover:bg-white text-yellow-400">Kuliner</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-white text-yellow-400">Hasil Laut</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-white text-yellow-400">Aksesoris</a></li>
                </ul>
                </div>
            </div>
            <a href="#" class="text-white hover:text-yellow-400 font-medium">Galeri</a>
            <a href="#" class="text-white hover:text-yellow-400 font-medium">Tentang Kami</a>
            <a href="#" class="text-white hover:text-yellow-400 font-medium mr-5">Kontak</a>
          </div>
        </div>
      </nav>

    {{-- Searching --}}
    <form class="max-w-md mx-auto mt-[50px] flex items-center justify-center">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only font-['Poppins']">Search</label>
        <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-5 h-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M19 19l-4-4m0-7a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          {{-- Searching box --}}
          <input type="search"id="default-search" class="block w-[400px] p-4 ps-10 text-sm text-black border border-black rounded-[50px] bg-white focus:ring-black focus:border-black font font-['Poppins'] text-['24px'] font-normal" placeholder="Search ..."
            required />
        </div>
      </form>
      
      {{-- Hero/Carousel --}}
      <div class="flex justify-center items-center mt-10">
        <div id="default-carousel" class="relative w-full max-w-[1203px] h-[394px]" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative w-full h-full overflow-hidden rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('images/logo.jpg') }}" class="block w-full h-full object-fill" alt="Slide 1">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('images/batam-5.jpg') }}" class="block w-full h-full object-fill" alt="Slide 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="{{ asset('images/batam-1.jpg') }}" class="block w-full h-full object-fill" alt="Slide 3">
            </div>
          </div>
      
          <!-- Slider controls -->
          <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 focus:ring-2 focus:ring-black">
              <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
            </span>
          </button>
          <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 focus:ring-2 focus:ring-black">
              <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
            </span>
          </button>
      
          <!-- Carousel indicators -->
          <div class="mt-4 justify-center items-center flex space-x-3">
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black/50" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black/50" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          </div>
        </div>
      </div>
      
      {{-- Content --}}
      <div class="relative h-64">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
          <div class="flex items-center justify-center">
            <div class="w-16 h-px bg-gray-500"></div>
              <p class="font-bold whitespace-nowrap mx-4 font-['Open Sans'] text-[40px]">Produk Pilihan Hari Ini</p>
            <div class="w-16 h-px bg-gray-500"></div>
         </div>
         <p class="font-['Open Sans']">
          Setiap hari kami tampilkan produk UMKM terbaik dari Kepulauan Riau, langsung dari galeri kami</p>
        </div>
      </div>

      <div class="relative w-[1203px] h-[461px] mx-auto">
        <img src="{{ asset('images/Lakse-kuah-kulinerhunter.com_.jpg')}}" alt="Lakse Kuah" class="absolute top-0 left-0 w-[590px] h-52 rounded-[20px] object-cover">
        <p class="absolute top-0 left-[622px] font-bold font-['Open Sans'] text-[18px]">
          Lakse
        </p>
        <p class="absolute top-10 left-[622px] w-[575px] text-justify font-['Open Sans'] text-[17px]">
          Lakse adalah makanan khas sejenis mie yang dicampur dengan bumbu racikan khas Tionghoa dan Melayu. Lakse memiliki bentuk mie bulat putih dan sedikit tebal. Nama Lakse diambil dari bahasa Sanskerta yang mempunyai arti banyak. Hal ini menunjukkan bahwa mie Lakse dibuat dengan berbagai bumbu.
        </p>
        <img src="{{ asset('images/gonggong-di-batam.jpg') }}" alt="Gong-gong batam" class="absolute top-[251px] left-[622px] w-[580px] h-52 rounded-[20px] object-cover">
        <p class="absolute top-[251px] left-0 font-bold text-gray-900 font-['Open Sans'] text-[18px]">Gong-gong</p>
        <p class="absolute top-[291px] left-[0px] w-[596px] text-justify font-['Open Sans'] text-[17px]">Gong-gong atau Siput merupakan makanan khas masyarakat di Kepulauan Riau. Makanan ini biasanya diolah dengan cara direbus lalu dimakan dengan sambal khusus. Gong gong tidak hanya terkenal di Kepri tetapi juga sudah dikenal hingga ke Malaysia, Singapura, Korea, Thailand hingga India karena rasa dan aromanya yang khas.</p>
      </div>

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
                    <li><a href="#" class="hover:text-orange-500">Kontak</a></li>
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
                    <button class="mt-2 bg-orange-500 text-white text-xs font-semibold font-['Poppins'] px-4 py-2 rounded-sm hover:bg-orange-600 2 w-20">Kirim</button>
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
</body>
</html>