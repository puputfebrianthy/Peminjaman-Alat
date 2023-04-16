<?php
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Monitoring Dosen</title>
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

                                {{-- Search --}}
								<div class="flex justify-between  mb-4 mt-[0px]">
									<div></div>									
									<form class="flex items-center" action="/mld" method="get">   
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
													Nama<span class="text-gray-300">_</span>Dosen
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Mata Kuliah
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Kelas
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Metode Pembelajaran
												</th>
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Mahasiswa Hadir/Absen
												</th>
                                                <th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Tanggal
												</th>
                                                <th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Jam
												</th>												
												<th scope="col" class="px-4 py-4 border-l-2 border-gray-200">
													Aksi
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
														{{ $data->nama_dosen }}
													</td>
													<td class="px-3 py-2 font-medium">
														{{ $data->mata_kuliah }}
													</td>
													<td class="px-3 py-2 font-medium">
														{{ $data->kelas }}
													</td>
													<td class="px-3 py-2 font-medium"> 
                                                        {{Str::words($data->pembelajaran, 4, '.. ')}}
													</td>
													<td class="px-3 py-2 font-medium text-center">
														{{ $data->hadir }} / {{ $data->alpa }}
													</td>
													<td class="px-3 py-2 font-medium">
														{{ \Carbon\Carbon::parse($data->tanggal)->format('d/m/Y')}}
													</td>
													<td class="px-3 py-2 font-medium">
														{{ date('H:i', strtotime($data->waktu)) }} 
													</td>
													<td class="px-3 py-2 my-2 font-medium text-right  border-slate-200 relative flex-row flex justify-center">
														<a href="{{url("/cetaksurat/{$data->id}")}}" target="_blank" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 font-medium flex-row flex
                                                            items-center rounded-[3px] px-2 py-[6px] focus:outline-none mr-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                                                <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                                                                <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                            </svg>
                                                            <span class="ml-1">Download</span>
                                                        </a>
                                                	</td>
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
    </body>
</html>
