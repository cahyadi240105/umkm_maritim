<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKM - Maritim | {{ $title }}</title>
    <link rel="icon" href="{{ asset('images/logo-1.png') }}" type="png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Import Google Fonts: Poppins dan Open Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    {{-- Import Icon Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<style>
    @media (max-width: 768px) {
        .products-section {
            height: auto;
        }

        .product-item {
            position: static;
            margin-bottom: 2rem;
        }

        .product-item img,
        .product-item p {
            position: static;
            width: 100% !important;
            max-width: none !important;
        }
    }

    @media (max-width: 768px) {
        .products-section {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .product-item {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            height: auto;
            position: relative;
        }

        .product-item img {
            position: static;
            /* Menghapus absolute positioning */
            width: 100%;
            max-width: 100%;
            height: 200px;
            border-radius: 20px;
        }

        .product-item p {
            position: static;
            /* Menghapus absolute positioning */
            width: 100%;
        }

        .product-item p.font-bold {
            font-size: 1.25rem;
        }

        .product-item p.text-base {
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .products-section h1 {
            font-size: 1.75rem;
        }

        .product-item img {
            height: 150px;
        }

        .product-item p.font-bold {
            font-size: 1.125rem;
        }

        .product-item p.text-base {
            font-size: 0.875rem;
        }
    }

    .card {
        position: relative;
        max-width: 300px;
        width: 100%;
        height: 240px;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .card a.wa-link {
        pointer-events: auto;
        cursor: pointer;
        z-index: 10;
    }

    .card img {
        width: 100%;
        height: 120px;
        object-fit: cover;
    }

    .error,
    .success {
        margin: 1rem;
        padding: 1rem;
        border-radius: 0.25rem;
    }

    .error {
        color: #dc2626;
        background: #fee2e2;
    }

    .success {
        color: #15803d;
        background: #dcfce7;
    }

    /* Styling untuk modal */
    .modal-content {
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        border-bottom: 1px solid #f97316;
    }
</style>

<body style="color : #F4F6FF">
    <nav class="bg-sky-950 border-b border-gray-200 shadow font-['Poppins'] w-full">
        <div class=" flex flex-wrap items-center justify-between mx-10 py-5">

            <!-- Logo -->
            <a href="/homepage" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo-1.png') }}" class="h-14 ml-2" alt="Logo" />
            </a>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle" data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Navbar Menu -->
            <div class="hidden w-full md:block md:w-auto text-xl" id="navbar-default">
                <ul
                    class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-6 mt-4 md:mt-0 text-white font-medium text-sm px-4 md:px-0">
                    <li>
                        <a href="/homepage"
                            class="{{ $title === 'homepage' ? 'font-bold' : 'font-medium' }} hover:text-yellow-400">Beranda</a>
                    </li>

                    <!-- Dropdown Produk -->
                    <li class="relative">
                        <button id="dropdownProdukButton" data-dropdown-toggle="dropdownProduk"
                            class="inline-flex items-center hover:text-yellow-400 {{ $title === 'Produk' ? 'font-bold' : 'font-medium' }}">
                            Produk
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="dropdownProduk"
                            class="hidden absolute z-10 bg-sky-950 divide-y divide-gray-100 rounded-lg shadow-md w-44 mt-2">
                            <ul class="py-2 text-sm text-white">
                                <li><a href="/kuliner"
                                        class="block px-4 py-2 hover:bg-white text-yellow-400 hover:text-yellow-400 bg-transparent">Kuliner</a>
                                </li>
                                <li><a href="/hasillaut"
                                        class="block px-4 py-2 hover:bg-white text-yellow-400 hover:text-yellow-400 bg-transparent">Hasil
                                        Laut</a></li>
                                <li><a href="/aksesoris"
                                        class="block px-4 py-2 hover:bg-white text-yellow-400 hover:text-yellow-400 bg-transparent">Aksesoris</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="/galeri"
                            class="{{ $title === 'Galeri' ? 'font-bold' : 'font-medium' }} hover:text-yellow-400">Galeri</a>
                    </li>
                    <li>
                        <a href="/tentangkami"
                            class="{{ $title === 'Tentang Kami' ? 'font-bold' : 'font-medium' }} hover:text-yellow-400">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="/kontak"
                            class="{{ $title === 'Kontak Kami' ? 'font-bold' : 'font-medium' }} hover:text-yellow-400">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
