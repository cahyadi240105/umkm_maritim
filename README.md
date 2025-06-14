## 🌊 UMKM Maritim Kepulauan Riau

Website ini dikembangkan sebagai platform e-commerce untuk mempromosikan dan memasarkan produk dari pelaku Usaha Mikro, Kecil, dan Menengah (UMKM) di sektor maritim wilayah Kepulauan Riau. Terinspirasi oleh kekayaan laut dan budaya bahari, proyek ini bertujuan mengangkat potensi lokal agar mampu bersaing di pasar nasional hingga internasional.

Melalui website ini, kami menampilkan kisah dan produk para pelaku UMKM — mulai dari hasil laut, kuliner khas pesisir, hingga aksesoris bernuansa bahari. Dengan memadukan pengetahuan tradisional dan inovasi digital, UMKM ini terus berkembang dan berkontribusi dalam pemberdayaan masyarakat pesisir.

---

## ⚙️ Teknologi dan Pembangunan Website

Website ini dibangun menggunakan:

* **Laravel** untuk pengembangan backend, memastikan keamanan dan manajemen data yang efisien.
* **Tailwind CSS** untuk desain antarmuka yang modern, responsif, dan mudah dikustomisasi.

Pemilihan teknologi ini mendukung performa optimal dan kemudahan pengembangan berkelanjutan.

---

## ✨ Fitur Utama Website

Website UMKM Maritim Kepulauan Riau dilengkapi dengan berbagai fitur yang mendukung promosi dan interaksi langsung antara konsumen dan pelaku UMKM:

* **🔄 Carousel Beranda**
  Menampilkan produk-produk unggulan dalam bentuk slideshow dinamis untuk menarik perhatian pengunjung.

* **🔍 Fitur Pencarian Produk**
  Memungkinkan pengguna mencari produk berdasarkan kata kunci secara cepat dan responsif di halaman beranda.

* **📧 Fitur Kontak Langsung**
  Tersedia tombol WhatsApp dan Email untuk menghubungi UMKM secara langsung:

  * **Nomor WhatsApp** dapat diatur dan disesuaikan melalui file `kontak_admin.json` yang terdapat di folder:

    * `public/data/kontak_admin.json`
    * `resources/data/kontak_admin.json`
  * **Alamat Email** dapat diubah langsung dari file konfigurasi `.env` menggunakan variabel `MAIL_FROM_ADDRESS`.

* **🛍️ Halaman Produk Terbagi 3 Kategori**
  Produk dikelompokkan menjadi tiga kategori utama:

  * **Aksesoris**
  * **Hasil Laut**
  * **Kuliner**
    Setiap produk memiliki tombol WhatsApp untuk transaksi langsung yang dikelola oleh admin UMKM.

* **ℹ️ Informasi Produk (Tombol "i")**
  Setiap produk dilengkapi tombol informasi untuk menampilkan detail singkat mengenai asal-usul atau deskripsi produk.

* **🖼️ Halaman Galeri**
  Menampilkan dokumentasi visual dan cerita asal-usul produk UMKM serta proses pembuatannya. Dilengkapi fitur **filtering** berdasarkan kategori dan **searching** untuk pencarian cepat.

* **👥 Tentang Kami**
  Menjelaskan latar belakang pengembangan website dan tujuan pemberdayaan UMKM maritim.

* **📞 Halaman Kontak**
  Menyediakan informasi kontak yang dapat dihubungi, termasuk tautan media sosial atau WhatsApp UMKM.

---

## 🚀 Cara Menjalankan Website Secara Lokal

Berikut adalah langkah-langkah untuk menjalankan proyek ini di komputer lokal Anda. Pastikan sudah menginstal **Composer**, **Node.js**, dan **NPM** sebelumnya.

### 1. Kloning Repositori

Clone repositori dari GitHub ke komputer Anda:

```bash
git clone https://github.com/cahyadi240105/umkm_maritim.git
cd umkm_maritim
```

### 2. Install Dependensi Laravel (Backend)

Jalankan perintah berikut untuk mengunduh semua dependensi PHP:

```bash
composer install
```

### 3. Salin File .env dan Buat Kunci Aplikasi

Buat salinan file .env dan generate application key Laravel:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Data Produk Menggunakan File JSON

Program ini menggunakan data produk yang disimpan secara **statis dalam format JSON**, tanpa koneksi ke database. Hal ini memudahkan pengelolaan dan pengembangan ringan tanpa konfigurasi basis data.

* Kontak admin (termasuk nomor WhatsApp) disimpan di file:

  * `public/data/kontak_admin.json`
  * `resources/data/kontak_admin.json`
* Alamat email pengirim diatur dari `.env` menggunakan:

  ```dotenv
  MAIL_FROM_ADDRESS=youremail@example.com
  ```

### 5. Install Dependensi Frontend (Tailwind CSS & Flowbite)

Instalasi dependensi frontend menggunakan NPM:

```bash
npm install tailwindcss @tailwindcss/vite --save-dev
```

Tambahkan Flowbite ke konfigurasi Tailwind di `tailwind.config.js`:

```js
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
```

📖 Referensi resmi: Flowbite Installation

### 6. Kompilasi Aset Frontend

Jalankan perintah berikut untuk menjalankan Tailwind dan Flowbite:

```bash
npm run dev
```

### 7. Jalankan Server Laravel

Untuk menjalankan server Laravel:

```bash
php artisan serve
```

Setelah itu, buka browser dan akses website melalui:

```bash
http://127.0.0.1:8000
```

---

## ✏️ Modifikasi

Proyek ini dibuat untuk mendukung digitalisasi UMKM maritim di Kepulauan Riau.
Silakan modifikasi, kembangkan, atau sesuaikan kode dan fitur sesuai dengan kebutuhan Anda.

Kontribusi sangat terbuka! Jangan ragu untuk membuat pull request atau memberikan masukan. Semoga bermanfaat!
