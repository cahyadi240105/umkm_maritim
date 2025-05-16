@include('partials.navbar')
    <div class="container mx-auto px-4 font-[Open Sans]">
        <div class="relative mt-5 ml-2 md:ml-4 lg:ml-25 ">
            <!-- Page Heading -->
            <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
            <p class="text-gray-800">Produk &gt; <span class="font-bold">Hasil Laut</span></p>
            </div>
        </div>

        {{-- Content --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ml-2 md:ml-4 lg:ml-25 mt-6">
            @for ($i = 0; $i < 9; $i++)
            <div class="w-[278px] h-[195px] bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                <a href="#">
                    <img src="{{ asset('images/batam-1.jpg') }}" alt="Batam" class="w-full h-[100px] object-fill" />
                </a>
                <div class="p-4">
                    <a href="#">
                        <h5 class="text-base tracking-tight text-black">Lakse Kuah</h5>
                    </a>
                    <p class="text-sm text-black mt-1 font-bold">Rp.12.000</p>
                    <p class="text-sm text-black mt-1">
                        <i class="fa-solid fa-location-dot"></i> Tanjungpinang
                    </p>
                </div>
            </div>
            @endfor
        </div>
    </div>
  

@include('partials.footer')