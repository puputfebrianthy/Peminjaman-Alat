<?php
?>
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
                <ul class="flex items-center gap-x-4 text-sm lg:text-sm">
                    <!-- NAVIGATOR HALAMAN HOME -->

                    <li>
                        <a class="text-light-green" href="#">Dashboard</a>
                    </li>

                    <li>
                        <span class="text-light-green">>></span>
                    </li>

                    <!-- NAVIGATOR HALAMAN COURSES -->

                    <li>
                        <a class="text-yellow-400 font-semibold" href="#">Monitoring laporan dosen </a>
                    </li>
                </ul>
            </div>

            {{-- content dashboard --}}
            <div class="px-2 mt-6 mx-10 lg:p-2 border-b-2 rounded-[10px] bg-white border-gray-300 shadow-md w-auto ">

                <h1 class="pl-3 text-lg text-black font-semibold">LAPORAN MONITORING DOSEN</h1>
            </div>
            <div class="container p-10 pb-8 md:px-8 lg:px-11">
                <div class="relative overflow-x-auto bg-white shadow-md rounded-[3px]">
                    <div class="w-full flex">
                        <div class="lg:p-6 p-6 border-b-3 rounded-[5px] w-full">
                            <table class="table-fixed pt-4 divide-y divide-gray-300" id="dataTable">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="p-2 text-sm text-gray-500">
                                            Hari/Tanggal
                                        </th>
                                        <th class="p-2 text-sm text-gray-500">
                                            Waktu
                                        </th>
                                        <th class="p-2 text-sm text-gray-500">
                                            Pokok pembahasan
                                        </th>
                                        <th class="p-2 text-sm text-gray-500">
                                            Metode Pembalajaran
                                        </th>
                                        <th class="p-2 text-sm text-gray-500">
                                            Jumlah Mahasiswa Yang Hadir
                                        </th>
                                        <th class="p-2 text-sm text-gray-500">
                                            Jumlah Mahasiswa Yang Tidak Hadir
                                        </th>
                                        <th class="px-2 text-sm text-gray-500">
                                            Dosen
                                        </th>
                                        <th class="px-2 text-sm text-gray-500">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($datas as $datas)
                                    <tbody class="bg-white">
                                        <tr class="text-center">
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-sm text-center text-black">
                                            {{ $datas->hari }}
                                            </td>
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-center">
                                                <div class="text-sm text-gray-900">
                                                {{ $datas->waktu }}
                                                </div>
                                            </td>
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-center">
                                                <div class="text-sm text-black">
                                                    {{ $datas->pembahasan}}
                                                </div>
                                            </td>
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-sm text-center text-black">
                                                {{ $datas->pembelajaran }}
                                            </td>
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-sm text-center text-black">
                                                {{ $datas->hadir }}
                                            </td>
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-sm text-center text-black">
                                                {{ $datas->alpa }}
                                            </td>
                                            <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-6 py-4 text-center">
                                                <a href="#" class="text-black px-4 py-1 text-sm">
                                                    {{ $datas->dosen }}
                                                </a>
                                            </td>
                                            {{-- ICONTS BUTTON --}}
                                            <td class=" border border-r-0 border-l-0 border-t-0 border-slate-200 flex-row justify-center flex">
                                                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 font-medium flex-row flex
                                                items-center rounded-[3px] px-1 py-1 focus:outline-none mr-2 my-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                                    <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                  </svg>
                                                </button>
                                            </td>
                                            {{-- AND ICONTS --}}
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
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

         $(document).ready(function() {
                                     $(document).on('click', '#btnEdit', function() {
                                        console.log('edit');
                                        let event_name = $(this).data('eventname');
                                        $('#event_name').val(event_name);

                                        let event_type_name = $(this).data('eventtypename');
                                        $('#event_type_name').val(event_type_name);

                                        let event_start_time = $(this).data('eventstarttime');
                                        $('#event_start_time').val(event_start_time);

                                        let event_end_time = $(this).data('eventendtime');
                                        $('#event_end_time').val(event_end_time);

                                        let event_description = $(this).data('description');
                                        $('#event_description').val(event_description);

                                        let batch_id = $(this).data('batchid');
                                        $('#batch_id').val(batch_id);

                                        let modul_id = $(this).data('modulid');
                                        $('#modul_id').val(modul_id);

                                        let event_id = $(this).data('eventid');
                                        $('#event_id').val(event_id);
                                     })
                         })
    </script>

        <script>
   $(document).ready(function () {
                $('#dataTable').DataTable();

            });
        </script>
    </body>
</html>
