<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ketersediaan Alat</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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
                <div class="lg:p-2 lg:py-4 mx-8 mt-2">
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
                            <a class="text-yellow-400 font-semibold" href="#">Ketersediaan alat</a>
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

                                {{-- Search --}}
								<div class="flex justify-between  mb-4 mt-[0px]">
									<div></div>									
									<form class="flex items-center" action="/ketersediaanAlat" method="get">   
										@csrf
										<label for="simple-search" class="sr-only">Search</label>
										<div class="relative w-full">
											<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
												<svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
											</div>
											<input type="text" id="simple-search" name="search" value="{{ request('search') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
										</div>
										<button type="submit" class="p-2 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
											<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
											<span class="sr-only">Search</span>
										</button>
									</form>
								</div>
			
								<div class="relative overflow-x-auto mb-3">
									<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
										<thead class="text-sm text-gray-700 bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
											<tr>
												<th scope="col" class="px-4 py-4">
													No
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Nama Alat
												</th>
                                                <th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
                                                    Jumlah Alat
                                                </th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Kode Alat
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Keterangan
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($datas as $data)
												<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
													<th scope="row" class="px-3 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
														{{ $loop->iteration }}
													</th>
													<td class="px-3 py-2 font-medium">
														{{ $data->nama }}
													</td>
                                                    <td class="px-3 py-2 font-medium">
                                                        {{ $data->jumlah }}
                                                    </td>													
													<td class="px-3 py-2 font-medium">
														{{ $data->kode_alat }}
													</td>
                                                    <td class="border border-r-0 border-l-0 border-t-0 border-slate-200 px-3 py-3 text-sm text-center text-gray-500">
                                                        <button class=" md:visible mdx:hidden md:mt-2 h-6 smx:text-xs smx:h-2 text-[10] mx-auto text-white bg-yellow-500 hover:bg-yellow-500 focus:ring-4 focus:outline-none font-medium rounded-[3px] text-sm px-4 text-center dark:bg-yellow-500 dark:hover:bg-yellow-500" type="button" data-modal-toggle="{{ $data->kode_alat }}">
                                                            <span class="">Aksi</span>
                                                        </button>
                                                    </td>

													<!-- Main modal -->
                                                    <div id="{{ $data->kode_alat }}" tabindex="-1" aria-hidden="true"
                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                            <!-- Modal content -->
                                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600 bg-yellow-400 hover:bg-yellow-400">
                                                                    <p class="font-semibold text-white">{{ $data->nama }}</p>
                                                                    <button type="button"
                                                                        class="text-[659093] bg-transparent hover:bg-white text-white hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                                        data-modal-toggle="{{ $data->kode_alat }}">
                                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <div class="p-6 space-y-6 bg-scroll bg-contain overflow-auto  h-54 min-w-full ">
                                                                    <div class="grid grid-cols-2 gap-2 pl-5 py-5 sm-flex-10 ">
                                                                        <div>
                                                                            <img class="h-56 max-w-xl w-[240px] rounded-2xl" src="img/{{ $data->gambar }}" alt="{{ $data->gambar }}">
                                                                        </div>
                                                                        <p class="text-justify font-normal">{{ $data->keterangan }}
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                                <!-- Modal footer -->
                                                            </div>
                                                        </div>
                                                    </div>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								{{ $datas->links() }}

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
