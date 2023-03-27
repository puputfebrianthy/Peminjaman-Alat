<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DataTable</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./CSS/UploafField.css"> -->


    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" /> -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ["Montserrat"],
                    },
                    colors: {
                        "dark-green": "#1E3F41",
                        "light-green": "#659093",
                        "cream": "#DDB07F",
                        "cgray": "#F5F5F5",
                    }
                }
            }
        }
    </script>

        </head>

    <body>
        <div class="responsive-top sticky top-0 z-30 bg-yellow-400 p-5 sm:hidden">
            <div class="flex justify-center bg-white p-2 rounded-lg">
                Data tabel
            </div>
            <div class="container flex-column justify-between mt-4 mb-4 hidden">
                <img class="w-[300px] Logo_uncp" src="img/uncp.png" alt="Logo Universitas Cokroaminoto Palopo">
                <img src="img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer" id="btnToggle">
            </div>
        </div>

        @include('components.sidebar')

            <!-- Header / Profile -->
            <div class=" w-full h-screen flex-auto flex-col gap-y-4 bg-slate-100 overflow-y-scroll">

                <div class="bg-white p-4 w-full flex-row flex">
                    <img src="img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer mr-auto" id="btnToggle2">

                    <div class="items-center gap-x-2 justify-end hidden sm:flex">
                        <img class="w-7" src="img/icons/default_profile.svg" alt="Profile Image">
                        <p class="text-black font-semibold">PUPUT FEBRIANTI</p>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="lg:p-2 lg:py-4 mx-8 mt-2">
                    <ul class="flex items-center gap-x-4 text-xs lg:text-sm">
                        <!-- NAVIGATOR HALAMAN HOME -->

                        <li>
                            <a class="text-light-green" href="#">Dashboard</a>
                        </li>

                        <li>
                            <span class="text-light-green">>></span>
                        </li>

                        <li>
                            <a class="text-light-green" href="#">Data peminjam</a>
                        </li>

                        <li>
                            <span class="text-light-green">>></span>
                        </li>

                        <!-- NAVIGATOR HALAMAN COURSES -->

                        <li>
                            <a class="text-dark-green font-semibold" href="#">Ketersediaan alat</a>
                        </li>
                    </ul>
                </div>


                {{-- content dashboard --}}
                <div class="px-2 mt-6 mx-10 lg:p-2 border-b-2 rounded-[10px] bg-white border-gray-300 shadow-md w-auto ">

                    <h1 class="pl-3 text-lg text-black font-semibold">KETERSEDIAAN ALAT</h1>
                </div>
                <div class="container p-10 pb-8 md:px-8 lg:px-11">
                    <div class="relative overflow-x-auto bg-white shadow-md rounded-[3px]">
                        <div class="w-full flex">
                            <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                                    <table class="pt-4 divide-y divide-slate-900" id="dataTable">
                                        <thead class="bg-gray-100">
                                    <tr>
                                                <th class="p-2 text-xs text-gray-500">
                                                    Nama Alat
                                                </th>
                                                <th class="p-2 text-xs text-gray-500">
                                                    Jumlah Alat
                                                </th>
                                                <th class="p-2 text-xs text-gray-500">
                                                    Keterangan
                                                </th>
                                            </tr>
                                        </thead>

                                        {{--HDMI--}}
                                                <tr class="whitespace-nowrap ">
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-center">
                                                        <div class="text-sm text-gray-900">
                                                        <p>HDMI (High Definition Multimedia Interface) </p>
                                                        </div>
                                                    </td>
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-center">
                                                       <p>12</p>
                                                    </td>

                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-sm text-center text-gray-500">
                                                        <button
                                                            class=" md:visible mdx:hidden md:mt-2 h-6 smx:text-xs smx:h-2 text-[10] mx-auto text-white bg-yellow-500 hover:bg-yellow-500
                                                            focus:ring-4 focus:outline-none font-medium rounded-[3px] text-sm px-4 text-center dark:bg-yellow-500 dark:hover:bg-yellow-500"
                                                            type="button" data-modal-toggle="HDMI">
                                                            aksi
                                                        </button>
                                                    </td>

                                                <!-- Main modal -->
                                                <div id="HDMI" tabindex="-1" aria-hidden="true"
                                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                            <!-- Modal header -->
                                                            <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-400 hover:bg-yellow-400">
                                                                <p class="font-semibold text-white">HDMI (High Definition Multimedia Interface)</p>

                                                                <button type="button"
                                                                    class="text-[659093] bg-transparent hover:bg-white text-white hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                                    data-modal-toggle="HDMI">
                                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-54 min-w-full ">
                                                                <div class="grid grid-cols-2 gap-2 pl-5 py-5 sm-flex-10 ">
                                                                    <div>
                                                                        <img class="h-56 max-w-xl w-[240px] rounded-2xl" src="img/HDMI.jpg" alt="HDMI">
                                                                    </div>
                                                                    <p class="text-justify font-normal">HDMI atau High Definition Multimedia Interface.
                                                                    Fungsi kabel HDMI adalah melewatkan sinyal audio dan video berkualitas tinggi.Teknologi HDMI digunakan dengan perangkat seperti Proyektor dengan mempermuda hanya
                                                                    menggunakan satu kabel untuk audio dan video tanpa mengorbankan kualitas sinyal.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                        </div>
                                                    </div>
                                                </div>
                                                </tr>
                                                {{-- END --}}

                                                {{-- LCD --}}
                                                <tr class="whitespace-nowrap ">
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-center">
                                                        <div class="text-sm text-gray-900">
                                                        <p>LCD (liquid crystal display)</p>
                                                        </div>
                                                    </td>
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-center">
                                                       <p>12</p>
                                                    </td>

                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-sm text-center text-gray-500">
                                                        <button
                                                            class=" md:visible mdx:hidden md:mt-2 h-6 smx:text-xs smx:h-2 text-[10] mx-auto text-white bg-yellow-500 hover:bg-yellow-500
                                                            focus:ring-4 focus:outline-none font-medium rounded-[3px] text-sm px-4 text-center dark:bg-yellow-500 dark:hover:bg-yellow-500"
                                                            type="button" data-modal-toggle="LCD">
                                                            aksi
                                                        </button>
                                                    </td>

                                                <!-- Main modal -->
                                                <div id="LCD" tabindex="-1" aria-hidden="true"
                                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                            <!-- Modal header -->
                                                            <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-400 hover:bg-yellow-400">
                                                                <p class="font-semibold text-white">LCD (liquid crystal display)</p>

                                                                <button type="button"
                                                                    class="text-[659093] bg-transparent hover:bg-white text-white hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                                    data-modal-toggle="LCD">
                                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-54 min-w-full ">
                                                                <div class="grid grid-cols-2 gap-2 pl-5 py-5 sm-flex-10 ">
                                                                    <div>
                                                                        <img class="h-56 max-w-xl w-[240px] rounded-2xl" src="img/LCD.jpg" alt="Logo Universitas Cokroaminoto Palopo">
                                                                    </div>
                                                                    <p class="text-justify font-normal">LCD atau Liquid Crystal Display adalah layar yang menggunakan susunan kristal cair dengan diterangi oleh lampu latar
                                                                        untuk menghasilkan gambar. Pada dasarnya, perangkat elektronik seperti laptop dan ponsel yang memakai layar LCD memiliki
                                                                        tampilan gambar serta keakuratan warna yang cukup baik.

                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                        </div>
                                                    </div>
                                                </div>

                                            {{-- END --}}

                                            {{-- STOP KONTAK --}}
                                                <tr class="whitespace-nowrap ">
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-center">
                                                        <div class="text-sm text-gray-900">
                                                        <p>Stop kontak </p>
                                                        </div>
                                                    </td>
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-center">
                                                       <p>12</p>
                                                    </td>

                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-2 py-2 text-sm text-center text-gray-500">
                                                        <button
                                                            class=" md:visible mdx:hidden md:mt-2 h-6 smx:text-xs smx:h-2 text-[10] mx-auto text-white bg-yellow-500 hover:bg-yellow-500
                                                            focus:ring-4 focus:outline-none font-medium rounded-[3px] text-sm px-4 text-center dark:bg-yellow-500 dark:hover:bg-yellow-500"
                                                            type="button" data-modal-toggle="STOP">
                                                            aksi
                                                        </button>
                                                    </td>

                                                <!-- Main modal -->
                                                <div id="STOP" tabindex="-1" aria-hidden="true"
                                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                            <!-- Modal header -->
                                                            <div
                                                                class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-500 hover:bg-yellow-500">
                                                                <p class="font-semibold text-white">STOP KONTAK</p>

                                                                <button type="button"
                                                                    class="text-[659093] bg-transparent hover:bg-white text-white hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                                    data-modal-toggle="STOP">
                                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-54 min-w-full ">
                                                                <div class="grid grid-cols-2 gap-2 pl-5 py-5 sm-flex-10 ">
                                                                    <div>
                                                                        <img class="h-56 max-w-xl w-[240px] rounded-2xl" src="img/stopkontak.jpg" alt="stop kontak">
                                                                    </div>
                                                                    <p class="text-justify font-normal">Stop kontak sendiri adalah sebuah terminal yang berfungsi untuk menghubungkan jalur listrik utama (main line) ke perangkat elektronik lainnya sehingga
                                                                        perangkat elektronik tersebut dapat menerima arus listrik dan dapat berfungsi sebagaimana mestinya.

                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <!-- Modal footer -->
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- END --}}
                                    </table>
                                </div>
                            </div>
                        </div>



<!--JS Sidebar-->
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        let btnToggle = document.getElementById('btnToggle');
        let btnToggle2 = document.getElementById('btnToggle2');
        let sidebar = document.querySelector('.sidebar');
        let leftNav = document.getElementById("left-nav");
        btnToggle.onclick = function() {
            sidebar.classList.toggle('in-active');
        }

        btnToggle2.onclick = function() {
            leftNav.classList.toggle('hidden');
        }
    </script>

    <script>
        $(document).ready(function () {
                $('#dataTable').DataTable();

            });
    </script>
    </body>
</html>
