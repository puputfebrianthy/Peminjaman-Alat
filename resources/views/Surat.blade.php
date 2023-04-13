<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Universitas Cokroaminoto Palopo</title>
    <link rel="shortcut icon" href="img/uncok.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link href="https://unpkg.com/intro.js/themes/introjs-modern.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Lato&family=Roboto:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet" />
    <style>
    #loader {
        display: none;
    }
    </style>
    <!--intro JS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>
    <!-- Google reCAPTCHA CDN -->
    <script src="https://www.google.com/recaptcha/api.js" async defer>
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: "#da373d",
                    lms: "#659093",
                },
                fontFamily: {
                    lato: "Lato",
                    inter: "Inter",
                },
                screens: {
                    mdx: {
                        max: "760px"
                    },
                    smx: {
                        max: "560px"
                    },
                    lgx: {
                        max: "1024px"
                    }

                },
            },
        },
    };
    </script>

</head>

<body class="bg-[#f7f2f0]">
    <!-- Navbar -->
    <body data-title="Welcome!" data-intro="Hello World!" class="card-demo dark:text-black text-black">

        <section style="color: red;  border-bottom:2px;" class="navbar">

            <nav class="bg-yellow-400 border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-yellow-400">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a id="home" href="#home" class="flex items-center ">
                        <img src="img/uncok.png" class="mr-3 h-6 sm:h-9" alt="Logouncok" />
                        <div class="text-white font-medium text-lg">Universitas Cokroaminoto Palopo</div>
                    </a>
                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-yellow-400 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-[659093] dark:hover:bg-yellow-400 dark:focus:ring-yellow-400"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="#ffffff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </nav>
        </section>

        <!-- Breadcrumb -->
        <div class="lg:p-2 lg:py-4 mx-8 mt-2">
            <ul class="flex items-center gap-x-4 text-xs lg:text-sm">
                <!-- NAVIGATOR HALAMAN HOME -->

                <li>
                    <a class="text-light-green" href="#">Monitoring dosen</a>
                </li>

                <li>
                    <span class="text-light-green">>></span>
                </li>

                <li>
                    <a class="text-light-green" href="#">Laporan monitoring dosen</a>
                </li>

                <li>
                    <span class="text-light-green">>></span>
                </li>

                <!-- NAVIGATOR HALAMAN COURSES -->

                <li>
                    <a class="text-yellow-400 font-semibold" href="#">Download monitoring dosen</a>
                </li>
            </ul>
        </div>

        {{-- content dashboard --}}
        <div class="px-2 mt-6 mx-10 lg:p-2 border-b-2 rounded-[10px] bg-white border-gray-300 shadow-lg w-auto ">
            <h1 class="pl-3 text-lg text-black font-semibold">MENCETAK MONITORING DOSEN</h1>
        </div>

        {{-- format --}}
        <div class=" mt-20 ml-40 mr-40 mb-10 drop-shadow-lg bg-white pt-5 items-center justify-center">
            <div class="ml-28 mr-28">
        {{-- kop surat --}}
        <div class="flex items-center justify-center">
            <div class="w-28 h-auto">
                <img class="h-auto w-auto rounded-xl" src="img/uncok.png" alt="">
            </div>
            <div class="w-auto h-auto text-center ml-10 p-1">
                <p class="font-bold text-black text-lg tracking-wide">UNIVERSITAS COKROAMINOTO PALOPO</p>
                <p class="font-bold text-black text-lg tracking-wide">PROGRAM STUDI INFORMATIKA</p>
                <p class="font-medium text-black text-xs tracking-wide">Alamat Jl.Latamacelling Lantai II Gedung A Kampus I Kota Palopo 91913</p>
                <p class="font-medium text-black text-xs tracking-wide">Telp. (0471) 326223, fax. 0471-325025. Website http://www.ftkom.uncp.ac.id. E-Mail prodiuncp@gmail.com</p>
            </div>
        </div>
        <hr class="border-[2px] border-opacity-100 border-black mt-1 mb-2">
        {{-- Tahunakademik --}}
        <div class="text-center">
            <p class="font-bold text-black text-sm tracking-wide">TAHUN AKADEMIK GENAP 2022/2023</p>
        </div>
        <br>
                {{-- mata kuliah --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Mata Kuliah</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>Pemrograman HTML </p>
                    </div>
                </div>
                {{-- tanggal--}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full font-normal">
                        <p>Hari/Tanggal</p>
                    </div>
                    <div class="w-full flex ">
                        <span class="mr-1">:</span>
                        <p>Rabu, 11 februari 2023</p>
                    </div>
                </div>
                 {{-- waktu --}}
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Jam</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>08.00</p>
                    </div>
                </div>
                {{-- jumlah sks --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>SKS</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p> 3 SKS </p>
                    </div>
                </div>
                {{-- semester --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Semester</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p> 3 </p>
                    </div>
                </div>
                {{-- kelas --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Kelas</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>3B</p>
                    </div>
                </div>
                 {{-- pokok pembahasan --}}
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Pokok Pembahasan</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>belajar dasar tentang MySQL</p>
                    </div>
                </div>
                 {{-- metode pembelajaran --}}
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Metode pembelajaran</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>Dimana mahasiswa akan membuat website sederhana dengan menggunakan
                            tailwindcss dengan membuat profile sederhana.
                        </p>
                    </div>
                </div>
                {{-- jumlah mahasiswa yang hadir --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Jumlah mahasiswa yang hadir</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>35</p>
                    </div>
                </div>
                {{-- yang tidak hadir --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Jumlah mahasiswa yang tidak hadir</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>10</p>
                    </div>
                </div>
                {{-- dosen --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                    <div class="w-full">
                        <p>Dosen</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>Vicky bin djusmin</p>
                    </div>
                </div>

                <div class="flex justify-end mt-7 mr-5">
                    <p>Palopo, 6 Oktober 2021</p>
                </div>
                {{-- Tanda Tangan --}}
                <div class="flex">
                    {{-- Tanda tangan dosen mengajar --}}
                    <div class=" text-sm text-black tracking-wide mr-[48%]">
                        <div>
                            <p>Menyetujui</p>
                            <p class="font-bold mb-[70px] mt-1 w-full">Dosen Mengajar</p>
                            <P class="font-bold">Vicky bin djusmin, S.kom.,M.Kom</P>
                            <p>NIP. <span>196501011992031003</span></p>
                        </div>
                    </div>
                    {{-- tanda tangan ketua tingkat --}}
                    <div class="text-sm text-black tracking-wide">
                        <div>
                            <p class="font-bold mb-[70px] mt-5">Ketua Tingkat</p>
                            <P class="font-bold">Puput Febrianti</P>
                            <p>NIDN. <span>0926018902</span></p>
                        </div>
                    </div>
                </div>
                <div class="flex item-center justify-center text-center mt-5">
                    {{-- Tanda tangan ketua prodi--}}
                    <div class=" text-sm text-black tracking-wide">
                        <div>
                            <p>Mengetahui,</p>
                            <p class="font-bold mb-[70px] mt-1 w-full">Ketua Prodi</p>
                            <P class="font-bold">Vicky bin djusmin,S.kom.,M.Kom</P>
                        </div>
                    </div>
                </div>
               <br>
            </div>
         </div>
    </body>
</html>
