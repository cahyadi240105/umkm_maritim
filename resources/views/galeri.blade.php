@include ('partials.navbar')
<div class="container mx-auto px-4 font-[Open Sans]" style="hyphens: auto">>
    <div class="relative mt-5 flex items-center justify-center ">
        <!-- Page Heading -->
        <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
            <p class="text-black text-[2.5rem] font-bold">Galeri</p>
        </div>
    </div>
    <section class="products-section mt-13 relative w-full max-w-[1203px] h-auto mx-auto px-4" id="galeri">
        <!-- Filter dan Search Section -->
        <div class="flex flex-col md:flex-row gap-4 mb-8 sticky top-0 bg-white py-4 z-10">
            <!-- Search Input -->
            <div class="flex-1">
                <input type="text" id="searchInput" placeholder="Cari produk..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-[10px] focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-black" autocomplete="off"
                    value="{{ $search ?? '' }}">
            </div>

            <!-- Filter Select -->
            <div class="flex gap-4">
                <select id="categoryFilter"
                    class="px-4 py-2 border border-gray-300 rounded-[10px] text-black focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-40">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}"
                            {{ ($selectedCategory ?? '') === $category ? 'selected' : '' }}>
                            {{ ucfirst(str_replace('_', ' ', $category)) }}
                        </option>
                    @endforeach
                </select>

                <select id="sortFilter"
                    class="px-4 py-2 border border-gray-300 rounded-[10px] text-black focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-30">
                    <option value="terbaru" {{ ($sort ?? '') === 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                    <option value="terlama" {{ ($sort ?? '') === 'terlama' ? 'selected' : '' }}>Terlama</option>
                </select>
            </div>
        </div>

        <!-- Gallery Items -->
        <div id="galleryContainer">
            @forelse ($galeri as $item)
                <div class="product-item relative mb-14 h-52" data-title="{{ strtolower($item['judul']) }}"
                    data-description="{{ strtolower($item['deskripsi']) }}" data-category="{{ $item['kategori'] }}"
                    data-date="{{ $item['created_at'] ?? '' }}">
                    <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}"
                        class="absolute {{ $loop->iteration % 2 === 0 ? 'top-0 left-[622px]' : 'top-0 left-0' }} w-[580px] h-52 rounded-[20px] object-cover">
                    <p
                        class="absolute {{ $loop->iteration % 2 === 0 ? 'top-0 left-0' : 'top-0 left-[622px]' }} font-bold font-open-sans text-lg text-black text-[clamp(1.25rem, 2vw, 1.5rem)]">
                        {{ $item['judul'] }}
                    </p>
                    <p
                        class="absolute {{ $loop->iteration % 2 === 0 ? 'top-10 left-0 w-[575px]' : 'top-10 left-[622px] w-[575px]' }} text-justify font-open-sans text-base text-black text-[clamp(0.875rem, 1.5vw, 1rem)]">
                        {{ $item['deskripsi'] }}
                    </p>
                </div>
            @empty
                <p class="text-center text-gray-500 text-lg">Tidak ada hasil ditemukan</p>
            @endforelse
        </div>
    </section>
</div>
<div class="fixed bottom-6 right-6 z-50 transition-opacity duration-300 opacity-0 invisible" id="scrollToTopBtn">
    <button aria-label="Scroll to top"
        class="bg-yellow-400 text-black w-12 h-12 rounded-full shadow-lg hover:bg-yellow-300 transition-all font-semibold font-['Poppins'] flex items-center justify-center">
        ↑
    </button>
</div>
@include ('partials.footer')
