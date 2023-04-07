
    <div class="bg-white p-4 w-full flex-row flex">
        <img src="img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer mr-auto" id="btnToggle2">

        <div class="items-center gap-x-4 justify-end hidden sm:flex">
            <img class="w-10" src="img/icons/default_profile.svg" alt="Profile Image">
            <p class="text-dark-green font-semibold">
                @guest
                    Mahasiswa
                @else
                    {{auth()->user()->username}}
                @endguest
            </p>
        </div>
    </div>
