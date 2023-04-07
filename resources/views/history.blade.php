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

    <div class=" w-full h-screen flex-auto flex-col gap-y-4 bg-slate-100 overflow-y-scroll">
        <!-- Header / Profile -->

            @include('components.header')

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
                        <a class="text-yellow-400 font-semibold" href="#">Riwayat peminjaman alat</a>
                    </li>
                </ul>
            </div>


            {{-- content dashboard --}}
            <div class="px-2 mt-6 mx-10 lg:p-2 border-b-2 rounded-[10px] bg-white border-gray-300 shadow-md w-auto ">

                <h1 class="pl-3 text-lg text-black font-semibold">RIWAYAT PEMINJAMAN</h1>
            </div>
            <div class="container p-10 pb-8 md:px-8 lg:px-11">
                <div class="relative overflow-x-auto bg-white shadow-md rounded-[3px]">
                    <div class="w-full flex">
                        <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                                <table class="pt-4 divide-y divide-gray-300" id="dataTable">
                                    <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-8 text-xs text-gray-500">
                                        Nama
                                    </th>
                                    <th class="p-8 text-xs text-gray-500">
                                        Nim
                                    </th>
                                    <th class="p-2 text-xs text-gray-500">
                                        Nama Dosen
                                    </th>
                                    <th class="p-2 text-xs text-gray-500">
                                        Mata kuliah
                                    </th>
                                    <th class="p-2 text-xs text-gray-500">
                                        Ruangan
                                    </th>
                                    <th class="p-2 text-xs text-gray-500">
                                        Alat Pinjaman
                                    </th>
                                    <th class="px-2 text-xs text-gray-500">
                                        Waktu
                                    </th>
                                    <th class="p-2 text-xs text-gray-500">
                                        Tanggal
                                    </th>
                                    <th class="px-2 text-xs text-gray-500">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($datas as $datas)
                            <tbody class="bg-white">
                                <tr class="whitespace-nowrap">
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-sm text-center text-black">
                                        {{ $datas->nama }}
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-xs text-center text-black">
                                        {{ $datas->nim }}
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-center">
                                        <a href="#" class="px-4 py-1 text-xs">
                                    {{ $datas->dosen }}</a>
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-xs text-center text-black">
                                        {{ $datas->Matakuliah }}
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-xs text-center text-black">
                                        {{ $datas->Kelas }}
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-center">
                                        <div class="text-xs text-gray-900">
                                        {{ $datas->alat }}
                                        </div>
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-center">
                                        <a href="#" class="px-4 py-1 text-xs">
                                    {{ $datas->waktu }}</a>
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-xs text-center text-black">
                                        {{ $datas->tanggal }}
                                    </td>
                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 flex-row flex justify-center">
                                        <button type="button" class="text-white bg-green-800 font-medium flex-row flex
                                        items-center rounded-[2px] focus:outline-none mr-2">
                                        <a href="#" class="px-1 py-1 text-xs rounded">
                                            {{ $datas->status }}
                                        </a>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
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
