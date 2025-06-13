@include('partials.navbar')
<div class="container mx-auto px-4" style="hyphens: auto">>
<!-- Search Section -->
  <section class="search-section max-w-lg mx-auto mt-12 px-4 ">
      <form class="flex items-center justify-center" method="GET" action="{{ route('home')}}">
          <label for="default-search" class="sr-only font-poppins w-full text-sm text-gray-900 text-[clamp(2rem,5vw ,2rem)]">Search</label>
          <div class="relative w-full max-w-md">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M19 19l-4-4m0-7a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="search" id="default-search" autocomplete="off" class="search-input w-full p-4 pl-10 text-sm text-black border border-black rounded-full bg-white focus:ring-1 focus:ring-black focus:border-black font-poppins text-lg font-normal" placeholder="Search ..." required name="search", value="{{ $search }}"/>
          </div>
      </form>
  </section>

  <!-- Carousel Section -->
  <section class="carousel-section mt-10 px-3 w-[clamp(2rem,5vw ,2rem)]">
      <div id="default-carousel" class="relative w-full max-w-5xl mx-auto h-[25rem] md:h-[24.625rem]" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative w-full h-full overflow-hidden rounded-lg">
            @foreach($produk_result as $index => $item)
            <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                <div class="relative h-full w-full">
                    <img src="{{ asset($item['gambar']) }}" class="block w-full h-full object-cover" alt="{{ $item['judul'] }}"> 
                </div>
            </div>
            @endforeach
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
            @foreach($produk_result as $index => $item)
                <button type="button"
                        class="w-3 h-3 rounded-full {{ $index === 0 ? 'bg-black' : 'bg-black/50' }}"
                        aria-label="Slide {{ $index + 1 }}"
                        data-carousel-slide-to="{{ $index }}">
                </button>
            @endforeach
        </div>
      </div>
  </section>

  <!-- Highlight Section -->
  <section class="highlight-section h-auto py-12 flex items-center justify-center px-4 w-[clamp(2rem,5vw ,2rem)">
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

  @if(empty($search))
    <section class="products-section relative w-full max-w-[1203px] mx-auto px-4 w-[clamp(2rem,5vw,2rem)]">
        @foreach ($produk_full as $index => $item)
        <div class="product-item relative mb-14 h-52 @if($loop->last) mb-0 @endif">
            <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}"
                class="absolute {{ $loop->iteration % 2 === 0 ? 'top-0 left-[622px]' : 'top-0 left-0' }} w-[580px] h-52 rounded-[20px] object-cover">
            <p class="absolute {{ $loop->iteration % 2 === 0 ? 'top-0 left-0' : 'top-0 left-[622px]' }} font-bold font-open-sans text-lg text-black text-[clamp(1.25rem, 2vw, 1.5rem)]">
                {{ $item['judul'] }}
            </p>
            <p class="absolute {{ $loop->iteration % 2 === 0 ? 'top-10 left-0 w-[575px]' : 'top-10 left-[622px] w-[575px]' }} text-justify font-open-sans text-base text-black text-[clamp(0.875rem, 1.5vw, 1rem)]">
                {{ $item['deskripsi'] }}
            </p>
        </div>
        @endforeach
    </section>
@else
    {{-- carausel section --}}
    <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mt-6">
        @foreach ($produk_result as $index => $item)
        <div class="relative max-w-[300px] w-full h-[240px] bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
            
            <!-- Modal dan Info Icon -->
            <a href="#" data-modal-target="modal-{{ $index }}" data-modal-toggle="modal-{{ $index }}" class="flex items-center justify-center bg-white rounded-full w-3 h-2 mt-2 absolute top-2 right-2 text-black hover:text-orange-500">
                <i class="fa-solid fa-info-circle text-sm"></i>
            </a>
            
            <div id="modal-{{ $index }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            </div>
        
            <!-- Gambar -->
            <a href="#">
                <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}" class="w-full h-[120px] object-cover" />
            </a>
        
            <!-- Info -->
            <div class="p-4">
                <a href="#">
                    <h5 class="text-base tracking-tight text-black">{{ $item['judul'] }}</h5>
                </a>
                <p class="text-sm text-black mt-1 font-bold">Rp.{{ number_format($item['harga'] ?? 0, 0, ',', '.') }}</p>
                <p class="text-sm text-black mt-1">
                    <i class="fa-solid fa-location-dot"></i> {{ $item['lokasi'] ?? 'Lokasi tidak tersedia' }}
                </p>
            </div>

            <!-- WhatsApp -->
            <a href="{{ route('wa.kuliner', ['id' => $item['id']]) }}"
                class="absolute bottom-2 right-2 text-black hover:text-green-600 z-10"
                target="_blank">
                <i class="fa-brands fa-whatsapp text-xl"></i>
            </a>                 
        </div>
        @endforeach
        
        @if($produk_result->isEmpty())
            <div class="col-span-full text-center py-8">
                <p class="text-gray-500">Tidak ada hasil yang ditemukan untuk pencarian "{{ $search }}"</p>
            </div>
        @endif
    </div>
@endif
</div>
@include('partials.footer')