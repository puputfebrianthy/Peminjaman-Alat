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

<body class="">
    <!-- Navbar -->
    <body data-title="Welcome!" data-intro="Hello World!" class="card-demo dark:text-black text-black">

        <div class="mx-10">
            {{-- kop surat --}}
            <div class="flex items-center justify-center">
                <div class="w-28 h-auto">
                    <img class="h-auto w-auto rounded-xl" src="/img/uncok.png" alt="">
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
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Mata Kuliah</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p>Pemrograman HTML </p>
                </div>
            </div>
            {{-- tanggal--}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full font-normal">
                    <p>Hari/Tanggal</p>
                </div>
                <div class="w-full flex ">
                    <span class="mr-3">: </span>
                    <p>{{ $datas->created_at }}</p>
                </div>
            </div>
             {{-- waktu --}}
             <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Jam</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p>{{ date('H:i', strtotime($datas->waktu)) }}</p>
                </div>
            </div>
            {{-- jumlah sks --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>SKS</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p><span class="mr-1">{{ $datas->sks }}</span> SKS</p>
                </div>
            </div>
            {{-- semester --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Semester</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p><span>{{ $datas->semester }}</span></p>
                </div>
            </div>
            {{-- kelas --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Kelas</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p>{{ $datas->kelas }}</p>
                </div>
            </div>
             {{-- pokok pembahasan --}}
             <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Pokok Pembahasan</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p>{{ $datas->pembahasan }}</p>
                </div>
            </div>
             {{-- metode pembelajaran --}}
             <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Metode pembelajaran</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p>{{ $datas->pembelajaran }}
                    </p>
                </div>
            </div>
            {{-- jumlah mahasiswa yang hadir --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Jumlah mahasiswa yang hadir</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p><span class="mr-1">{{ $datas->hadir }}</span> Siswa</p>
                </div>
            </div>
            {{-- yang tidak hadir --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Jumlah mahasiswa yang tidak hadir</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p><span class="mr-1">{{ $datas->alpa }}</span> Siswa</p>
                </div>
            </div>
            {{-- dosen --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Dosen</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-3">: </span>
                    <p>{{ $datas->nama_dosen }}</p>
                </div>
            </div>

            <div class="flex justify-end mb-5 mt-7 mr-5">
                <p>{{ $datas->created_at }}</p>
            </div>
            {{-- Tanda Tangan --}}
            <div class="flex justify-around">
                {{-- Tanda tangan dosen mengajar --}}
                <div class=" text-sm text-black tracking-wide">
                    <div>
                        <p>Menyetujui</p>
                        <p class="font-bold mb-[70px] mt-1 w-full">Dosen Pengajar</p>
                        <P class="font-bold">{{ $datas->nama_dosen }}</P>
                        <p>NIP./NIDN. : <span>{{ $datas->no_induk }}</span></p>
                    </div>
                </div>
                <div></div>
                {{-- tanda tangan ketua tingkat --}}
                <div class="text-sm text-black tracking-wide">
                    <div>
                        <p class="font-bold mb-[70px] mt-5">Ketua Tingkat</p>
                        <P class="font-bold">..........................</P>
                        {{-- <p>NIDN. <span>0926018902</span></p> --}}
                    </div>
                </div>
            </div>
            <div class="flex item-center justify-center text-center mt-10">
                {{-- Tanda tangan ketua prodi--}}
                <div class=" text-sm text-black tracking-wide">
                    <div>
                        <p>Mengetahui,</p>
                        <p class="font-bold mb-[70px] mt-1 w-full">Ketua Prodi</p>
                        <P class="font-bold">Vicky bin djusmin,S.kom.,M.Kom</P>
                        <p>NIDN. <span>0927119004</span></p>
                    </div>
                </div>
            </div>
            <br>

        </div>
    <script type="text/javascript">
        window.print();
    </script>
    </body>
</html>
