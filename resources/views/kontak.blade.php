@include('partials.navbar')

<div class="container mx-auto px-6 py-12 text-balance">
  <div class="relative flex flex-col items-center justify-center text-center">
    <!-- Judul -->
    <div class="flex flex-col sm:flex-row items-center justify-between">
      <p class="text-black text-[clamp(2rem,5vw,2.5rem)] font-bold mb-5 font-[Poppins]">Hubungi Kami</p>
    </div>

    <!-- Deskripsi -->
    <p class="text-black text-justify text-lg leading-relaxed max-w-7xl mx-auto font-[Open Sans] text-[clamp(1rem,2.5vw,1.5rem)]">
      Terima kasih telah mengunjungi website resmi UMKM Maritim Kepulauan Riau.
    </p>
    <p class="text-black text-justify text-lg leading-relaxed max-w-7xl mx-auto mb-12 font-[Open Sans] text-[clamp(1rem,2.5vw,1.5rem)]">
      Jika Anda memiliki pertanyaan, masukan, atau ingin menjalin kerja sama terkait program pengembangan usaha maritim, jangan ragu untuk menghubungi kami melalui form di bawah ini. Kami terbuka untuk berbagai bentuk kolaborasi yang dapat membantu memperkuat potensi ekonomi maritim lokal. Tim kami akan berusaha memberikan respon secepat mungkin. Dukungan dan partisipasi Anda sangat berarti bagi kemajuan UMKM di Kepulauan Riau.
    </p>

    <!-- Konten Utama -->
    <div class="grid md:grid-cols-2 gap-8 w-full max-w-7xl text-black">
      <!-- Informasi Kontak -->
      <div>
        <p class="text-justify font-[Open Sans] text-lg leading-relaxed mb-4">
          <span class="font-bold">Alamat :</span>
          Jalan Senggarang
        </p>
        <p class="text-justify font-[Open Sans] text-lg leading-relaxed mb-4">
          <span class="font-bold">Telepon :</span>
          0812-XXXX-XXXX
        </p>
        <p class="text-justify font-[Open Sans] text-lg leading-relaxed mb-4">
          <span class="font-bold">Email :</span>
          umkmkepri@gmail.com
        </p>
        <p class="text-justify font-[Open Sans] text-lg leading-relaxed w-full max-w-sm">
          <span class="font-bold">Jam Operasional:</span><br />
          Senin – Jumat: 08.00 – 17.00 WIB<br />
          Sabtu: 09.00 – 13.00 WIB<br />
          Minggu & Hari Libur Nasional: Tutup<br />
          <br />
          Di luar jam tersebut, Anda tetap bisa mengirim pesan melalui formulir atau email. Kami akan membalas secepat mungkin pada hari kerja berikutnya.
        </p>
      </div>

      <!-- Formulir Kontak -->
      <div>
        <form class="w-full max-w-md mx-auto space-y-5 text-left font-[Open Sans]">
          <div>
            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 text-lef">Nama</label>
            <input type="text" id="name" placeholder="" required
              class="w-full p-2.5 border border-gray-300 rounded-lg text-sm text-gray-900 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" />
          </div>
          <div>
            <label for="email" class="block mb-1 text-sm font-medium text-gray-900 text-lef">Email</label>
            <input type="email" id="email" placeholder="" required
              class="w-full p-2.5 border border-gray-300 rounded-lg text-sm text-gray-900 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" />
          </div>
          <div>
            <label for="subjek" class="block mb-1 text-sm font-medium text-gray-900 text-lef">Subjek</label>
            <input type="text" id="subjek" placeholder="" required
              class="w-full p-2.5 border border-gray-300 rounded-lg text-sm text-gray-900 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" />
          </div>
          <div>
            <label for="message" class="block mb-1 text-sm font-medium text-gray-900 text-lef">Pesan</label>
            <textarea id="message" rows="5" required
              class="w-full p-2.5 border border-gray-300 rounded-lg text-sm text-gray-900 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Tulis pesan Anda di sini..."></textarea>
          </div>
          <button type="submit"
            class="w-full sm:w-auto px-5 py-2.5 bg-sky-950 text-white rounded-lg text-sm hover:bg-orange-500 focus:ring-4 focus:ring-blue-300">
            Kirim
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@include('partials.footer')
