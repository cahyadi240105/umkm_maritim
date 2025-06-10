@include('partials.navbar')
    <div class="container mx-auto px-4 font-[Open Sans]">
        <div class="relative mt-5 ml-2 md:ml-4 lg:ml-30 ">
            <!-- Page Heading -->
            <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
            <p class="text-gray-800">Produk &gt; <span class="font-bold">Kuliner</span></p>
            </div>
        </div>

        {{-- Content --}}
        {{-- @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4 ">{{ session('success') }}</div>
        @endif --}}
        <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mt-6">
            @foreach ($kuliners as $index => $kuliner)
            <div class="relative max-w-[300px] w-full h-[240px] bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                
                <!-- Info Icon -->
                <a href="#" data-modal-target="modal-{{ $index }}" data-modal-toggle="modal-{{ $index }}" class="flex items-center justify-center bg-white rounded-full w-3 h-2 mt-2 absolute top-2 right-2 text-black hover:text-orange-500">
                    <i class="fa-solid fa-info-circle text-sm"></i>
                </a>
            
                <!-- Modal -->
                <div id="modal-{{ $index }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <div class="relative bg-white rounded-lg shadow-sm">
                            <div class="flex items-center justify-between p-4 md:p-5 border-b dark:border-orange-500 border-orange rounded-t">
                                <h3 class="text-xl font-semibold text-gray-900">Informasi</h3>
                                <button type="button" class="text-gray-400 hover:bg-gray-200 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="modal-{{ $index }}">  
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13"/></svg>
                                    <span class="sr-only">Tutup</span>
                                </button>
                            </div>
                            <div class="p-4 md:p-5 font-[Open Sans] text-justify space-y-4">
                                <p class="text-base leading-relaxed text-black font-bold">{{ $kuliner['judul'] }}</p>
                                <p class="text-black text-[clamp(0.9rem,1.5vw,1rem)]">{{ $kuliner['deskripsi'] }}</p>
                                <p class="text-base leading-relaxed text-black font-bold mt-8">Cara memesan</p>
                                <p class="text-black text-[clamp(0.9rem,1.5vw,1rem)]">Untuk memesan, silakan klik ikon WhatsApp di bawah ini untuk menghubungi penjual dan melakukan pemesanan langsung.</p>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Gambar -->
                <a href="#">
                    <img src="{{ asset($kuliner['gambar']) }}" alt="{{ $kuliner['judul'] }}" class="w-full h-[120px] object-cover" />
                </a>
            
                <!-- Info -->
                <div class="p-4">
                    <a href="#">
                        <h5 class="text-base tracking-tight text-black">{{ $kuliner['judul'] }}</h5>
                    </a>
                    <p class="text-sm text-black mt-1 font-bold">Rp.{{ number_format($kuliner['harga'], 0, ',', '.') }}</p>
                    <p class="text-sm text-black mt-1">
                        <i class="fa-solid fa-location-dot"></i> {{ $kuliner['lokasi'] }}
                    </p>
                </div>

                <!-- WhatsApp -->
                {{-- <form action="{{ route('kuliner.kirim') }}" method="POST" id="form-wa-{{ $kuliner['id'] }}" onsubmit="console.log('Mengirim form untuk ID: {{ $kuliner['id'] }}')">
                    @csrf
                    <input type="hidden" name="id" value="{{ $kuliner['id'] }}">
                    <button type="submit" class="absolute bottom-2 right-2 text-black hover:text-green-600 z-10" onclick="console.log('Tombol WhatsApp diklik untuk ID: {{ $kuliner['id'] }}')">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                    </button>
                </form> --}}
                <a href="{{ route('wa.kuliner', ['id' => $kuliner['id']]) }}"
                    class="absolute bottom-2 right-2 text-black hover:text-green-600 z-10"
                    target="_blank">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                 </a>
            </div>
            @endforeach
            
        </div>
    </div>
    {{-- <script>
        $('#form-wa-{{ $kuliner['id'] }}').submit(function(e) {
        e.preventDefault();
        $.post('{{ route('kuliner.kirim') }}', $(this).serialize(), function(response) {
            console.log('Response:', response);
        });
        });
        
    </script> --}}

@include('partials.footer')