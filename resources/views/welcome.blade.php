<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
		<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-black">
        {{-- Navbar Header Semnasti --}}
        <nav class="bg-black">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img id="site-logo"
                src="https://semnasti.hmtiudinus.org/landing/img/semnasti/logo-h700.png"
                data-retina="https://semnasti.hmtiudinus.org/landing/img/semnasti/logo-h700.png" class="h-8" alt="Flowbite Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white focus:ring-4 focus:outline-none focus:ring-[#E5CFF7] font-medium rounded-lg text-sm px-4 py-2 text-center bg-[#713ABE] hover:bg-[#5B0888] focus:ring-[#3E1C76]">Dapatkan Tiket</button>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-black ">
                <li>
                <a href="#" class="block py-2 px-3 md:p-0 text-white bg-[#5B0888] rounded md:bg-transparent md:text-[#713ABE]" aria-current="page">Beranda</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-3 md:p-0 rounded md:hover:text-[#713ABE] text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">Pembicara</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 md:p-0 rounded md:hover:text-[#713ABE] text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">FaQ</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-3 md:p-0 rounded md:hover:text-[#713ABE] text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">Hubungi Kami</a>
                </li>
            </ul>
            </div>
            </div>
        </nav>
        {{-- End Navbar Header Semnasti --}}
        {{-- Jumbotron --}}
        <section class="bg-black bg-[url('https://cdn.shopify.com/s/files/1/0769/7226/1715/files/pattern-png-30769.png')]">
            <div class="py-20 px-4 mx-auto max-w-screen-xl text-center lg:py-28 z-10 relative">
                <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm rounded-full bg-[#1D0D37] text-[#E5CFF7] hover:bg-[#3E1C76]">
                    <span class="text-xs bg-[#5B0888] rounded-full text-white px-4 py-1.5 me-3">Terbaru</span> <span class="text-sm font-medium">Semnasti 2024 telah hadir di kota Semarang!</span>
                </a>
                <h1 class="mb-2 text-xl font-semibold tracking-tight leading-none md:text-2xl lg:text-3xl text-white">25 April @ Semarang</h1>
                <h1 class="mb-4 text-3xl font-semibold tracking-tight leading-none md:text-4xl lg:text-5xl text-white">Seminar Nasional 2024: Artificial <br> Intelligence</h1>
                <p class="mb-8 text-lg font-normal lg:text-xl sm:px-16 lg:px-48 text-gray-200">Bergabunglah untuk acara paling dinantikan tahun ini - Seminar Nasional 2024!</p>
                <button type="button" class="focus:outline-none text-white bg-[#713ABE] hover:bg-[#5B0888] focus:ring-[#3E1C76] focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-[#5B0888] dark:focus:ring-purple-900">Daftar disini</button>
            </div>
        </section>
        {{-- End Jumbotron --}}
        {{-- Sponsorship Placement Semnasti --}}
        <section class="bg-black">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12 z-10 relative">
                <h1 class="mb-10 text-xl font-semibold tracking-tight leading-none md:text-2xl lg:text-3xl text-white">Disponsori oleh</h1>
                <div class="grid grid-cols-5 gap-4">
                    <div class="bg-white border border-gray-200 rounded-lg shadow">
                        <img class="rounded-t-lg" src="https://static.vecteezy.com/system/resources/previews/020/091/311/non_2x/sponsor-rubber-stamp-red-sponsor-rubber-grunge-stamp-seal-illustration-free-vector.jpg" alt="" />
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg shadow">
                        <img class="rounded-t-lg" src="https://static.vecteezy.com/system/resources/previews/020/091/311/non_2x/sponsor-rubber-stamp-red-sponsor-rubber-grunge-stamp-seal-illustration-free-vector.jpg" alt="" />
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg shadow">
                        <img class="rounded-t-lg" src="https://static.vecteezy.com/system/resources/previews/020/091/311/non_2x/sponsor-rubber-stamp-red-sponsor-rubber-grunge-stamp-seal-illustration-free-vector.jpg" alt="" />
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg shadow">
                        <img class="rounded-t-lg" src="https://static.vecteezy.com/system/resources/previews/020/091/311/non_2x/sponsor-rubber-stamp-red-sponsor-rubber-grunge-stamp-seal-illustration-free-vector.jpg" alt="" />
                    </div>
                    <div class="bg-white border border-gray-200 rounded-lg shadow">
                        <img class="rounded-t-lg" src="https://static.vecteezy.com/system/resources/previews/020/091/311/non_2x/sponsor-rubber-stamp-red-sponsor-rubber-grunge-stamp-seal-illustration-free-vector.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>
        {{-- End Sponsorhip Placement --}}
        <section class="bg-black bg-[url('https://www.suretiimf.com/wp-content/uploads/2020/06/pattern-background-png-4.png')]">
            <div class="py-16 px-4 mx-auto max-w-screen-xl lg:py-20 z-10 relative">
                <div class="grid grid-cols-2 gap-10">
                    <div>
                        <h1 class="mb-4 text-lg font-medium tracking-tight leading-none md:text-xl lg:text-2xl text-purple-500">Tentang Semnasti</h1>
                        <h1 class="mb-4 text-xl font-semibold tracking-tight leading-none md:text-2xl lg:text-3xl text-white">Kenapa kita harus hadir?</h1>
                        <p class="mb-10 text-lg font-normal lg:text-xl text-gray-200">Selamat datang di Seminar Nasional 2024: Artificial Intelligence! Baik Anda seorang mahasiswa, seorang developer yang ingin tahu, atau seorang pemimpin bisnis yang ingin memngetahui kecerdasan buatan yang dapat di terapkan pada perusahaan anda, ikutlah Semnasti 2024 karena seminar ini dirancang untuk memberikan pengetahuan persiapan untuk masa depan, pemahaman yang lebih mendalam, dan pengembangan keterampilan.</p>
                    </div>
                    <div>
                        <ol class="relative border-s border-purple-400 dark:border-purple-600">
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-black dark:bg-purple-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Presale #1</h3>
                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Daftarkan dirimu untuk presale #1 untuk mendapatkan harga yang lebih tejangkau</p>
                            </li>
                            <li class="mb-10 ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-black dark:bg-purple-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Reguler</h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Yah sayang sekali kalian terlewat untuk presale akan tetapi jangan khawatir karena kalian masih dapat mendaftar dengan harga normal</p>
                            </li>
                            <li class="ms-4">
                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-black dark:bg-purple-500"></div>
                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Mei 2022</time>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Semnasti 2024</h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Hari penyelengaraan Seminar Nasional yang kalian nanti-nantikan</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-black ">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-12 z-10 relative">
                <h1 class="mb-4 text-xl font-bold text-center tracking-tight leading-none md:text-2xl lg:text-3xl text-white">Daftar Harga</h1>
                <div class="flex flex-col items-center justify-center  space-y-[5rem] lg:flex-row lg:items-stretch lg:space-x-[5rem] lg:space-y-0" x-show="kategory" x-transition:enter="transition ease-out duration-900" x-transition:enter-start="opacity-0 scale-0" x-transition:enter-end="opacity-100 scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-100">
                    <div class="flex flex-col w-300 max-w-sm p-12 space-y-6 bg-white bg-opacity-[5%] text-white rounded-[50px] drop-shadow-pinkShadow transform translate-y-4 hover:translate-y-0 duration-500 ease-in-out">
                        <!-- Stage -->
                        <div class="flex flex-row items-center justify-center gap-2 pb-2 text-3xl font-normal text-center border-b">
                            <div class="flex text-4xl font-bold">
                                <span>1</span>
                                <span class="text-xl font-bold">st</span>
                            </div>
                            <div class="text-3xl font-bold">Presale</div>
                        </div>
                        <!-- Price -->
                        <div class="flex-shrink-0 text-center">
                            <span class="text-2xl font-extrabold tracking-tight text-transparent bg-gradient-to-r from-purple-600 to-purple-400 bg-clip-text ">Rp. 30.000</span>
                        </div>
                    </div>

                    <div class="flex flex-col w-300 max-w-sm p-12 space-y-6 bg-white bg-opacity-[5%] text-white rounded-[50px] drop-shadow-pinkShadow transform translate-y-4 hover:translate-y-0 duration-500 ease-in-out">
                        <!-- Stage -->
                        <div class="flex flex-row items-center justify-center gap-2 pb-2 text-3xl font-normal text-center border-b">
                            <div class="flex text-4xl font-bold">
                                <span>2</span>
                                <span class="text-xl font-bold">nd</span>
                            </div>
                            <div class="text-3xl font-bold">Presale</div>
                        </div>
                        <!-- Price -->
                        <div class="flex-shrink-0 text-center">
                            <span class="text-2xl font-extrabold tracking-tight text-transparent bg-gradient-to-r from-purple-600 to-purple-400 bg-clip-text ">Rp. 50.000</span>
                        </div>
                    </div>
                    <div class="flex flex-col w-300 max-w-sm p-12 space-y-6 bg-white bg-opacity-[5%] text-white rounded-[50px] drop-shadow-pinkShadow transform translate-y-4 hover:translate-y-0 duration-500 ease-in-out">
                        <!-- Stage -->
                        <div class="flex flex-row items-center justify-center gap-2 pb-2 text-3xl font-normal text-center border-b">
                            <div class="text-3xl font-bold">Reguler</div>
                        </div>
                        <!-- Price -->
                        <div class="flex-shrink-0 text-center">
                            <span class="text-2xl font-extrabold tracking-tight text-transparent bg-gradient-to-r from-purple-600 to-purple-400 bg-clip-text ">Rp. 70.000</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="bg-black ">
            <div class="py-16 px-4 mx-auto max-w-screen-xl lg:py-20 z-10 relative">
                <h1 class="mb-2 text-xl text-center font-semibold tracking-tight leading-none md:text-2xl lg:text-3xl text-white">Pembicara</h1>
                <h1 class="mb-4 text-sm text-center font-normal tracking-tight leading-none md:text-md lg:text-lg text-gray-400">Belajar bersama ahli yang berpengalaman</h1>
                <div class="grid grid-cols-3 gap-10">


                    <div class="w-full max-w-sm rounded-lg shadow">
                        <div class="flex flex-col items-center py-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://randomuser.me/api/portraits/lego/1.jpg" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Secret</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Secret</span>
                            <div class="flex mt-4 md:mt-6">
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                    </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                                    </svg>
                                <span class="sr-only">Discord community</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-sm rounded-lg shadow">
                        <div class="flex flex-col items-center py-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://randomuser.me/api/portraits/lego/1.jpg" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Secret</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Secret</span>
                            <div class="flex mt-4 md:mt-6">
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                    </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                                    </svg>
                                <span class="sr-only">Discord community</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-sm rounded-lg shadow">
                        <div class="flex flex-col items-center py-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://randomuser.me/api/portraits/lego/1.jpg" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Secret</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Secret</span>
                            <div class="flex mt-4 md:mt-6">
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                    </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                                    </svg>
                                <span class="sr-only">Discord community</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="bg-black">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12 z-10 relative">
                <h1 class="mb-10 text-xl font-semibold tracking-tight leading-none md:text-2xl lg:text-3xl text-white">Media Partner</h1>
                    <div x-data="{}" x-init="$nextTick(() => {
                        let ul = $refs.logos;
                        ul.insertAdjacentHTML('afterend', ul.outerHTML);
                        ul.nextSibling.setAttribute('aria-hidden', 'true');
                    })" class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                        <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&amp;_li]:mx-8 [&amp;_img]:max-w-none animate-infinite-scroll">
                            <li class="p-3 px-10 mx-5 bg-white rounded-xl">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAADGCAMAAAAqo6adAAAACVBMVEX///9/rff///yOlBTYAAABgUlEQVR4nO3PMQEAMAyAsG7+RVdGjhIFMO/Paf3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWAd/1+uqwJT58ldTAAAAABJRU5ErkJggg==" class="w-10 md:w-20">
                            </li>
                            <li class="p-3 px-10 mx-5 bg-white rounded-xl">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEBAPDxAQDw8PEA8PDw8PDw8PDw8PFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NDw0PDysZFRkrKzcrLSsrKy03LSsrLTcrLTcrLSsuNy03KysrKysrKysrLSsrKystKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQIH/8QAIRABAQEAAQQBBQAAAAAAAAAAAAERAiExQWFxElGhsfD/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDilClGFSEBVQpBDAKCYCCqv1MrACJYoKJaApiUAClAsEXQCqUEBeUgIqQEMFQVqpSlECIsFORF1BAAGVkRqcs330FS/gguAlgUBaXsVNBcEICpQAiKWAUxUAoAAmrAMAEUpqaKYsiNQRlYUFRcNARFAAAWJigJRamALnlDQKqABhoC1FtSgAAYKAyoAtRQEilSAomrAWJQETQBQgAuiFBdSgAYKCKi0ESLAF1IqAVFqAsEa4+f7aCACFF3x47oKLGWpBEaggGBoCUwNFMMKgNQQoNISoAsqEBai2AIGgGGgBEFAAAwXfX7QC0AEa0NAABKqKCGhQE0ACi4BDFhoIQWAaVMMEE1cTBVDACoqAsAgAABQABAaiACxNWoAkUAEAa4wtZUAFl+PIIsZXQWoVKCwIACUgAAKBxmgYGAFNACIqAsAgLRABFgAigIoQAVAFTFkAShQTBYAiigyLUAVFBMUwAAARdQGuPHvZ4zfWoQBUtKgGhQBUAUDQXjfW9M+PaQ0AAA0CwEVKAq6gCC1AVFICYKACoAAABoKlpqAAAAAKAARKCkAFMARBNUVCKlBUMUAADBUARrEBUWRKAlasSgQIoMigJRQDjSJFAwNNAwAClMUGRUBbDC9QARQCEAABAVBV1FTQMVAGpUtEAn3EXQEWoBGtZUAntAF0QgLoAALKCUoUBKqAsUQDAAVFpgIKgAKAgaCKgCgABDQAACFW8bPHcEFQAEBSlQFQICwAFxAEWwEFBUtBdQABAAoAqKgAAKYQoCoAqABUW1AFCgakVKCosARTAFpEBBFBUWACAAKAERQEUAL3SgCgAIoCLQAhQBAAI1xQBsAH//2Q==" class="w-10 md:w-20">
                            </li>
                            <li class="p-3 px-10 mx-5 bg-white rounded-xl">
                                <img src="https://htmlcolorcodes.com/assets/images/colors/bright-green-color-solid-background-1920x1080.png" class="w-10 md:w-20">
                            </li>
                        </ul>
                        <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&amp;_li]:mx-8 [&amp;_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
                            <li class="p-3 px-10 mx-5 bg-white rounded-xl">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP8AAADGCAMAAAAqo6adAAAACVBMVEX///9/rff///yOlBTYAAABgUlEQVR4nO3PMQEAMAyAsG7+RVdGjhIFMO/Paf3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWD1rwus/nWB1b8usPrXBVb/usDqXxdY/esCq39dYPWvC6z+dYHVvy6w+tcFVv+6wOpfF1j96wKrf11g9a8LrP51gdW/LrD61wVW/7rA6l8XWP3rAqt/XWAd/1+uqwJT58ldTAAAAABJRU5ErkJggg==" class="w-10 md:w-20">
                            </li>
                            <li class="p-3 px-10 mx-5 bg-white rounded-xl">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEBAPDxAQDw8PEA8PDw8PDw8PDw8PFREWFhURFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDQ0NDw0PDysZFRkrKzcrLSsrKy03LSsrLTcrLTcrLSsuNy03KysrKysrKysrLSsrKystKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQIH/8QAIRABAQEAAQQBBQAAAAAAAAAAAAERAiExQWFxElGhsfD/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwDilClGFSEBVQpBDAKCYCCqv1MrACJYoKJaApiUAClAsEXQCqUEBeUgIqQEMFQVqpSlECIsFORF1BAAGVkRqcs330FS/gguAlgUBaXsVNBcEICpQAiKWAUxUAoAAmrAMAEUpqaKYsiNQRlYUFRcNARFAAAWJigJRamALnlDQKqABhoC1FtSgAAYKAyoAtRQEilSAomrAWJQETQBQgAuiFBdSgAYKCKi0ESLAF1IqAVFqAsEa4+f7aCACFF3x47oKLGWpBEaggGBoCUwNFMMKgNQQoNISoAsqEBai2AIGgGGgBEFAAAwXfX7QC0AEa0NAABKqKCGhQE0ACi4BDFhoIQWAaVMMEE1cTBVDACoqAsAgAABQABAaiACxNWoAkUAEAa4wtZUAFl+PIIsZXQWoVKCwIACUgAAKBxmgYGAFNACIqAsAgLRABFgAigIoQAVAFTFkAShQTBYAiigyLUAVFBMUwAAARdQGuPHvZ4zfWoQBUtKgGhQBUAUDQXjfW9M+PaQ0AAA0CwEVKAq6gCC1AVFICYKACoAAABoKlpqAAAAAKAARKCkAFMARBNUVCKlBUMUAADBUARrEBUWRKAlasSgQIoMigJRQDjSJFAwNNAwAClMUGRUBbDC9QARQCEAABAVBV1FTQMVAGpUtEAn3EXQEWoBGtZUAntAF0QgLoAALKCUoUBKqAsUQDAAVFpgIKgAKAgaCKgCgABDQAACFW8bPHcEFQAEBSlQFQICwAFxAEWwEFBUtBdQABAAoAqKgAAKYQoCoAqABUW1AFCgakVKCosARTAFpEBBFBUWACAAKAERQEUAL3SgCgAIoCLQAhQBAAI1xQBsAH//2Q==" class="w-10 md:w-20">
                            </li>
                            <li class="p-3 px-10 mx-5 bg-white rounded-xl">
                                <img src="https://htmlcolorcodes.com/assets/images/colors/bright-green-color-solid-background-1920x1080.png" class="w-10 md:w-20">
                            </li>
                        </ul>
                    </div>

            </div>
        </section>
        <section class="bg-black">
            <div class="py-8 px-4 mx-auto max-w-screen-xl  lg:py-12 z-10 relative">
                <h1 class="mb-10 text-xl text-center font-semibold tracking-tight leading-none md:text-2xl lg:text-3xl text-white">Pertanyaan yang sering ditanyakan</h1>
                <div class="container w-11/12 mx-auto lg:w-3/4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <div x-data="{ expanded: false }" class=" bg-white bg-opacity-[5%] py-8 px-9 mb-7 rounded">
                                <h2>
                                    <button id="faqs-title-01" type="button" class="flex items-center justify-between w-full py-2 text-lg font-medium text-left text-white" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01" aria-expanded="false">
                                        <span class="font-bold">Apa Tema Utama Yang Akan Dibahas Dalam Acara Ini? </span>
                                        <svg class="ml-8 fill-current shrink-0" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform" :class="{ '!rotate-180': expanded }"></rect>
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform rotate-90" :class="{ '!rotate-180': expanded }"></rect>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid overflow-hidden text-sm transition-all duration-300 ease-in-out text-slate-100 grid-rows-[0fr] opacity-0" :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden">
                                        <p class="pb-3 text-white lg:text-lg">
                                            Tema utama acara ini adalah "Artificial Intelligence In The Era of Digital Transformation", di mana kami akan mengeksplorasi peran AI dalam transformasi digital dan keamanan cyber.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ expanded: false }" class=" bg-white bg-opacity-[5%] py-8 px-9 mb-7 rounded">
                                <h2>
                                    <button id="faqs-title-01" type="button" class="flex items-center justify-between w-full py-2 text-lg font-medium text-left text-white" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01" aria-expanded="false">
                                        <span class="font-bold">Siapa Saja Pembicara Atau Ahli Yang Akan Hadir Dalam Acara Tersebut? </span>
                                        <svg class="ml-8 fill-current shrink-0" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform" :class="{ '!rotate-180': expanded }"></rect>
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform rotate-90" :class="{ '!rotate-180': expanded }"></rect>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid overflow-hidden text-sm transition-all duration-300 ease-in-out text-slate-100 grid-rows-[0fr] opacity-0" :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden">
                                        <p class="pb-3 text-white lg:text-lg">
                                            Pembicara terdiri dari pakar industri dan praktisi terkemuka dalam bidang kecerdasan buatan dan keamanan cyber, yang akan membawakan wawasan dan pengalaman mereka kepada peserta.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ expanded: false }" class=" bg-white bg-opacity-[5%] py-8 px-9 mb-7 rounded">
                                <h2>
                                    <button id="faqs-title-01" type="button" class="flex items-center justify-between w-full py-2 text-lg font-medium text-left text-white" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01" aria-expanded="false">
                                        <span class="font-bold">Apa Manfaat Atau Keuntungan Yang Bisa Saya Dapatkan Dengan Mengikuti Acara Ini?</span>
                                        <svg class="ml-8 fill-current shrink-0" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform" :class="{ '!rotate-180': expanded }"></rect>
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform rotate-90" :class="{ '!rotate-180': expanded }"></rect>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid overflow-hidden text-sm transition-all duration-300 ease-in-out text-slate-100 grid-rows-[0fr] opacity-0" :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden">
                                        <p class="pb-3 text-white lg:text-lg">
                                            Anda akan mendapatkan pemahaman mendalam tentang bagaimana AI memengaruhi transformasi digital dan keamanan cyber, serta berbagai praktik terbaik dalam mengintegrasikan AI dalam strategi keamanan cyber.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div x-data="{ expanded: false }" class=" bg-white bg-opacity-[5%] py-8 px-9 mb-7 rounded">
                                <h2>
                                    <button id="faqs-title-01" type="button" class="flex items-center justify-between w-full py-2 text-lg font-medium text-left text-white" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01" aria-expanded="false">
                                        <span class="font-bold">Apakah Ada Biaya Pendaftaran Untuk Mengikuti Acara Ini? Jika Ya, Berapa Biayanya Dan Apa Yang Termasuk Dalam Biaya Tersebut?</span>
                                        <svg class="ml-8 fill-current shrink-0" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform" :class="{ '!rotate-180': expanded }"></rect>
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform rotate-90" :class="{ '!rotate-180': expanded }"></rect>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid overflow-hidden text-sm transition-all duration-300 ease-in-out text-slate-100 grid-rows-[0fr] opacity-0" :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden">
                                        <p class="pb-3 text-white lg:text-lg">
                                            Ya, ada biaya pendaftaran untuk mengikuti acara ini. Biaya pendaftaran akan mencakup akses ke semua sesi acara serta materi acara yang relevan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ expanded: false }" class=" bg-white bg-opacity-[5%] py-8 px-9 mb-7 rounded">
                                <h2>
                                    <button id="faqs-title-01" type="button" class="flex items-center justify-between w-full py-2 text-lg font-medium text-left text-white" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01" aria-expanded="false">
                                        <span class="font-bold">Bagaimana Saya Bisa Mendaftar Untuk Acara Ini? Apakah Ada Formulir Pendaftaran Online Atau Proses Pendaftaran Lainnya?</span>
                                        <svg class="ml-8 fill-current shrink-0" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform" :class="{ '!rotate-180': expanded }"></rect>
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform rotate-90" :class="{ '!rotate-180': expanded }"></rect>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid overflow-hidden text-sm transition-all duration-300 ease-in-out text-slate-100 grid-rows-[0fr] opacity-0" :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden">
                                        <p class="pb-3 text-white lg:text-lg">
                                            Anda dapat mendaftar secara online melalui formulir pendaftaran yang tersedia di situs web kami atau menghubungi panitia acara untuk panduan lebih lanjut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{ expanded: false }" class=" bg-white bg-opacity-[5%] py-8 px-9 mb-7 rounded">
                                <h2>
                                    <button id="faqs-title-01" type="button" class="flex items-center justify-between w-full py-2 text-lg font-medium text-left text-white" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01" aria-expanded="false">
                                        <span class="font-bold">Apakah Ada Persyaratan Khusus Yang Perlu Dipenuhi Untuk Menjadi Peserta Acara Ini?</span>
                                        <svg class="ml-8 fill-current shrink-0" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform" :class="{ '!rotate-180': expanded }"></rect>
                                            <rect y="7" width="16" height="2" rx="1" class="transition duration-200 ease-out origin-center transform rotate-90" :class="{ '!rotate-180': expanded }"></rect>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid overflow-hidden text-sm transition-all duration-300 ease-in-out text-slate-100 grid-rows-[0fr] opacity-0" :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden">
                                        <p class="pb-3 text-white lg:text-lg">
                                            Tidak ada persyaratan khusus yang diperlukan, namun disarankan untuk memiliki pemahaman dasar tentang kecerdasan buatan dan keamanan cyber.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <footer class="bg-black">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="grid grid-cols-2 gap-8">
                    <div class="mb-6 md:mb-0">
                        <a href="" class="flex items-center">
                            <img src="https://semnasti.hmtiudinus.org/landing/img/semnasti/logo-h700.png"
                            data-retina="https://semnasti.hmtiudinus.org/landing/img/semnasti/logo-h700.png" class="h-8 me-3" alt="FlowBite Logo" />
                        </a>
                        <p class="flex items-center mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Kami selalu terbuka dan menyambut pertanyaan Anda untuk tim kami. Jika Anda ingin menghubungi, silakan isi formulir di bawah ini. Seseorang dari tim kami akan mendapatkannya segera kembali kepadamu</p>
                    </div>
                    <div>
                        <ul class="mb-6 md:mb-0">
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Alamat Kami
                                    </h3>
                                    <p class="text-gray-600 dark:text-slate-400">Jl. Sadewa 2 No.8, Pendrikan Kidul, Kec. Semarang Tengah</p>
                                    <p class="text-gray-600 dark:text-slate-400">Kota Semarang, Jawa Tengah 50131</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-6 w-6">
                                        <path
                                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                        </path>
                                        <path d="M15 7a2 2 0 0 1 2 2"></path>
                                        <path d="M15 3a6 6 0 0 1 6 6"></path>
                                    </svg>
                                </div>
                                <div class="ml-4 mb-4">
                                    <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Kontak
                                    </h3>
                                    <p class="text-gray-600 dark:text-slate-400">Mobile: +62 826-3172-537-1243</p>
                                    <p class="text-gray-600 dark:text-slate-400">Mail: semnasti@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="" class="hover:underline">Semnasti 2024™</a>. All Rights Reserved.
                    </span>
                </div>
            </div>
        </footer>

    </body>
</html>
