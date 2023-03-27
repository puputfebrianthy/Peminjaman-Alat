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
    <div data-title="Welcome!" data-intro="Hello World!" class="card-demo dark:text-black text-black">

        <section style="color: red;  border-bottom:2px;" class="navbar">

            <nav class="bg-yellow-400 border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-yellow-400">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a id="home" href="#home" class="flex items-center ">
                        <img src="img/uncok.png" class="mr-3 h-6 sm:h-9" alt="Logouncok" />
                        <div class="text-white font-medium">Universitas Cokroaminoto Palopo</div>
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


                    {{-- MENU BUTTON --}}
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="#home"
                                    class=" nav-link block py-2 pr-4 pl-3 text-white hover:bg-white hover:text-black rounded-[5px]">Home</a>
                            </li>
                            <li>
                                <a href="#fasilitas"
                                    class=" nav-link block py-2 pr-4 pl-3 text-white hover:bg-white  hover:text-black rounded-[5px] ">Fasilitas</a>
                            </li>
                            <li>
                                <a href="#informasi"
                                    class=" nav-link block py-2 pr-4 pl-3 text-white  hover:bg-white  hover:text-black rounded-[5px] ">Informasi</a>
                            </li>
                            <li>
                                <a href="login"
                                    class=" nav-link block py-2 pr-4 pl-3 text-white hover:bg-white hover:text-black rounded-[5px]  ">Login</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <div class="container">
            <div class="jumbotron mx-5 mt-8 mdx:mt-1 rounded">
                <div class="row">
                    <div class="gap-40 grid lgx:grid-cols-1 md:grid-cols-2 mr-6">
                        <div class="master-img">
                            <img class="my-8 mx-8 mdx:visible md:invisible md:hidden hover:shadow-md"
                                src="img/master-img.jpg" alt="master-img">
                            <div class="mt-1 ml-10 content mdx:my-12 md:max-w-xl mdx:h-40 mdx:mb-10 rounded-lg drop-shadow-md hover:drop-shadow-xl">
                                <div class="row space-y-8">

                                    <h1 class="text-lg font-inter md:text-4xl mdx:text-4xl fadein">
                                        <span class="text-sm mdx:text-xl">HELLO THERE</span> <br> Sistem Informasi  <br> <span
                                            class="text-yellow-400">  Pelayanan </span> <span class="text-[#000000]">Peminjaman </span> <br> <span class="text-[#000000]"> Alat </span><span  class="text-yellow-400">Fakultas Teknik </span><br>
                                            <span class="text-[#000000]">  Informatika</span>

                                    </h1>
                                    <p class="mt-10 rounded-md text-gray-500 text-justify ">

                                        Fakultas <span class="text-yellow-400">Teknik</span> Informatika
                                        <br> <span class="text-yellow-400"> Universitas Cokroaminoto </span> <span class="text-gray-500">Palopo
                                        </span>
                                    </p>
                                </div>

                                <div class="mt-8 smx:space-y-5">
                                    <br>
                                    <button>
                                        <a href="dashboard" type="button"
                                            class="absolute mb-300 shadow-md w-50 text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 -mt-10 text-center inline-flex items-center">
                                            Selanjutnya
                                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                            <img class="md:visible mdx:hidden rounded-lg shadow-md hover:shadow-lg" src="img/master-img.jpg" alt="master-img">
                    </div>
                </div>

                {{-- FASILITAS --}}
                <div class="fasilitas">
                    <div class="text-center">
                        <h1 id="fasilitas" class=" my-24 text-3xl text-black font-inter smx:mt-96  smx:text-2xl ">
                            Fasilitas<br>
                            <p class="mt-10 text-base rounded-md text-gray-500 text-center ">Fasilitas yang ada di dalam sistem informasi</p>
                        </h1>
                        <div class="row lgx:max-w-xs w-100 h-30 my-5 grid lgx:grid-cols-1 lgx:inline-block lgx:mx-auto  md:grid-cols-3">
                            <div class="mx-4 my-4 ">
                                <div class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent  max-w-sm  rounded-lg  shadow-md  ">
                                    <div class="p-5 bg-[#F7F2F0] h-56">
                                        <a href="#">
                                            <h5 class="mb-2 text-lg font-bold tracking-tight text-black dark:text-black font-inter">Informasi</h5>
                                        </a>
                                        <p class="mb-3 mt-3 font-normal text-gray-700 dark:text-[659093] text-xs text-center">
                                            Informasi ketersediaan alat atau fasilitas laboratorium bagi cevitas akademika Universitas Cokroaminoto Palopo
                                        </p>
                                        <button class="m-8 mdx:visible md:hidden smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-yellow-400"
                                            type="button" data-modal-toggle="K5"> read more
                                        </button>
                                        <button class=" md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400"
                                            type="button" data-modal-toggle="K5"> read more
                                        </button>

                                        <!-- Main modal -->
                                        <div id="K5" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                    <!-- Modal header -->
                                                    <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-400 hover:bg-yellow-400">
                                                        <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]"></h3>
                                                        <p>Informasi Alat</p>
                                                        <button type="button" class="text-[659093] bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="K5">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full ">
                                                        <div class="text-justify text-base leading-relaxed text-gray-500 dark:text-[659093]">
                                                            <h1 class="text-left text-black">Deskripsi : </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- INFORMASI PEMINJAMAN ALAT --}}
                            <div class="mx-6 my-4 lgx:my-12 ">
                                <div class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md  ">
                                    <div class="p-5 bg-[#F7F2F0] h-56">
                                        <a href="#">
                                            <h5 class="mb-2 text-lg font-bold tracking-tight text-black dark:text-black font-inter">
                                                Informasi Peminjaman Alat</h5>
                                        </a>
                                        <p class="mb-3  mt-3 font-normal text-gray-700 dark:text-[659093] text-xs text-center">
                                            Informasi peminjaman alat mahasiswa fakultas teknik informatika universitas cokroaminoto palopo
                                        </p>
                                        <button class="link-lp mdx:visible md:hidden m-8 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-[#DDB07F] dark:hover:bg-yellow-400"
                                            type="button" data-modal-toggle="SMK"> read more
                                        </button>
                                        <button
                                            class="  md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DDB07F] dark:hover:bg-yellow-400"
                                            type="button" data-modal-toggle="SMK">
                                            read more
                                        </button>

                                        <!-- Main modal -->
                                        <div id="SMK" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-xl shadow dark:bg-[#f7f2f0]">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-400 hover:bg-yellow-400">
                                                        <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-[#659093]"> </h3>
                                                        <p class="font-semibold">ALUR PEMINJAMAN ALAT </p>
                                                        <button type="button"
                                                            class="text-[659093] bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="SMK">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <br>
                                                    <!-- Modal body -->
                                                    <div class=" flex justify-center font-semibold text-center">
                                                        <h1 class="text-left text-black">FLOWCHART PEMINJAMAN ALAT </h1>
                                                    </div>

                                                    <div class="grid grid-cols-2 gap-2 pl-16 py-10 sm-flex-20 ">
                                                        <p class="text-justify font-normal">Sebelum melakukan peminjaman alat pertama masuk ke halaman dashboard mahasiswa,
                                                            kemudian mengecek alat yang tersedia, lalu Mengisi form peminjaman dan
                                                            Submit. setelah selesai, masuk kehalaman laporan peminjaman alat untuk mengecek status peminjaman yang telah di ajukan

                                                        </p>
                                                        <div>
                                                            <img class="h-80 max-w-xl w-[210px] rounded-5xl" src="img/f.png" alt="Peminjaman alat">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- INFORMASI PEMINJAMAN RUANGAN --}}
                            <div class="mx-6 my-4 lgx:my-12">
                                <div
                                    class="bg-gradient-to-t to-yellow-300 from-yellow-100 hover:border-2 red:300 hover:border-transparent max-w-sm rounded-lg  shadow-md ">

                                    <div class=" p-5 bg-[#F7F2F0] h-56">
                                        <a href="#">
                                            <h5
                                                class="mb-2 text-lg font-bold tracking-tight text-black dark:text-black font-inter">
                                               Informasi Peminjaman Ruangan </h5>
                                        </a>
                                        <p
                                            class="mb-3  mt-3 font-normal text-gray-700 dark:text-[659093] text-xs text-center">
                                            Informasi peminjaman ruangan belajar prodi informatika fakultas teknik komputer universitas
                                            cokroaminoto palopo

                                        </p>
                                        <button
                                            class="mdx:visible md:hidden m-8 h-10 smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400"
                                            type="button" data-modal-toggle="UG">

                                            read more
                                        </button>
                                        <button
                                            class="  md:visible mdx:hidden md:mt-6 h-10  smx:text-xs smx:h-8 text-[10] mx-auto text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400"
                                            type="button" data-modal-toggle="UG">
                                            read more
                                        </button>


                                        <!-- Main modal -->
                                        <div id="UG" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-400 hover:bg-yellow-400">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-[#659093] ">

                                                        </h3>
                                                        <p>Informasi Peminjaman Ruangan</p>
                                                        <button type="button"
                                                            class="text-[659093] bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-toggle="UG">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div
                                                        class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-96 min-w-full">
                                                        <h1 class="text-left text-black -mb-4">Deskripsi : </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- INFORMASI --}}
                    <section class="informasi">
                        <div class="row mx-8 mb-12 ">
                            <h1 id="informasi" class="text-3xl font-inter text-center mt-12 text-[#659093] ">Sistem <br>Informasi
                            </h1>
                            <div class="flex justify-center my-5">
                                <svg class="animate-bounce" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    role="img" width="32" height="32" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 16 16">
                                    <path fill="currentColor"
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                </svg>
                            </div>
                            <div class=" mdx:w-full flex justify-center w-1/2 mx-auto mt-10 ">
                                <a href="#"
                                    class="  block p-6 max-w-sm bg-white rounded-lg  shadow-md hover:bg-gray-100 dark:bg-[#F7F2F0]  dark:hover:bg-gray-100">
                                    <p class=" mdx:text-xs font-normal text-justify  text-gray-700 dark:text-[659093]">
                                        <span class="text-[#659093]">Sistem Informasi</span> Peminjaman alat program studi informatika, fakultas teknik komputer <span class="text-[#659093]">
                                            Universitas cokroaminoto palopo.Sistem informasi ini menjadi salah satu sistem informasi yang di gunakan untuk mempermudah
                                        </span> mahasiswa maupun dosen dalam memberikan layanan  <span
                                            class="text-[#659093]">peminjaman</span> alat di ruangan prodi.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <br>
    </div>

    {{-- FOOTER --}}
    <section class="footer">
        <div class="row absolute w-full">
            <footer class="p-4 bg-yellow-400 shadow md:px-6 dark:bg-yellow-400">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="" class="flex items-center mb-4 sm:mb-0">
                       <h1 class="font-inter text-white">UNIVERSITAS COKROAMINOTO PALOPO</h1>

                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-100">

                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8" />
                <span class="block text-sm  sm:text-center text-white">© 2022
                    <a href="" class="hover:underline">Sistem Informasi™</a>. All Rights Reserved.
                </span>
            </footer>
        </div>
        </div>

        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
