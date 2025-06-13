{{-- Footer --}}

<footer class="bg-sky-950 mt-[100px] w-full px-4 sm:px-6 lg:px-8" id="footer">

    <div class="mx-auto w-full max-w-screen-xl p-4 py-4 lg:py-8 text-[white]">
        <!-- Tombol Scroll ke Atas -->

        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('images/logo-1.png') }}" class="h-16" alt="FlowBite Logo" />
                    <span class="self-center text-[20px] w-50 font-bold dark:text-white font-['Poppins']">UMKM Maritim
                        Kepulauan Riau</span>
                </a>
                <p class="self-center text-white w-75 mt-2 flex font-['Open Sans'] text-[16px] text-justify ">
                    UMKM Maritim Kepulauan Riau adalah wadah promosi produk lokal maritim yang mengangkat budaya, rasa,
                    dan kekayaan alam pesisir.
                </p>
            </div>
            <div>
                <h3 class="text-[18px] font-bold font-['Poppins'] mb-4">Overview</h3>
                <ul class="space-y-2 text-[normal] text-[14px] font-['Poppins']">
                    <li><a href="/homepage" class="hover:text-orange-500">Beranda</a></li>
                    <div class="relative">
                        <button id="dropdownProdukButton" data-dropdown-toggle="dropdownProduk"
                            class="text-white font-medium hover:text-yellow-400 inline-flex items-center">
                            Produk
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div id="dropdownProduk"
                            class="hidden absolute z-10 bg-sky-950 divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-white">
                                <li><a href="/kuliner"
                                        class="block px-4 py-2 hover:bg-white text-yellow-400">Kuliner</a></li>
                                <li><a href="/hasillaut" class="block px-4 py-2 hover:bg-white text-yellow-400">Hasil
                                        Laut</a></li>
                                <li><a href="/aksesoris"
                                        class="block px-4 py-2 hover:bg-white text-yellow-400">Aksesoris</a></li>
                            </ul>
                        </div>
                    </div>
                    <li><a href="/galeri" class="hover:text-orange-500">Galeri</a></li>
                    <li><a href="/tentangkami" class="hover:text-orange-500">Tentang Kami</a></li>
                    <li><a href="/kontak" class="hover:text-orange-500 mb-4">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold font-['Poppins']">Jam Operasional</h3>
                <p class="text-xs font-['Open_Sans'] whitespace-pre-line">
                    Senin – Jumat : 08.00 – 17.00 WIB
                    Sabtu : 09.00 – 13.00 WIB
                    Minggu & Hari Libur Nasional : Tutup
                </p>
            </div>
            <div>
                <h3 class="text-lg font-bold font-['Poppins'] mb-4">Hubungi Kami</h3>
                <div class="space-y-2 text-sm font-['Poppins']">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                        <span>+08126xxxxxxxxx</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                        <span>umkmkepri@gmail.com</span>
                    </div>
                </div>
                <div class="flex space-x-6 mt-[55px]">
                    <a href="#" aria-label="Facebook"
                        class="flex items-center justify-center rounded-md text-white text-2xl">
                        <i class="fa-brands fa-square-facebook" style="color: #1180BB"></i>
                    </a>
                    <a href="#" aria-label="Instagram"
                        class="flex items-center justify-center rounded-md text-2xl bg-gradient-to-br from-[#BB2924] to-[#8A1AB3] text-transparent bg-clip-text">
                        <i class="fa-brands fa-instagram"></i>

                    </a>
                    <a href="#" aria-label="Twitter"
                        class="w-5 h-4 flex items-center justify-center bg-white rounded-l mt-1 text-2xl">
                        <i class="fa-brands fa-square-x-twitter" style="color: #000000"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-white pt-6 text-center">

            <p class="text-xs font-['Poppins']">© 2025 UMKM Maritim Kepulauan Riau - Cahyadi Prasetyo</p>
        </div>
</footer>

<!-- Include Flowbite for carousel functionality -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const navbar = document.getElementById('navbar');
        navbar.classList.toggle('hidden');
    });
</script>
<script>
    // Initialize Flowbite carousel
    document.addEventListener('DOMContentLoaded', function() {
        const carouselElement = document.getElementById('default-carousel');
        if (carouselElement) {
            new Flowbite.Carousel(carouselElement, {
                interval: 5000,
                pauseOnHover: true
            });
        }
    });
</script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
    @media (max-width: 640px) {
        #default-search {
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            font-size: 0.875rem;
        }
    }
</style>
<script>
    document.getElementById("scrollToTopBtn").addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>

<script>
    // Array to store selected items with their details
    let selectedItems = [];

    // Handle checkbox clicks
    function handleCheckboxClick(checkbox, index) {
        const card = checkbox.closest('.card-order');
        const productId = checkbox.value;
        const productName = card.querySelector('h5').textContent.trim();
        const priceText = card.querySelector('p.text-black.font-bold').textContent.trim();
        const price = parseInt(priceText.replace(/[^\d]/g, ''));
        const quantity = parseInt(card.querySelector('.order-input').value);
        const location = card.querySelector('p.text-black i.fa-location-dot').nextSibling.textContent.trim();

        if (checkbox.checked) {
            // Add to selected items if not already present
            if (!selectedItems.some(item => item.id === productId)) {
                selectedItems.push({
                    id: productId,
                    name: productName,
                    price: price,
                    quantity: quantity,
                    location: location
                });
            }
        } else {
            // Remove from selected items
            selectedItems = selectedItems.filter(item => item.id !== productId);
        }
        
        toggleWaButton();
    }

    // Update total price when quantity changes
    function updateTotal(input) {
        const price = parseFloat(input.getAttribute('data-price'));
        const quantity = parseInt(input.value);
        const total = price * quantity;
        const totalElement = input.closest('.flex').querySelector('.total-price');
        totalElement.textContent = 'Rp' + total.toLocaleString('id-ID');
        
        // Update quantity in selectedItems if product is selected
        const card = input.closest('.card-order');
        const checkbox = card.querySelector('input[type="checkbox"]');
        if (checkbox.checked) {
            const productId = checkbox.value;
            const itemIndex = selectedItems.findIndex(item => item.id === productId);
            if (itemIndex !== -1) {
                selectedItems[itemIndex].quantity = quantity;
                toggleWaButton();
            }
        }
    }

    // Toggle WA button and prepare message
    async function toggleWaButton() {
        const waButtonContainer = document.getElementById('wa-button-container');
        const waButton = document.getElementById('wa-button');

        if (selectedItems.length > 0) {
            try {
                // 1. Load admin data
                const response = await fetch('/data/kontak_admin.json');
                if (!response.ok) throw new Error("Failed to load admin data");
                const adminData = await response.json();
                
                const adminNumber = adminData.admin_umkm[0]?.wa;
                if (!adminNumber) throw new Error("Admin number not found");

                let message = "HALO ADMIN, SAYA INGIN MEMESAN:\n\n";
                let grandTotal = 0;

                selectedItems.forEach((item, index) => {
                    const itemTotal = item.price * item.quantity;
                    grandTotal += itemTotal;
                    
                    message += `*PRODUK ${index + 1}:*\n` +
                               `${item.name}\n` +
                               `Harga: Rp ${item.price.toLocaleString('id-ID')}\n` +
                               `Jumlah: ${item.quantity}\n` +
                               `Lokasi: ${item.location}\n` +
                               `Subtotal: Rp ${itemTotal.toLocaleString('id-ID')}\n\n`;
                });

                message += `*TOTAL PEMBELIAN: Rp ${grandTotal.toLocaleString('id-ID')}*\n\n` +
                           "Saya berminat memesan produk ini.\n" +
                           "Apakah masih tersedia?\n\n" +
                           "Terima kasih.";

                waButton.href = `https://wa.me/${adminNumber}?text=${encodeURIComponent(message)}`;
                waButtonContainer.classList.remove('hidden');

            } catch (error) {
                console.error("Error preparing WA message:", error);
                alert("Gagal mempersiapkan pesan. Silakan coba lagi.");
                waButtonContainer.classList.add('hidden');
            }
        } else {
            waButtonContainer.classList.add('hidden');
        }
    }
</script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const sortFilter = document.getElementById('sortFilter');
        const galleryItems = document.querySelectorAll('.product-item');

        function updateQueryParams() {
            const params = new URLSearchParams();

            if (searchInput.value) params.set('search', searchInput.value);
            if (categoryFilter.value) params.set('category', categoryFilter.value);
            if (sortFilter.value !== 'terbaru') params.set('sort', sortFilter.value);

            window.location.search = params.toString();
        }
        searchInput.addEventListener('change', updateQueryParams);
        categoryFilter.addEventListener('change', updateQueryParams);
        sortFilter.addEventListener('change', updateQueryParams);
    });
</script>
<script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.remove("opacity-0", "invisible");
            scrollToTopBtn.classList.add("opacity-100", "visible");
        } else {
            scrollToTopBtn.classList.add("opacity-0", "invisible");
            scrollToTopBtn.classList.remove("opacity-100", "visible");
        }
    });

    scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>

</body>

</html>
