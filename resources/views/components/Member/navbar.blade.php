<header class="header ">
    <nav>
        <div class="logo">KampusMalang.</div>
        <form class="w-1/2">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" name="cari" id="default-search" class="cpt block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500   " placeholder="Cari Perguruan Tinggi"  />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-rose-950  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <div class="auth">
            @auth
            <div class="relative inline-block">
                <div class="absolute top-0 right-0 w-6 h-6 flex items-center justify-center text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -mt-2 -mr-2 dark:border-gray-900">
                  2
                </div>
                <a href="{{ route('profile', Auth::user()->id) }}">
                  <img src="{{ url('storage/image/kosong.jpg') }}" class="border-2 border-black image_profile rounded-full" alt="Profile">
                </a>
              </div>

            @endauth
            @guest
            <a href="{{route('login')}}" class="btn login">Login</a>
            <a href="{{route('register')}}" class="btn register">Register</a>
            @endguest
        </div>
    </nav>
</header>

