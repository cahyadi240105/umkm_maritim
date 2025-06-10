@include ('partials.navbar')
<div class="container mx-auto px-4 font-[Open Sans]" style="hyphens: auto">>
    <div class="relative mt-5 flex items-center justify-center ">
        <!-- Page Heading -->
        <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
        <p class="text-black text-[2.5rem] font-bold">Galeri</p>
        </div>
    </div>
    
      <section class="products-section mt-13 relative w-full max-w-[1203px] h-auto mx-auto px-4" id="galeri">
        
        @forelse ($galeri as $item)
            <div class="product-item relative mb-14 h-52">
                <img src="{{ asset($item['gambar']) }}" alt="{{ $item['judul'] }}"
                    class="absolute {{ $loop->iteration % 2 === 0 ? 'top-0 left-[622px]' : 'top-0 left-0' }} w-[580px] h-52 rounded-[20px] object-cover">
                <p class="absolute {{ $loop->iteration % 2 === 0 ? 'top-0 left-0' : 'top-0 left-[622px]' }} font-bold font-open-sans text-lg text-black text-[clamp(1.25rem, 2vw, 1.5rem)]">
                    {{ $item['judul'] }}
                </p>
                <p class="absolute {{ $loop->iteration % 2 === 0 ? 'top-10 left-0 w-[575px]' : 'top-10 left-[622px] w-[575px]' }} text-justify font-open-sans text-base text-black text-[clamp(0.875rem, 1.5vw, 1rem)]">
                    {{ $item['deskripsi'] }}
                </p>
            </div>
            @empty
            <p class="text-center text-gray-500 text-lg">Tidak ada hasil ditemukan untuk "{{ $search }}"</p>
        @endforelse
    </section>
    
</div>
<div class="relative">
    <button id="scrollToTopBtn"
      class="absolute -top-5 right-6 bg-yellow-400 text-black px-4 py-2 rounded-full shadow-lg hover:bg-yellow-300 transition-all font-semibold font-['Poppins'] z-50">
      ↑
    </button>
  </div>
@include ('partials.footer')
<script>
    const btn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY + window.innerHeight;
        const pageHeight = document.body.offsetHeight;

        if (scrollPosition >= pageHeight - 100) {
            btn.classList.remove("hidden");
        } else {
            btn.classList.add("hidden");
        }
    });

    btn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
