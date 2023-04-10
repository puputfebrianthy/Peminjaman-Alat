<div class="flex items-center">
    <!-- Left side (Sidebar) -->
    <div class="bg-yellow-400 w-[350px] h-screen px-8 py-6 sm:flex flex-col justify-between sidebar in-active hidden">
        <!-- Top nav -->
        <div class="flex flex-col gap-y-6">
            <!-- Header -->
            <div class="flex items-center space-x-3 px-2">
                <img class=" w-[900px] logo-uncp" src="img/Q.png" alt="Logo Universitas Cokroaminoto Palopo">
            </div>

            <hr class="border-[1px] border-opacity-50 border-white" />

            <!-- List Menus -->
            <div>
                <ul class="flex flex-col gap-y-1">
                    <!-- ICON DASHBOARD -->

                    <li>
                        <a href="/dashboard" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                              </svg>
                            <p class="font-semibold text-base">Dashboard</p>
                        </a>
                    </li>
                    @guest
                    <li>
                        <a href="/ketersediaanAlat" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg>
                            <p class="font-semibold text-base">Ketersediaan alat</p>
                        </a>
                    </li>

                    <li>
                        <a href="/peminjaman" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                              </svg>
                            <p class="font-semibold text-base">Peminjaman alat</p>
                        </a>
                    </li>

                    <li>
                        <a href="/laporanPeminjaman" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                                <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                              </svg>
                            <p class="font-semibold text-base">Laporan peminjaman</p>
                        </a>
                    </li>
                    @endguest
                    <!-- ICON ALAT -->
                    @auth
                    <li>
                        <a button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-database-fill-check" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z"/>
                                <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z"/>
                              </svg>
                        <p class="font-semibold text-base">Data Peminjam</p>
                            <svg class="w-4 h-4 ml-2 flex-row flex" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="px-2 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-55 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                @auth
                                    <li>
                                        <a href="/validasi" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Validasi peminjaman alat</a>
                                    </li>
                                    <li>
                                        <a href="/pengembalian" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Pengembalian alat</a>
                                    </li>
                                    <li>
                                        <a href="/history" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Riwayat peminjaman alat</a>
                                    </li>
                                    @endauth
                            </ul>
                        </div>
                    </li>
                    @endauth
                    <!-- ICON MONITORING DOSEN -->
                    @auth
                    <li>
                        <a href="/monitoring" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
                            <p class="font-semibold text-base">Monitoring Dosen</p>
                        </a>
                    </li>
                    <!-- ICON LAPORAN HASIL MD -->
                    <li>
                        <a href="mld" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-richtext-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                              </svg>
                            <p class="font-semibold text-base">Laporan Hasil MD</p>
                        </a>
                    </li>
                    @if (Auth::user()->level == 'superadmin')
                        <li>
                            <a href="register" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                  </svg>
                                <p class="font-semibold text-base">Buat Akun Baru</p>
                            </a>
                        </li>
                    @endif
                    @endauth

                </ul>
            </div>
        </div>

        <!-- Bottom nav -->
        @auth
        <div>
            <ul class="flex flex-col ">
                <!-- ICON DAN TEXT LOG OUT -->
                <li>
                    <form action="{{ url('/logout') }}" method="post">
                        @method('post')
                        @csrf
                        <button type="submit"class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                        <p class="font-semibold text-lg">Keluar</p>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <div>
            <ul class="flex flex-col ">
                <!-- ICON DAN TEXT LOG OUT -->
                <li>
                    <a href="/" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    <p class="font-semibold text-lg">Keluar</p>
                    </a>
                </li>
            </ul>
        </div>
        @endauth
    </div>

    <!-- MOBILE NAVBAR -->
    {{-- <div id="left-nav" class="bg-opacity-50 bg-gray-500 fixed top-[130px] bottom-0 overflow-y-scroll inset-x-0 hidden z-10 transition-all ease-in-out duration-500 sm:hidden">

        <div class="bg-yellow-400 w-[250px] h-screen px-6 py-6">

            <!-- Top nav -->
            <div class="flex flex-col gap-y-6">

                <!-- List Menus -->
                <div>
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] px-4" id="profil_image">
                                <img class="w-5" src="./Img/icons/default_profile.svg" alt="Profile Image">
                                <p class="font-semibold"></p>
                                <!-- <p class="font-semibold"></p> -->
                            </a>
                            <!-- ICON DAN TEXT DASHBOARD -->
                        </li>
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                                  </svg>
                                <p class="font-semibold text-base">Dashboard</p>
                            </a>
                        </li>
                        <!-- ICON ALAT -->
                        <li>
                            <a button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-database-fill-check" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z"/>
                                    <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z"/>
                                  </svg>
                            <p class="font-semibold text-base">Data Peminjam</p>
                                <svg class="w-4 h-4 ml-2 flex-row flex" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="px-2 hidden  bg-white divide-y divide-gray-100 rounded-lg shadow w-55 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="/ketersediaanAlat" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Ketersediaan Alat</a>
                                </li>
                                <li>
                                    <a href="/peminjaman" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Peminjaman alat</a>
                                </li>
                                <li>
                                    <a href="/laporanPeminjaman" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Laporan Peminjaman Alat</a>
                                </li>
                                <li>
                                    <a href="/validasi" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Validasi peminjaman alat</a>
                                </li>
                                <li>
                                    <a href="/pengembalian" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Pengembalian alat</a>
                                </li>
                                <li>
                                    <a href="/history" class="block px-4 py-2 text-black hover:bg-yellow-400 hover:text-white rounded-[5px]">Riwayat peminjaman alat</a>
                                </li>
                            </ul>
                            </div>
                        </li>
                         <!-- ICON MONITORING DOSEN -->
                         <li>
                            <a href="/monitoring" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                  </svg>
                                    <p class="font-semibold text-base">Monitoring Dosen</p>
                                </a>
                        </li>
                        <!-- ICON LAPORAN HASIL MD -->
                        <li>
                            <a href="mld" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-richtext-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                                  </svg>
                                <p class="font-semibold text-base">Laporan Hasil MD</p>
                            </a>
                        </li>
                        <!-- ICON BUAT AKUN BARU -->
                        <li>
                            <a href="mld" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-richtext-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                                  </svg>
                                <p class="font-semibold text-base">Buat Akun Baru</p>
                            </a>
                        </li>
                        <!-- ICON LOG OUT -->
                        <li>

                                <form action="{{ url('/logout') }}" method="post">
                                    @method('post')
                                    @csrf
                                    <button type="submit" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-white text-white hover:text-black" onclick=" return confirm('Anda yakin ingin keluar?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                    <p class="font-semibold text-lg">Logout</p>
                                    </button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
