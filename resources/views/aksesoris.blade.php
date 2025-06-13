@include('partials.navbar')
    <div class="container mx-auto px-4 font-[Open Sans]">
        <div class="relative mt-5 ml-2 md:ml-4 lg:ml-30 ">
            <!-- Page Heading -->
            <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
            <p class="text-gray-800">Produk &gt; <span class="font-bold">Aksesoris</span></p>
            </div>
        </div>
        
        <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mt-6">
            @foreach ($aksesoriss as $index => $aksesoris)
            <div class="card-order relative max-w-[300px] w-full bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                        
                <!-- Custom Checkbox - Diperbaiki sesuai contoh Anda -->
                <div class="absolute top-2 left-2 z-20 flex items-center">
                    <input id="checkbox-{{ $index }}" type="checkbox" name="selected_aksesoriss[]" value="{{ $aksesoris['id'] }}"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2" onclick="handleCheckboxClick(this, {{ $index }})">
                </div>
        
                <!-- Info Icon -->
                <a href="javascript:void(0);" data-modal-target="modal-{{ $index }}" data-modal-toggle="modal-{{ $index }}"
                    class="flex items-center justify-center bg-white rounded-full w-3 h-3 absolute top-2 right-2 text-black hover:text-orange-500 z-10">
                    <i class="fa-solid fa-info-circle text-sm"></i>
                </a>
            
                <!-- Gambar -->
                <img src="{{ asset($aksesoris['gambar']) }}" alt="{{ $aksesoris['judul'] }}" class="w-full h-[120px] object-cover" />
            
                <!-- Info Produk -->
                <div class="p-4 space-y-2">
                    <h5 class="text-base tracking-tight text-black font-semibold">{{ $aksesoris['judul'] }}</h5>
                    <p class="text-sm text-black font-bold">Rp.{{ number_format($aksesoris['harga'], 0, ',', '.') }}</p>
                    <p class="text-sm text-black">
                        <i class="fa-solid fa-location-dot mr-1"></i>{{ $aksesoris['lokasi'] }}
                    </p>
            
                    <!-- Form Order -->
                    <form action="{{ route('wa.aksesoris', ['id' => $aksesoris['id']]) }}" method="GET" class="flex items-center justify-between pt-3 border-t border-gray-200 mt-2">
                        <div class="flex items-center space-x-2">
                            <input type="number" name="jumlah" value="1" min="1" max="99"
                                   class="order-input w-16 border rounded px-2 py-1 text-black"
                                   data-price="{{ $aksesoris['harga'] }}"
                                   oninput="updateTotal(this)" />
                            <span class="total-price text-black font-semibold">
                                Rp.{{ number_format($aksesoris['harga'], 0, ',', '.') }}
                            </span>
                        </div>
                        <button type="submit" class="text-black hover:text-green-600">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div id="wa-button-container" class="fixed bottom-6 right-6 hidden">
            <a id="wa-button" href="#" class="bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg transition-all duration-300 flex items-center justify-center">
                <i class="fab fa-whatsapp text-2xl mr-2"></i>
                <span>Pesan via WA</span>
            </a>
        </div>
    </div>
  

@include('partials.footer')