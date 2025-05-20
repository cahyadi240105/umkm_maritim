@include ('partials.navbar')
<div class="container mx-auto px-4 font-[Open Sans]" style="hyphens: auto">>
    <div class="relative mt-5 flex items-center justify-center ">
        <!-- Page Heading -->
        <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
        <p class="text-black text-[2.5rem] font-bold">Galeri</p>
        </div>
    </div>
    <section class="products-section mt-13 relative w-full max-w-[1203px] h-[461px] mx-auto px-4 w-[clamp(2rem,5vw ,2rem)] ">
        <div class="product-item relative ">
            <img src="{{ asset('images/Lakse-kuah-kulinerhunter.com_.jpg') }}" alt="Lakse Kuah" class="absolute top-0 left-0 w-[590px] h-52 rounded-[20px] object-cover">
            <p class="absolute top-0 left-[622px] font-bold font-open-sans text-lg text-black text-[clamp(2rem,10vw ,5rem)]">Lakse</p>
            <p class="absolute top-10 left-[622px] w-[575px] text-justify font-open-sans text-base text-black text-[clamp(2rem,10vw ,5rem)]">
                Lakse adalah makanan khas sejenis mie yang dicampur dengan bumbu racikan khas Tionghoa dan Melayu. Lakse memiliki bentuk mie bulat putih dan sedikit tebal. Nama Lakse diambil dari bahasa Sanskerta yang mempunyai arti banyak. Hal ini menunjukkan bahwa mie Lakse dibuat dengan berbagai bumbu.
            </p>
        </div>
        <div class="product-item relative">
            <img src="{{ asset('images/gonggong-di-batam.jpg') }}" alt="Gong-gong batam" class="absolute top-[251px] left-[622px] w-[580px] h-52 rounded-[20px] object-cover">
            <p class="absolute top-[251px] left-0 font-bold font-open-sans text-lg text-black text-[clamp(2rem,10vw ,5rem)]">Gong-gong</p>
            <p class="absolute top-[291px] left-0 w-[596px] text-justify font-open-sans text-base text-black text-[clamp(2rem,10vw ,5rem)]">
                Gong-gong atau Siput merupakan makanan khas masyarakat di Kepulauan Riau. Makanan ini biasanya diolah dengan cara direbus lalu dimakan dengan sambal khusus. Gong gong tidak hanya terkenal di Kepri tetapi juga sudah dikenal hingga ke Malaysia, Singapura, Korea, Thailand hingga India karena rasa dan aromanya yang khas.
            </p>
        </div>
      </section>
      <section class="products-section mt-10 relative w-full max-w-[1203px] h-[461px] mx-auto px-4 w-[clamp(2rem,5vw ,2rem)] ">
        <div class="product-item relative ">
            <img src="{{ asset('images/Lakse-kuah-kulinerhunter.com_.jpg') }}" alt="Lakse Kuah" class="absolute top-0 left-0 w-[590px] h-52 rounded-[20px] object-cover">
            <p class="absolute top-0 left-[622px] font-bold font-open-sans text-lg text-black text-[clamp(2rem,10vw ,5rem)]">Lakse</p>
            <p class="absolute top-10 left-[622px] w-[575px] text-justify font-open-sans text-base text-black text-[clamp(2rem,10vw ,5rem)]">
                Lakse adalah makanan khas sejenis mie yang dicampur dengan bumbu racikan khas Tionghoa dan Melayu. Lakse memiliki bentuk mie bulat putih dan sedikit tebal. Nama Lakse diambil dari bahasa Sanskerta yang mempunyai arti banyak. Hal ini menunjukkan bahwa mie Lakse dibuat dengan berbagai bumbu.
            </p>
        </div>
        <div class="product-item relative">
            <img src="{{ asset('images/gonggong-di-batam.jpg') }}" alt="Gong-gong batam" class="absolute top-[251px] left-[622px] w-[580px] h-52 rounded-[20px] object-cover">
            <p class="absolute top-[251px] left-0 font-bold font-open-sans text-lg text-black text-[clamp(2rem,10vw ,5rem)]">Gong-gong</p>
            <p class="absolute top-[291px] left-0 w-[596px] text-justify font-open-sans text-base text-black text-[clamp(2rem,10vw ,5rem)]">
                Gong-gong atau Siput merupakan makanan khas masyarakat di Kepulauan Riau. Makanan ini biasanya diolah dengan cara direbus lalu dimakan dengan sambal khusus. Gong gong tidak hanya terkenal di Kepri tetapi juga sudah dikenal hingga ke Malaysia, Singapura, Korea, Thailand hingga India karena rasa dan aromanya yang khas.
            </p>
        </div>
      </section>
</div>
@include ('partials.footer')