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
        <div class="flex items-center">
            @include('components.sidebar')
            <div class=" w-full h-screen flex-auto flex-col gap-y-4 bg-slate-100 overflow-y-scroll">
                <!-- Header / Profile -->
                @include('components.header')
                <!-- Breadcrumb -->
                <div class=" lg:p-2 lg:py-4 mx-8 mt-2">
                    <ul class="flex items-center gap-x-4 text-xs lg:text-sm">
                        <!-- NAVIGATOR HALAMAN HOME -->
                        <li>
                            <a class="text-light-green" href="#">Dashboard</a>
                        </li>
                        <li>
                            <span class="text-light-green">>></span>
                        </li>
                        <!-- NAVIGATOR HALAMAN COURSES -->
                        <li>
                            <a class="text-yellow-400 font-semibold" href="#">Monitoring dosen</a>
                        </li>
                    </ul>
                </div>
                {{-- content dashboard --}}
                <div class="px-2 mt-6 mx-10 lg:p-2 border-b-2 rounded-[10px] bg-white border-gray-300 shadow-md w-auto ">
                    <h1 class="pl-3 text-lg text-black font-semibold">MONITORING DOSEN</h1>
                </div>
                <div class="container p-10 pb-8 md:px-8 lg:px-11">
                    <div class="flex flex-col">
                        <div class="w-full flex">
                            <div class="lg:p-9 p-9 border-b-3 rounded-[5px] w-[720px] bg-white border-gray-300 shadow">
                                <!-- <table> -->
                                <form action="/createmonitoring" method="POST">
                                    @csrf
                                    @method('post')
                                    
                                    <div class="mb-4">
                                        <label for="kuliah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah</label>
                                        <input type="" id="kuliah" name="kuliah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-200
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="hari" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari/Tanggal</label>
                                        <input type="date" id="hari" name="hari" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-200
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama lengkap" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="waktu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam</label>
                                        <input type="time" id="waktu" name="waktu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nim mahasiswa" required>
                                    </div>

                                    <div class="mb-4 font-medium text-sm text-gray-900">
                                        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-2">
                                            <div class="col sm:mb-4">
                                                <label for="hadir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Hadir</label>
                                                <input type="number" id="hadir" name="hadir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Hadir" required>      
                                            </div>
                                            <div class="col">
                                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Tiak Hadir</label>
                                                <input type="number" id="" name="alpa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-200 dark:border-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tidak Hadir" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SKS</label>
                                        <input type="number" id="sks" name="sks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="SKS" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                        <input type="" id="semester" name="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kelas</label>
                                        <input type="" id="kelas" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required>
                                    </div>
                                
                                    <div class="mb-4">
                                        <label for="pembahasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pokok pembahasan</label></label>
                                        <textarea rows="3" cols="50" id="pembahasan" name="pembahasan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                        dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="pembelajaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode pembelajaran</label>
                                        <textarea rows="3" cols="50" id="pembelajaran" name="pembelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                        dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        </textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="dosen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosen Pengajar</label>
                                        <select name="dosen" id="dosen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                                            dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                            <option type=""> Vicky bin djusmin</option>
                                            <option type=""> Vicky bin djusmin</option>
                                            <option type=""> Vicky bin djusmin</option>
                                        </select>
                                    </div>
                                    <div class="flex items-start mb-4">
                                        <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none
                                        font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-400 dark:hover:bg-yellow-400
                                        dark:focus:ring-yellow-400">Submit</button>
                                        </div>
                                </form>
                            </div>
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
        </script>

        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable();
            });
        </script>
    </body>
</html>
