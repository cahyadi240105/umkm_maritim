@include ('partials.navbar')
<div class="container mx-auto px-6 py-12 text-[clamp(2rem,10vw,5rem)] text-balance">
    <div class="relative flex flex-col items-center justify-center text-center">
        <!-- Judul -->
        <div class="flex flex-col sm:flex-row items-center justify-between">
            <p class="text-black text-[clamp(2rem,5vw,2.5rem)] font-bold mb-10 font-[Poppins]">Tentang Kami</p>
        </div>

        <!-- Deskripsi -->
        <p
            class="text-black text-justify leading-relaxed max-w-7xl mx-auto mb-12 font-[Open Sans] text-[clamp(1rem,2.5vw,1.5rem)] text-balance">
            Kami adalah sekelompok pengembang yang merancang website ini sebagai platform e-commerce untuk
            memperkenalkan dan memasarkan produk dari pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) di sektor maritim
            di wilayah Kepulauan Riau. Terinspirasi oleh kekayaan laut dan budaya bahari, kami membuat website ini untuk
            mengangkat potensi lokal menjadi produk unggulan yang mampu bersaing di pasar nasional maupun internasional.
            Dalam website ini, kami mendeskripsikan perjalanan usaha mereka — yang berawal dari semangat masyarakat
            pesisir memanfaatkan hasil laut, hingga kini berkembang melalui inovasi digital. Produk yang ditampilkan
            meliputi olahan hasil laut, kuliner, dan aksesoris khas daerah. Dengan dukungan pengetahuan tradisional dan
            pendekatan teknologi, UMKM ini terus berinovasi dan memberdayakan masyarakat pesisir.
        </p>

        <!-- Visi & Misi + Tim Kami -->
        <div class="grid md:grid-cols-2 gap-8 w-full max-w-7xl text-black">
            <!-- Visi & Misi -->
            <div>
                <h3 class="text-2xl font-semibold mb-4 font-[Poppins] text-left">Visi & Misi</h3>
                <p class="text-justify font-[Open Sans] text-lg leading-relaxed mb-4">
                    <span class="font-semibold">• Visi:</span><br />
                    Menjadi pelaku usaha maritim lokal yang berdaya saing tinggi, berkelanjutan, dan menjadi inspirasi
                    dalam pelestarian budaya bahari.
                </p>
                <p class="text-justify font-[Open Sans] text-lg leading-relaxed ">
                    <span class="font-semibold">• Misi:</span><br />
                    Mengangkat potensi hasil laut Kepulauan Riau melalui produk berkualitas.<br />
                    Meningkatkan kesejahteraan masyarakat pesisir melalui pemberdayaan ekonomi.<br />
                    Menjaga kelestarian laut dengan proses produksi yang ramah lingkungan.<br />
                    Mendorong digitalisasi dan pemasaran produk lokal ke pasar lebih luas.
                </p>
            </div>

            <!-- Tim Kami -->
            <div>
                <h3 class="text-2xl font-semibold mb-4 font-[Poppins] text-left">Tim Kami</h3>
                <div class="w-full h-56 bg-zinc-300 rounded-md flex items-center justify-center">
                    <img src="{{ asset('images/WhatsApp Image 2025-06-03 at 17.29.52_35bb1fc2.jpg') }}" alt=""
                        srcset="" class="block w-full h-full object-cover rounded-md">
                </div>
            </div>
        </div>
    </div>
</div>


@include ('partials.footer')
