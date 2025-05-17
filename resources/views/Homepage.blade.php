@include('partials.navbar')
<div class="container mx-auto px-4" style="hyphens: auto">>
<!-- Search Section -->
  <section class="search-section max-w-lg mx-auto mt-12 px-4 ">
      <form class="flex items-center justify-center">
          <label for="default-search" class="sr-only font-poppins w-full text-sm text-gray-900 text-[clamp(2rem,5vw ,2rem)]">Search</label>
          <div class="relative w-full max-w-md">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M19 19l-4-4m0-7a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="search" id="default-search" class="search-input w-full p-4 pl-10 text-sm text-black border border-black rounded-full bg-white focus:ring-1 focus:ring-black focus:border-black font-poppins text-lg font-normal" placeholder="Search ..." required />
          </div>
      </form>
  </section>

  <!-- Carousel Section -->
  <section class="carousel-section mt-10 px-3 w-[clamp(2rem,5vw ,2rem)]">
      <div id="default-carousel" class="relative w-full max-w-5xl mx-auto h-[25rem] md:h-[24.625rem]" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative w-full h-full overflow-hidden rounded-lg">
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="{{ asset('images/logo.jpg') }}" class="block w-full h-full object-cover" alt="Slide 1">
              </div>
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="{{ asset('images/batam-5.jpg') }}" class="block w-full h-full object-cover" alt="Slide 2">
              </div>
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="{{ asset('images/batam-1.jpg') }}" class="block w-full h-full object-cover" alt="Slide 3">
              </div>
          </div>
          <!-- Slider controls -->
          <button type="button" class="carousel-control-prev absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 focus:ring-2 focus:ring-black">
                  <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
              </span>
          </button>
          <button type="button" class="carousel-control-next absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 focus:ring-2 focus:ring-black">
                  <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
              </span>
          </button>
          <!-- Carousel indicators -->
          <div class="carousel-indicators mt-4 flex justify-center items-center space-x-3">
              <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-3 h-3 rounded-full bg-black/50" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-3 h-3 rounded-full bg-black/50" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          </div>
      </div>
  </section>

  <!-- Highlight Section -->
  <section class="highlight-section h-auto py-12 flex items-center justify-center px-4 w-[clamp(2rem,5vw ,2rem)]">
      <div class="text-center">
          <div class="flex flex-col md:flex-row items-center justify-center">
              <div class="w-15 h-px bg-gray-500"></div>
              <p class="font-bold whitespace-nowrap mx-4 font-[Open Sans] text-3xl md:text-4xl text-black text-[clamp(2rem,5vw ,2rem)]">Produk Pilihan Hari Ini</p>
              <div class="w-15 h-px bg-gray-500"></div>
          </div>
          <p class="font-[Open Sans] text-black text-base md:text-lg mt-2 ">
              Setiap hari kami tampilkan produk UMKM terbaik dari Kepulauan Riau, langsung dari galeri kami
          </p>
      </div>
  </section>

  <!-- Products Section -->
  <section class="products-section relative w-full max-w-[1203px] h-[461px] mx-auto px-4 w-[clamp(2rem,5vw ,2rem)] ">
    <div class="product-item relative ">
        <img src="{{ asset('images/Lakse-kuah-kulinerhunter.com_.jpg') }}" alt="Lakse Kuah" class="absolute top-0 left-0 w-[590px] h-52 rounded-[20px] object-cover">
        <p class="absolute top-0 left-[622px] font-bold font-[Open Sans] text-lg text-black text-[clamp(2rem,10vw ,5rem)]">Lakse</p>
        <p class="absolute top-10 left-[622px] w-[575px] text-justify font-[Open Sans] text-base text-black text-[clamp(2rem,10vw ,5rem)]">
            Lakse adalah makanan khas sejenis mie yang dicampur dengan bumbu racikan khas Tionghoa dan Melayu. Lakse memiliki bentuk mie bulat putih dan sedikit tebal. Nama Lakse diambil dari bahasa Sanskerta yang mempunyai arti banyak. Hal ini menunjukkan bahwa mie Lakse dibuat dengan berbagai bumbu.
        </p>
    </div>
    <div class="product-item relative">
        <img src="{{ asset('images/gonggong-di-batam.jpg') }}" alt="Gong-gong batam" class="absolute top-[251px] left-[622px] w-[580px] h-52 rounded-[20px] object-cover">
        <p class="absolute top-[251px] left-0 font-bold font-[Open Sans] text-lg text-black text-[clamp(2rem,10vw ,5rem)]">Gong-gong</p>
        <p class="absolute top-[291px] left-0 w-[596px] text-justify font-[Open Sans] text-base text-black text-[clamp(2rem,10vw ,5rem)]">
            Gong-gong atau Siput merupakan makanan khas masyarakat di Kepulauan Riau. Makanan ini biasanya diolah dengan cara direbus lalu dimakan dengan sambal khusus. Gong gong tidak hanya terkenal di Kepri tetapi juga sudah dikenal hingga ke Malaysia, Singapura, Korea, Thailand hingga India karena rasa dan aromanya yang khas.
        </p>
    </div>
  </section>
</div>
@include('partials.footer')