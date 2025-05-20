@include('partials.navbar')
    <div class="container mx-auto px-4 font-[Open Sans]">
        <div class="relative mt-5 ml-2 md:ml-4 lg:ml-30 ">
            <!-- Page Heading -->
            <div class="flex flex-col sm:flex-row items-center justify-between mb-4">
            <p class="text-gray-800">Produk &gt; <span class="font-bold">Kuliner</span></p>
            </div>
        </div>

        {{-- Content --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 ml-2 md:ml-4 lg:ml-30 mt-6">
            @for ($i = 0; $i < 9; $i++)
            <div class="relative w-[278px] h-[195px] bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                <!-- Icon 'i'  -->
                <a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="flex items-center justify-center bg-white rounded-full w-3 h-2 mt-2 absolute top-2 right-2 text-black hover:text-orange-500">
                    <i class="fa-solid fa-info-circle text-sm"></i>
                </a>
                
                <!-- Main modal -->
                <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-sm ">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-orange-500 border-orange">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-black">
                                    Informasi
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 no-space-y font-[Open Sans] w-clamp[(2rem,5vw,2rem)] text-justify">
                                <p class="text-base leading-relaxed text-black">
                                    Lakse Kuah
                                    <p class="text-black text-[clamp(0.9rem, 1.5vw, 1rem)]">Cita rasa semangkuk lakse berkuah santan rempah yang gurih dan lezat. <br> 
                                    Terbuat dari mie lakse berbahan sagu pilihan dan dipadukan dengan ikan segar, lakse ini cocok dinikmati kapan saja. Nikmati kehangatan tradisi dalam setiap suapan!</p>
                                </p>
                                <p class="text-base leading-relaxed text-black font-bold mt-8">
                                    Cara memesan
                                </p>
                            </div>
                            <!-- Modal footer -->
                            
                        </div>
                    </div>
                </div>
  
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
        
                <!-- Icon WhatsApp  -->
                <a href="" class="absolute bottom-2 right-2 text-black hover:text-green-600">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                </a>
            </div>
            @endfor
        </div>
    </div>
  

@include('partials.footer')